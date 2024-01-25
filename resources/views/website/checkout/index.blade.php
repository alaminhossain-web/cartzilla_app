@extends('website.master')

@section('title', 'Checkout Page')

@section('body')

    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">Checkout</h1>
            </div>
        </div>
    </div>


    <div class="container pb-5 mb-2 mb-md-4">
        <form method="post" action="{{ route('new-order') }}">
            @csrf
            <div class="row">
                <section class="col-lg-8">
                    @if (Session::get('customer_id'))
                        <!-- Autor info-->
                        <div
                            class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-3 mb-grid-gutter">
                            <div class="d-flex align-items-center">
                                <div class="img-thumbnail rounded-circle position-relative flex-shrink-0"><span
                                        class="badge bg-warning position-absolute end-0 mt-n2" data-bs-toggle="tooltip"
                                        title="Reward points">384</span><img class="rounded-circle"
                                        src="img/shop/account/avatar.jpg" width="90" alt="Susan Gardner"></div>
                                <div class="ps-3">
                                    <h3 class="fs-base mb-0">Susan Gardner</h3><span
                                        class="text-accent fs-sm">s.gardner@example.com</span>
                                </div>
                            </div><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="account-profile.html"><i
                                    class="ci-edit me-2"></i>Edit profile</a>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-md-5 my-1">
                        <h2 class="h6 text-light mb-0">Billing details</h2>
                        <a class="btn btn-outline-primary btn-sm pl-2"
                            href="https://cartzilla.madrasthemes.com/electronics/cart/">
                            <i class="czi-arrow-left mr-2"></i>
                            Back to cart
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="checkout-fn">Full Name</label>
                                @if (isset($customer->name))
                                    <input type="text" class="form-control" required="" readonly
                                        value="{{ $customer->name }}" name="name">
                                @else
                                    <input class="form-control" type="text" name="name" id="checkout-fn">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="checkout-email">E-mail Address</label>
                                @if (isset($customer->email))
                                    <input type="email" class="form-control" name="email" readonly
                                        value="{{ $customer->email }}" required="">
                                @else
                                    <input class="form-control" type="email" name="email" id="checkout-email">
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="checkout-phone">Phone Number</label>
                                @if (isset($customer->mobile))
                                    <input type="number" class="form-control" name="mobile" readonly
                                        value="{{ $customer->mobile }}" required="">
                                @else
                                    <input class="form-control" type="number" name="mobile" id="checkout-phone">
                                @endif
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="checkout-address-1">Delivery Address</label>
                                <textarea class="form-control" type="text" name="delivery_address" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="checkout-country">Payment Method</label>
                                <select class="form-select" name="payment_method">
                                    <option>Choose Payment Method</option>
                                    <option value="online">Online Payment</option>
                                    <option value="cash">Cash on Delivery</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </section>

                <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                    <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
                        <div class="py-2 px-xl-2">
                            <div class="widget mb-3">
                                <h2 class="widget-title text-center">Order summary</h2>
                                @php($sum = 0)
                                @foreach (Cart::content() as $item)
                                    <div class="d-flex align-items-center pb-2 border-bottom"><a
                                            class="d-block flex-shrink-0" href="shop-single-v1.html"><img
                                                src="{{ asset($item->options->image) }}" width="64"
                                                style="height: 64px" alt="Product"></a>
                                        <div class="ps-2">
                                            <h6 class="widget-product-title"><a
                                                    href="{{ route('product-detail', $item->id) }}">{{ $item->name }}</a>
                                            </h6>
                                            <div class="widget-product-meta"><span
                                                    class="text-accent me-2">${{ $item->price }}.<small>00</small></span><span
                                                    class="text-muted">x {{ $item->qty }}</span><span> =
                                                    ${{ $item->subtotal }}</span></div>
                                        </div>
                                    </div>
                                    @php($sum = $sum + $item->subtotal)
                                @endforeach
                            </div>
                            <ul class="list-unstyled fs-sm pb-2 border-bottom">
                                <li class="d-flex justify-content-between align-items-center"><span
                                        class="me-2">Subtotal:</span><span
                                        class="text-end">${{ $sum }}.<small>00</small></span></li>
                                <li class="d-flex justify-content-between align-items-center"><span
                                        class="me-2">Shipping:</span><span
                                        class="text-end">${{ $shipping = 100 }}.<small>00</small></span></li>
                                <li class="d-flex justify-content-between align-items-center"><span
                                        class="me-2">Taxes:</span><span
                                        class="text-end">${{ $tax = round($sum * 0.15) }}.<small>00</small></span></li>
                                <li class="d-flex justify-content-between align-items-center"><span
                                        class="me-2">Discount:</span><span class="text-end">—</span></li>
                            </ul>
                            <h3 class="fw-normal text-center my-4">
                                ${{ $orderTotal = $sum + $tax + $shipping }}.<small>00</small></h3>
                            <input type="hidden" readonly name="order_total" value="{{ $orderTotal }}">
                            <input type="hidden" readonly name="tax_total" value="{{ $tax }}">
                            <input type="hidden" readonly name="shipping_total" value="{{ $shipping }}">
                            <form class="needs-validation" method="post" novalidate>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Promo code">
                                    <div class="invalid-feedback">Please provide promo code.</div>
                                </div>
                                <button class="btn btn-outline-primary d-block w-100" type="submit">Apply promo
                                    code</button>
                            </form>
                            <div class="pt-4">
                                <button type="submit" class="button alt btn btn-primary btn-block w-100"  value="Place order">
                                    Place order
                                </button>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </form>
    @endsection
