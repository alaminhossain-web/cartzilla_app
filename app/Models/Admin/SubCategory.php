<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subcategory, $image, $imageName, $directory, $imageUrl,$extension;

   private static function getImageUrl($request)
   {
    self::$image        = $request->file('image');
    self::$extension    = self::$image->getClientOriginalExtension();
    self::$imageName    = rand(0,500000).time().'.'.self::$extension;
    self::$directory    = "uploaded-files/subCategory-images/";
    self::$image->move(self::$directory, self::$imageName);
    self::$imageUrl     = self::$directory.self::$imageName;
       return self::$imageUrl;
   }

   public static function newSubCategory($request)
   {
       self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : ' ';

       self::$subcategory = new SubCategory();
       self::saveBasicInfo(self::$subcategory,$request,self::$imageUrl);
   }

   public static function updateSubCategory($request,$id)
   {
        $subcategory = SubCategory::find($id);
       if($request->file('image'))
       {
           if(file_exists($subcategory->image))
           {
               unlink($subcategory->image);
           }
           self::$imageUrl =self::getImageUrl($request);
       }else{
           self::$imageUrl = $subcategory->image;
       }
       self::saveBasicInfo($subcategory,$request,self::$imageUrl);
   }

   private static function saveBasicInfo($subcategory,$request,$imageUrl)
   {
       $subcategory->category_id             = $request->category_id;
       $subcategory->name                    = $request->name;
       $subcategory->description             = $request->description;
       $subcategory->image                   = $imageUrl;
       $subcategory->status                  = $request->status;
       $subcategory->save();
   }

   public static function deleteSubCategory($id)
   {
    $subcategory = SubCategory::find($id);

       if(file_exists($subcategory->image))
       {
           unlink($subcategory->image);
       }
       $subcategory->delete();
   }
   public function category()
   {
    return $this->belongsTo(Category::class);
   }
}
