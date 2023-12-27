<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','image','status'];

    private static $brand, $image, $imageName, $directory, $imageUrl,$extension;

   private static function getImageUrl($request)
   {
    self::$image        = $request->file('image');
    self::$extension    = self::$image->getClientOriginalExtension();
    self::$imageName    = rand(0,500000).time().'.'.self::$extension;
    self::$directory    = "uploaded-files/brand-images/";
    self::$image->move(self::$directory, self::$imageName);
    self::$imageUrl     = self::$directory.self::$imageName;
    return self::$imageUrl;
   }

   public static function newBrand($request)
   {
       self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : ' ';

       self::$brand = new Brand();
       self::saveBasicInfo(self::$brand,$request,self::$imageUrl);
   }

   public static function updateBrand($request,$id)
   {
        $brand = Brand::find($id);
       if($request->file('image'))
       {
           if(file_exists($brand->image))
           {
               unlink($brand->image);
           }
           self::$imageUrl =self::getImageUrl($request);
       }else{
           self::$imageUrl = $brand->image;
       }
       self::saveBasicInfo($brand,$request,self::$imageUrl);
   }

   private static function saveBasicInfo($brand,$request,$imageUrl)
   {

       $brand->name                    = $request->name;
       $brand->description             = $request->description;
       $brand->image                   = $imageUrl;
       $brand->status                  = $request->status;
       $brand->save();
   }

   public static function deleteBrand($id)
   {
    $brand = Brand::find($id);

       if(file_exists($brand->image))
       {
           unlink($brand->image);
       }
       $brand->delete();
   }
}
