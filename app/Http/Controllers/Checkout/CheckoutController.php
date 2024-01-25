<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SslCommerz\SslCommerzPaymentController;
use Illuminate\Http\Request;
use App\Models\Checkout\Customer;
use App\Models\Checkout\Order;
use App\Models\Checkout\OrderDetail;
use Session;

class CheckoutController extends Controller
{
    private $customer, $order, $sslCommerzPayment;
    public function detail()
    {
        $this->customer = '';
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        return view('website.checkout.index', [
            'customer' => $this->customer
        ]);
    }
    public function newOrder(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
        if (!$this->customer) {
            $this->customer = Customer::newCustomer($request);
        }
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);
        if ($request->payment_method == 'online') {
            
            $this->sslCommerzPayment = new SslCommerzPaymentController;
            $this->sslCommerzPayment->index($request,$this->customer);

        } elseif ($request->payment_method == 'Cash') {

            $this->order = Order::newOrder($this->customer, $request);

            return redirect('/checkout-complete')->with('message', 'Congratulation...Your order post successfully.Please check your email and wait we will contact with you soon.');
        }


    }
    public function completeOrder()
    {
        return view('website.checkout.complete-order');
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
