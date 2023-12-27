@extends('website.master')

@section('title','Checkout Page')

@section('body')
 <!-- Page Title-->
 <div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
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
    <div class="row">
      <section class="col-lg-8">
        <!-- Steps-->
        <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
            <div class="step-progress"><span class="step-count">1</span></div>
            <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active" href="checkout-details.html">
            <div class="step-progress"><span class="step-count">2</span></div>
            <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item active" href="checkout-shipping.html">
            <div class="step-progress"><span class="step-count">3</span></div>
            <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item active current" href="checkout-payment.html">
            <div class="step-progress"><span class="step-count">4</span></div>
            <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="checkout-review.html">
            <div class="step-progress"><span class="step-count">5</span></div>
            <div class="step-label"><i class="ci-check-circle"></i>Review</div></a></div>
        <!-- Payment methods accordion-->
        <h2 class="h6 pb-3 mb-2">Choose payment method</h2>
        <div class="accordion mb-2" id="payment-method">
          <div class="accordion-item">
            <h3 class="accordion-header"><a class="accordion-button" href="#card" data-bs-toggle="collapse"><i class="ci-card fs-lg me-2 mt-n1 align-middle"></i>Pay with Credit Card</a></h3>
            <div class="accordion-collapse collapse show" id="card" data-bs-parent="#payment-method">
              <div class="accordion-body">
                <p class="fs-sm">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="img/cards.png" width="187" alt="Cerdit Cards"></p>
                <div class="credit-card-wrapper"></div>
                <form class="credit-card-form row">
                  <div class="mb-3 col-sm-6">
                    <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                  </div>
                  <div class="mb-3 col-sm-6">
                    <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                  </div>
                  <div class="mb-3 col-sm-3">
                    <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                  </div>
                  <div class="mb-3 col-sm-3">
                    <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                  </div>
                  <div class="col-sm-6">
                    <button class="btn btn-outline-primary d-block w-100 mt-0" type="submit">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h3 class="accordion-header"><a class="accordion-button collapsed" href="#paypal" data-bs-toggle="collapse"><i class="ci-paypal me-2 align-middle"></i>Pay with PayPal</a></h3>
            <div class="accordion-collapse collapse" id="paypal" data-bs-parent="#payment-method">
              <div class="accordion-body fs-sm">
                <p><span class='fw-medium'>PayPal</span> - the safer, easier way to pay</p>
                <form class="row needs-validation" method="post" novalidate>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input class="form-control" type="email" placeholder="E-mail" required>
                      <div class="invalid-feedback">Please enter valid email address</div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input class="form-control" type="password" placeholder="Password" required>
                      <div class="invalid-feedback">Please enter your password</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex flex-wrap justify-content-between align-items-center"><a class="nav-link-style" href="#">Forgot password?</a>
                      <button class="btn btn-primary" type="submit">Log In</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h3 class="accordion-header"><a class="accordion-button collapsed" href="#points" data-bs-toggle="collapse"><i class="ci-gift me-2"></i>Redeem Reward Points</a></h3>
            <div class="accordion-collapse collapse" id="points" data-bs-parent="#payment-method">
              <div class="accordion-body">
                <p>You currently have<span class="fw-medium">&nbsp;384</span>&nbsp;Reward Points to spend.</p>
                <div class="form-check d-block">
                  <input class="form-check-input" type="checkbox" id="use_points">
                  <label class="form-check-label" for="use_points">Use my Reward Points to pay for this order.</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Navigation (desktop)-->
        <div class="d-none d-lg-flex pt-4">
          <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="checkout-shipping.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Shipping</span><span class="d-inline d-sm-none">Back</span></a></div>
          <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="{{route('checkout-review')}}"><span class="d-none d-sm-inline">Review your order</span><span class="d-inline d-sm-none">Review order</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
        </div>
      </section>
      <!-- Sidebar-->
      <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
        <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
          <div class="py-2 px-xl-2">
            <div class="widget mb-3">
              <h2 class="widget-title text-center">Order summary</h2>
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                  <div class="widget-product-meta"><span class="text-accent me-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                  <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/03.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                  <div class="widget-product-meta"><span class="text-accent me-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/04.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                  <div class="widget-product-meta"><span class="text-accent me-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
            </div>
            <ul class="list-unstyled fs-sm pb-2 border-bottom">
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">$265.<small>00</small></span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Shipping:</span><span class="text-end">—</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes:</span><span class="text-end">$9.<small>50</small></span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount:</span><span class="text-end">—</span></li>
            </ul>
            <h3 class="fw-normal text-center my-4">$274.<small>50</small></h3>
            <form class="needs-validation" method="post" novalidate>
              <div class="mb-3">
                <input class="form-control" type="text" placeholder="Promo code" required>
                <div class="invalid-feedback">Please provide promo code.</div>
              </div>
              <button class="btn btn-outline-primary d-block w-100" type="submit">Apply promo code</button>
            </form>
          </div>
        </div>
      </aside>
    </div>
    <!-- Navigation (mobile)-->
    <div class="row d-lg-none">
      <div class="col-lg-8">
        <div class="d-flex pt-4 mt-3">
          <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="checkout-shipping.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Shipping</span><span class="d-inline d-sm-none">Back</span></a></div>
          <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="{{route('checkout-review')}}"><span class="d-none d-sm-inline">Review your order</span><span class="d-inline d-sm-none">Review order</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
        </div>
      </div>
    </div>
  </div>
@endsection