<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Offer;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class CartzillaController extends Controller
{
    public function home()
    {
        return view('website.home.index',[
            'products' => Product::where('featured_status',1)->orderBy('id','desc')->take(8)->get(['id','name','image','category_id','regular_price','selling_price']),
            'offers' => Offer::all()        
        ]);
    }
    public function category($id)
    {
        return view('website.category.index',[
            'category' => Category::find($id),
            'products'=> Product::where('category_id',$id)->orderBy('id','desc')->get(['id','name','image','regular_price','selling_price']),
        ]);
    }
    public function product($id)
    {
        return view('website.product.index',[
            'product'=> Product::find($id),
        ]);
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function contact()
    {
        return view('website.contact.index');
    }
}
