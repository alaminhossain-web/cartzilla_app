<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Color;
use App\Models\Admin\Product;
use App\Models\Admin\Size;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $subCategories,$product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index',[
            'categories'=> Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add',[
            'categories' => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
            'colors' => Color::all(),
            'sizes' => Size::all(),

        ]);

    }
    public function getSubCategoryByCategory()
    {
       $this->subCategories = SubCategory::where('category_id',$_GET['id'])->get();
        return response()->json($this->subCategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
       ProductColor::newProductColor($request->colors, $this->product->id);
       ProductSize::newProductSize($request->sizes,$this->product->id);
       ProductImage::newProductImage($request->other_images,$this->product->id);
        return back()->with('message','Product Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.product.show',[
            'product'=> Product::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.edit',[
            'product'=> Product::find($id),
            'categories' => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
            'colors' => Color::all(),
            'sizes' => Size::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        Product::updateProduct($request,$id);
        ProductColor::updateProductColor($request->colors,$id);
        ProductSize::updateProductSize($request->sizes,$id);
        if($request->other_images)
        {
            ProductImage::updateProductImage($request->other_images,$id);

        }
        return redirect('/product')->with('update','Product info Update Successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Product::deleteProduct($id);
        ProductColor::deleteProductColor($id);
        ProductSize::deleteProductSize($id);
        ProductImage::deleteProductImage($id);
        return back()->with('error','Product Deleted Successfully');
    }
}
