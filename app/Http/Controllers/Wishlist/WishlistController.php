<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Models\Checkout\Customer;
use App\Models\Wishlist\Wishlist;
use Session;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $customer,$wishlist;
    public function index()
    {
        $this->wishlist= Wishlist::where('customer_id',Session::get('customer_id'))->get();
        return view('website.wishlist.index',[
            'products' => $this->wishlist
            
        ]);
    }
    public function add(Request $request)
    {
        if(Session::get('customer_id'))
        {
           $this->customer = Customer::find(Session::get('customer_id'));
           $this->wishlist= Wishlist::where('customer_id',Session::get('customer_id'))->where('product_id',$request->id)->first();
            if($this->wishlist)
                {
                    return back()->with('message','Already Added ...');
                }
            Wishlist::newWishlist($this->customer,$request);
            return redirect('/wishlist')->with('message',' Successfully Add..');
        }
        else
        {
            return redirect()->route('login-register')->with('redirect','Please Login or Register to active this feature...');

        } 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Wishlist::deleteWishlist($id);
        return back()->with('message','Wishlist Deleted Successfully');
    }
}
