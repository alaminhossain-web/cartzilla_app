<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout\Customer;
use App\Models\Checkout\Order;
use Session;

class CustomerAuthController extends Controller
{
    private $customer,$orders;
    public function login()
    {
        return view('website.customer.login');
    }
    public function loginCheck(Request $request)
    {
        $this->customer = Customer::where('email',$request->user_name)->orWhere('mobile',$request->user_name)->first();
        if($this->customer)
        {
            if(password_verify($request->password,$this->customer->password))
            {
                Session::put('customer_id',$this->customer->id);
                Session::put('customer_name',$this->customer->name);

                return redirect('/my-dashboard');
            }else
        {
            return back()->with('message','Your password is not valid');

        }
        }
        else
        {
            return back()->with('message','Your email or mobile is not valid');
        }

    }
    
    public function newCustomer(Request $request)
    {
        $this->customer = Customer::newCustomer($request);
        Session::put('customer_id',$this->customer->id);
        Session::put('customer_name',$this->customer->name);
        return redirect('/my-dashboard');
        //return redirect('/login-register')->with('message','Your Registration Successfully.Please Login for Shopping...');

    }
    public function  logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }
    public function dashboard()
    {
        $this->orders = Order::where('customer_id',Session::get('customer_id'))->orderBy('id','desc')->get();
        return view('website.customer.dashboard',[
            'orders' => $this->orders
        ]);
    }
}
