<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function detail() 
    {
        return view('website.checkout.index');
    }
    public function shipping() 
    {
        return view('website.checkout.shipping');
    }
    public function payment() 
    {
        return view('website.checkout.payment');
    }
    public function review() 
    {
        return view('website.checkout.review');
    }
    public function complete() 
    {
        return view('website.checkout.complete');
    }
}
