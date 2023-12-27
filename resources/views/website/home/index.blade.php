@extends('website.master')

@section('title','Home')

@section('home','active')


@section('body')
    <!-- Hero slider-->
    <section class="tns-carousel tns-controls-lg">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
          
          @foreach ($offers as $offer)          
          <!-- Item-->
          <div class="px-lg-5" style="background-color: #3aafd2;">
            <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="{{ asset($offer->image) }}" alt="Men Accessories">
              <div class="position-relative  me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap" style="float: left">
                  <h3 class="h2 text-light fw-light pb-1 from-top">{{$offer->title_one}}</h3>
                  <h2 class="text-light display-5 from-top delay-1">{{$offer->title_two}}</h2>
                  <p class="fs-lg text-light pb-3 from-top delay-2">{{$offer->description}}</p>
                  <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      
      <!-- Popular categories-->
      <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
        <div class="row">
          <div class="col-xl-8 col-lg-9">
            <div class="card border-0 shadow-lg">
              <div class="card-body px-3 pt-grid-gutter pb-0">
                <div class="row g-0 ps-1">
                  <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none me-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="{{ asset('/') }}website/assets/img/home/categories/cat-sm01.jpg" alt="Men">
                      <h3 class="fs-base pt-1 mb-0">Men</h3></a></div>
                  <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none me-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="{{ asset('/') }}website/assets/img/home/categories/cat-sm02.jpg" alt="Women">
                      <h3 class="fs-base pt-1 mb-0">Women</h3></a></div>
                  <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none me-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="{{ asset('/') }}website/assets/img/home/categories/cat-sm03.jpg" alt="Kids">
                      <h3 class="fs-base pt-1 mb-0">Kids</h3></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Products grid (Trending products)-->
      <section class="container pt-md-3 pb-5 mb-md-3">
        <h2 class="h3 text-center">Trending products</h2>
        <div class="row pt-4 mx-n2">
          @foreach($products as $product)
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset($product->image) }}" style="height: 250px" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{                                                $product->category->name}}</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{$product->name}}</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">${{ $product->selling_price }}.<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-75">
                    <label class="form-option-label" for="s-75">7.5</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                    <label class="form-option-label" for="s-80">8</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-85">
                    <label class="form-option-label" for="s-85">8.5</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-90">
                    <label class="form-option-label" for="s-90">9</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          @endforeach
        </div>
        <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.html">More products<i class="ci-arrow-right ms-1"></i></a></div>
      </section>
      <!-- Category (Women)-->
      <section class="container pt-lg-3 mb-4 mb-sm-5">
        <div class="row">
          <!-- Banner with controls-->
          <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
              <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                <div>
                  <h3 class="mb-1">For Women</h3><a class="fs-md" href="shop-grid-ls.html">Shop for women<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                </div>
                <div class="tns-carousel-controls" id="for-women">
                  <button type="button"><i class="ci-arrow-left"></i></button>
                  <button type="button"><i class="ci-arrow-right"></i></button>
                </div>
              </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="{{asset('/')}}website/assets/img/home/categories/cat-lg02.jpg" alt="For Women"></a>
            </div>
          </div>
          <!-- Product grid (carousel)-->
          <div class="col-md-7 pt-4 pt-md-0">
            <div class="tns-carousel">
              <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-women&quot;}">
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/09.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Cosmetics</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Metallic Lipstick (Crimson)</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/26.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Textile Platform Sneakers</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$59.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/27.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$17.<small>99</small></span>
                              <del class="fs-sm text-muted">28.<small>99</small></del>
                            </div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/28.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$79.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/29.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Short Chino Shorts</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/30.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">T-shirt with Motif</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$13.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/01.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Colorblock Sneakers</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$154.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/02.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Blouse</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$37.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/03.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Mom High Waist Shorts</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/04.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sportswear</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sports Jacket</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/31.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$67.<small>95</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/07.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Two-Piece Bikini</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Category (Men)-->
      <section class="container pt-lg-4 mb-4 mb-sm-5">
        <div class="row">
          <!-- Banner with controls-->
          <div class="col-md-5 order-md-2">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
              <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                <div class="order-md-2">
                  <h3 class="mb-1">For Men</h3><a class="fs-md" href="shop-grid-ls.html">Shop for men<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                </div>
                <div class="tns-carousel-controls order-md-1" id="for-men">
                  <button type="button"><i class="ci-arrow-left"></i></button>
                  <button type="button"><i class="ci-arrow-right"></i></button>
                </div>
              </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="{{asset('/')}}website/assets/img/home/categories/cat-lg01.jpg" alt="For Men"></a>
            </div>
          </div>
          <!-- Product grid (carousel)-->
          <div class="col-md-7 pt-4 pt-md-0 order-md-1">
            <div class="tns-carousel">
              <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-men&quot;}">
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/32.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cap with Appliqué</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/33.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Regular Fit Cotton Shirt</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$19.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/34.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$37.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/35.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Leather Men’s Sneakers</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$45.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static"><span class="badge badge-info badge-shadow">Popular</span>
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/36.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Bags</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Swedish Backpack</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$68.<small>95</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/37.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Stainless Steel Watches</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$542.<small>80</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/11.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sandals</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/38.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Silver Ringe Cargo Short</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$45.<small>00</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/10.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Multicolor Bracelets</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/39.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3-pack T-shirts Slim Fit</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$21.<small>70</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/12.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$25.<small>9</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/06.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Bags</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Category (Kids)-->
      <section class="container pt-lg-4 mb-4 mb-md-5">
        <div class="row">
          <!-- Banner with controls-->
          <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
              <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                <div>
                  <h3 class="mb-1">For Kids</h3><a class="fs-md" href="shop-grid-ls.html">Shop for kids<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                </div>
                <div class="tns-carousel-controls" id="for-kids">
                  <button type="button"><i class="ci-arrow-left"></i></button>
                  <button type="button"><i class="ci-arrow-right"></i></button>
                </div>
              </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="{{asset('/')}}website/assets/img/home/categories/cat-lg03.jpg" alt="For Kids"></a>
            </div>
          </div>
          <!-- Product grid (carousel)-->
          <div class="col-md-7 pt-4 pt-md-0">
            <div class="tns-carousel">
              <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-kids&quot;}">
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/40.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Clothing</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Girl’s Denim Jacket</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static"><span class="badge badge-success badge-shadow">Trending</span>
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/41.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Textile Ballet Flats</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$16.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/42.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Boys T-shirt with Motif</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$17.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/43.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Dotted Shoulder Bag</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$23.<small>00</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/44.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">2-pack Cotton Sun Hats</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$18.<small>00</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/08.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Toys</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Soft Panda Teddy Bear</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$14.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/45.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Outlined Star Chevron Tee</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$10.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/46.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Banana Embroidery Cap</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/47.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Big Kid Sneakers</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$42.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/48.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Clothing</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Boy's Printed Shorts</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/49.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Toys</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Unicorn Soft Toy</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$22.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{asset('/')}}website/assets/img/shop/catalog/50.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Swimwear</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Pool Santorini Tankini</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$20.<small>00</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Banners-->
      <section class="container pb-4 mb-md-3">
        <div class="row">
          <div class="col-md-8 mb-4">
            <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-3">
              <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                <h4 class="fs-lg fw-light mb-2">Hurry up! Limited time offer</h4>
                <h3 class="mb-4">Converse All Star on Sale</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
              </div><img class="d-block ms-auto" src="{{ asset('/') }}website/assets/img/shop/catalog/banner.jpg" alt="Shop Converse">
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-3" style="background-image: url({{ asset('/') }}website/assets/img/blog/banner-bg.jpg);">
              <div class="py-4 my-2 px-4 text-center">
                <div class="py-1">
                  <h5 class="mb-2">Your Add Banner Here</h5>
                  <p class="fs-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured category (Hoodie)-->
      <section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
        <div class="row">
          <!-- Banner with controls-->
          <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #e2e9ef;">
              <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                <div>
                  <h3 class="mb-1">Hoodie day</h3><a class="fs-md" href="shop-grid-ls.html">Shop hoodies<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                </div>
                <div class="tns-carousel-controls" id="hoodie-day">
                  <button type="button"><i class="ci-arrow-left"></i></button>
                  <button type="button"><i class="ci-arrow-right"></i></button>
                </div>
              </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="{{ asset('/') }}website/assets/img/home/categories/cat-lg04.jpg" alt="For Women"></a>
            </div>
          </div>
          <!-- Product grid (carousel)-->
          <div class="col-md-7 pt-4 pt-md-0">
            <div class="tns-carousel">
              <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#hoodie-day&quot;}">
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/20.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Block-colored Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/21.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Block-colored Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$26.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/23.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Block-colored Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$17.<small>99</small></span>
                              <del class="fs-sm text-muted">24.<small>99</small></del>
                            </div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/51.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Mono Color Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$21.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/24.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Block-colored Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/54.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Mono Color Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$21.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Carousel item-->
                <div>
                  <div class="row mx-n2">
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/53.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Mono Color Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$21.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/52.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Printed Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/22.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Block-colored Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/56.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Printed Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/55.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Block-colored Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                      <div class="card product-card card-static">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ asset('/') }}website/assets/img/shop/catalog/57.jpg" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Block-colored Hooded Top</a></h3>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$23.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Shop by brand-->
      <section class="container py-lg-4 mb-4">
        <h2 class="h3 text-center pb-4">Shop by brand</h2>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/01.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/02.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/03.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/04.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/05.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/06.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/07.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/08.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/09.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/10.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/11.png" style="width: 150px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="{{ asset('/') }}website/assets/img/shop/brands/12.png" style="width: 150px;" alt="Brand"></a></div>
        </div>
      </section>
      <!-- Blog + Instagram info cards-->
      <section class="container-fluid px-0">
        <div class="row g-0">
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
              <div class="card-body text-center"><i class="ci-edit h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h5 mb-1">Read the blog</h3>
                <p class="text-muted fs-sm">Latest store, fashion news and trends</p>
              </div></a></div>
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
              <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                <h3 class="h5 mb-1">Follow on Instagram</h3>
                <p class="text-muted fs-sm">#ShopWithCartzilla</p>
              </div></a></div>
        </div>
      </section>
@endsection