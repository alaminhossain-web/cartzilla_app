@extends('website.master')

@section('title','Checkout Page')

@section('body')
<div class="container pb-5 mb-sm-4">
    <div class="pt-5">
      <div class="card py-3 mt-sm-3">
        <div class="card-body text-center">
          <h2 class="h4 pb-3">Thank you for your order!</h2>
          <p class="fs-sm mb-2">{{ session('message')}}</p>
          <p class="fs-sm mb-2">Make sure you make note of your order number, which is <span class='fw-medium'>34VB5540K83.</span></p>
          <p class="fs-sm">You will be receiving an email shortly with confirmation of your order. <u>You can now:</u></p><a class="btn btn-secondary mt-3 me-3" href="shop-grid-ls.html">Go back shopping</a><a class="btn btn-primary mt-3" href="order-tracking.html"><i class="ci-location"></i>&nbsp;Track order</a>
        </div>
      </div>
    </div>
  </div>

@endsection