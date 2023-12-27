<?php

namespace App\Models\Admin;

use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product, $image, $imageName, $directory, $imageUrl,$extension;

    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = rand(0,500000).time().'.'.self::$extension;
        self::$directory    = "uploaded-files/product-images/";
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
         
    }

    public static function newProduct($request)
    {
        self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : 'upload/product.jpg ';

        self::$product = new Product();
        self::saveBasicInfo(self::$product,$request,self::$imageUrl);
        return self::$product;

    }
    public static function updateProduct($request,$id)
    {
        $product = Product::find($id);
        if($request->file('image'))
        {
            if(file_exists($product->image))
            {
                unlink($product->image);
            }
            self::$imageUrl =self::getImageUrl($request);
        }else{
            self::$imageUrl = $product->image;
        }
        self::saveBasicInfo($product,$request,self::$imageUrl);
    }
    private static function saveBasicInfo($product,$request,$imageUrl)
    {
        $product->category_id             = $request->category_id;
        $product->sub_category_id         = $request->sub_category_id;
        $product->brand_id                = $request->brand_id;
        $product->unit_id                 = $request->unit_id;
        $product->name                    = $request->name;
        $product->code                    = $request->code;
        $product->short_description       = $request->short_description;
        $product->long_description        = $request->long_description;
        $product->image                   = $imageUrl;
        $product->regular_price           = $request->regular_price;
        $product->selling_price           = $request->selling_price;
        $product->stock_amount            = $request->stock_amount;
        $product->status                  = $request->status;
        $product->save();
    }
    public static function deleteProduct($id)
    {
        $product = Product::find($id);

        if(file_exists($product->image))
        {
            unlink($product->image);
        }
        $product->delete();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function colors()
    {
        return $this->hasMany(ProductColor::class);
    }
    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }
    

}
