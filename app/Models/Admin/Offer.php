<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    private static $offer, $image, $imageName, $directory, $imageUrl,$extension;

   private static function getImageUrl($request)
   {
    self::$image        = $request->file('image');
    self::$extension    = self::$image->getClientOriginalExtension();
    self::$imageName    = rand(0,500000).time().'.'.self::$extension;
    self::$directory    = "uploaded-files/offer-images/";
    self::$image->move(self::$directory, self::$imageName);
    self::$imageUrl     = self::$directory.self::$imageName;
       return self::$imageUrl;
   }

   public static function newOffer($request)
   {
       self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : ' ';

       self::$offer = new Offer();
       self::saveBasicInfo(self::$offer,$request,self::$imageUrl);
   }

   public static function updateOffer($request,$id)
   {
        $offer = Offer::find($id);
       if($request->file('image'))
       {
           if(file_exists($offer->image))
           {
               unlink($offer->image);
           }
           self::$imageUrl =self::getImageUrl($request);
       }else{
           self::$imageUrl = $offer->image;
       }
       self::saveBasicInfo($offer,$request,self::$imageUrl);
   }

   private static function saveBasicInfo($offer,$request,$imageUrl)
   {
    $offer->product_id                   = $request->product_id;
    $offer->title_one                    = $request->title_one;
    $offer->title_two                    = $request->title_two;
    $offer->description                  = $request->description;
    $offer->image                        = $imageUrl;
    $offer->status                       = $request->status;
    $offer->save();
   }

   public static function deleteCategory($id)
   {
    $offer = Offer::find($id);

       if(file_exists($offer->image))
       {
           unlink($offer->image);
       }
       $offer->delete();
   }
   public function product()
   {
       return $this->belongsTo(Product::class);
   }
   public function color()
   {
       return $this->belongsTo(Color::class);
   }
   public function size()
   {
       return $this->belongsTo(Size::class);
   }
}
