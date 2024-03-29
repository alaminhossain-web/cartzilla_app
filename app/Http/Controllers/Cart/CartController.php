<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.cart.index',[
            'products' => Cart::content()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::find($request->id);
        Cart::add([
            'id' => $request->id,
            'name' => $product->name,
            'qty' => $request->qty, 
            'price' => $product->selling_price,
            'options' => [
                'image' =>$product->image,
                'size' => $request->size,
                'color'=> $request->color,

            ]]);
        return redirect('/cart')->with('message','Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $request;
        //Cart::update($rowId, $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete(string $rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart')->with('error','Cart product remove successfully.');
    }
    public function updateProduct(Request $request)
    {

        foreach($request->data as $item)
        {
            Cart::update($item['rowId'], $item['qty']);
        }
        return redirect('/cart')->with('message','Cart product Updated successfully.');
    }
}
