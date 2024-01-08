<?php

namespace App\Models\Wishlist;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    private static $wishlist;

    public static function newWishlist($customer,$request)
    {
        
        self::$wishlist = new Wishlist();
        self::$wishlist->customer_id          = $customer->id;
        self::$wishlist->product_id           = $request->id;
        self::$wishlist->date                 = date('y-m-d');
        self::$wishlist->timestamp            = strtotime(date('y-m-d'));
        self::$wishlist->status               = $customer->status;
        self::$wishlist->save();
        return self::$wishlist;
        
    }
    public static function deleteWishlist($id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
