@extends('layouts.frontend')

@section('content')

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            <div class="bounce4"></div>
        </div>
    </div>
    <div class="page-wrapper">
        
        @include('frontend.components.header')

        <!-- End Header -->
        <main class="main">
            <!-- End PageHeader -->
            <div class="page-content">
                <div class="container">
                    <section class="mt-2 pt-2">
                        <div class="row product-wrapper">
                            <div class="col-md-3 col-6">
                                <div class="product shadow-media">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('frontend/theme1/images/products/product1.jpg') }}" alt="product" width="280"
                                                height="315">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">new</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Simple Additive Weighting</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">SPK Pemilihan SMA</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-variations">
                                            <a class="color active" data-src="{{ asset('frontend/theme1/images/products/product1.jpg') }}" href="#"
                                                style="background-color: #267497"></a>
                                            <a class="color" data-src="{{ asset('frontend/theme1/images/products/product2.jpg') }}" href="#"
                                                style="background-color: #cd845e"></a>
                                            <a class="color" data-src="{{ asset('frontend/theme1/images/products/product3.jpg') }}" href="#"
                                                style="background-color: #9a999d"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="product shadow-media">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('frontend/theme1/images/products/product1.jpg') }}" alt="product" width="280"
                                                height="315">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Accounting</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Accounting + Inventory System</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-variations">
                                            <a class="color active" data-src="{{ asset('frontend/theme1/images/products/product1.jpg') }}" href="#"
                                                style="background-color: #267497"></a>
                                            <a class="color" data-src="{{ asset('frontend/theme1/images/products/product2.jpg') }}" href="#"
                                                style="background-color: #cd845e"></a>
                                            <a class="color" data-src="{{ asset('frontend/theme1/images/products/product3.jpg') }}" href="#"
                                                style="background-color: #9a999d"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="product shadow-media">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('frontend/theme1/images/products/product3.jpg') }}" alt="product" width="280"
                                                height="315">
                                        </a>

                                        <div class="product-label-group">
                                            <label class="product-label label-sale">27% off</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Pima SS O-Neck NOOS Homme</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$19.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-variations">
                                            <a class="image active" href="#" data-src="{{ asset('frontend/theme1/images/products/product3.jpg') }}"
                                                style="background-image: url(images/products/product-type1.jpg)"></a>
                                            <a class="image" href="#" data-src="{{ asset('frontend/theme1/') }}images/products/product1.jpg"
                                                style="background-image: url(images/products/product-type2.jpg)"></a>
                                            <a class="image" href="#" data-src="{{ asset('frontend/theme1/') }}images/products/product4.jpg"
                                                style="background-image: url(images/products/product-type3.jpg)"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="product shadow-media">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{ asset('frontend/theme1/images/products/product4.jpg') }}" alt="product" width="280"
                                                height="315">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Blue Utility Pinafore Denim Dress</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br><br>
                </div>
            </div>
        </main>
        
        @include('frontend.components.footer')

    </div>
    @include('frontend.components.mobile_menu')

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>

    @include('frontend.components.mobile_menu')

@endsection