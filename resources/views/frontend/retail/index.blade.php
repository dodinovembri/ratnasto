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
        <h1 class="d-none">Ratna Store</h1>

        @include('frontend.components.header')

        <!-- End of Header -->
        <main class="main">
            <div class="page-content">
                <section class="intro-section">
                    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': true,
                        'items': 1,
                        'autoplay': true,
                        'autoplayTimeout': 8000
                    }">
                        <div class="banner banner-fixed intro-slide1" style="background-color: #dddee0;">
                            <figure>
                                <div class="slide-effect">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/slides/Slider1_women.png') }}"
                                        class="slide-animate intro-slide1-img"
                                        data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1.2s', 'delay': '.5s'}"
                                        alt="intro-banner" width="1180" height="630" />
                                    <div class="float-svg-container float-svg-1 slide-animate"
                                        data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px"
                                            width="878.874px" height="615.792px" viewBox="0 -10 146.479 122.632"
                                            class="float-svg" data-float-options="{'delta':10,'speed':2,'size':6}"
                                            xml:space="preserve">
                                            <path
                                                d="M130.932,84.665c3.185,-2.144,6.110,-4.998,8.531,-8.520c10.110,-13.610,8.467,-30.072,0.332,-42.346c-6.039,-8.390,-14.489,-13.797,-22.688,-18.422C101.596,6.864,81.881,4.547,61.349,12.108C43.416,13.790,27.653,21.203,15.990,33.373C4.844,46.946,-9.593,72.549,8.790,86.890c12.138,12.717,28.065,13.809,41.389,14.725c11.112,-0.221,22.039,-2.444,33.020,-6.916c13.288,-8.161,19.548,-6.340,31.060,-4.985C119.789,90.341,125.709,88.455,130.932,84.665z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="float-svg-container float-svg-2 slide-animate"
                                        data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_2" x="0px" y="0px"
                                            width="710.678px" height="543.094px" viewBox="0 -10 165.274 146.301"
                                            class="float-svg" data-float-options="{'delta':10,'speed':1,'size':4.3}"
                                            xml:space="preserve">
                                            <path
                                                d="M93.301,135.151c-19.925,-5.702,-39.601,-19.594,-56.258,-35.144C16.933,85.792,0.546,68.421,0.015,43.508C-0.381,24.953,7.203,1.282,26.057,-7.618c4.479,-1.375,9.280,-1.435,14.057,-0.425c9.430,2.734,18.328,8.193,26.058,16.592c6.131,6.640,11.089,14.306,17.716,20.035c18.042,13.179,26.139,3.024,51.780,8.336c9.167,0.554,18.815,1.156,24.192,7.641c9.444,11.897,5.473,33.018,-3.772,49.940C142.467,120.034,116.856,135.567,93.301,135.151z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </figure>
                            <div class="container">

                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle text-uppercase font-weight-bold ls-l mb-2">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2, Get</span>
                                        <span class="d-inline-block label-star bg-primary text-white slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title text-uppercase font-weight-bold text-white lh-1 ls-l slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        For Women’s</h2>
                                    <h3 class="font-weight-normal mb-1 slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1.2s',
                                        'delay': '1s'
                                    }">
                                        <strong>Up to 30% Off</strong> on all Products
                                    </h3>
                                    <p class="slide-animate ls-m text-dark font-primary mb-6"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over $99.00</p>
                                    <a href="#" class="btn btn-outline btn-dark slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
                            <figure>
                                <img src="{{ asset('frontend/theme1/images/demos/demo1/slides/slide2.jpg') }}" alt="intro-banner" width="1903"
                                    height="630" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50 ml-auto text-right">
                                    <h4 class="banner-subtitle ls-s mb-1 slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s'}"><span
                                            class="d-block text-uppercase mb-2">Coming soon</span><strong
                                            class="font-weight-semi-bold ls-m">Donald Birthday</strong></h4>
                                    <h2 class="banner-title mb-2 d-inline-block font-weight-bold text-primary slide-animate"
                                        data-animation-options="{'name': 'fadeInRight', 'duration': '1.2s', 'delay': '.5s'}">
                                        Sale</h2>
                                    <p class="slide-animate font-primary ls-s text-dark mb-4"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.2s'}">
                                        Up to 70% off on all products <br />online &amp; Free Shipping over $90</p>
                                    <a href="#" class="btn btn-dark slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.4s'}">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed video-banner intro-slide3" style="background-color: #dddee0;">
                            <figure>
                                <video src="{{ asset('frontend/theme1/video/memory-of-a-woman.mp4') }}" width="1903" height="630"></video>
                            </figure>
                            <div class="container">
                                <div class="banner-content x-50 y-50 text-center">
                                    <h4 class="banner-subtitle text-white text-uppercase mb-3 slide-animate"
                                        data-animation-options="{'name': 'fadeIn', 'duration': '.7s'}">Check out Donald
                                        Store</h4>
                                    <h2 class="banner-title mb-3 text-white font-weight-bold ls-m slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s', 'delay': '.5s'}">
                                        Fashion Collection</h2>
                                    <p class="slide-animate mb-5 text-white ls-s font-primary "
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '.8s'}">
                                        Up to 50% Off this Season’s &amp; Get free shipping<br />on all orders over
                                        $199.00</p>
                                    <a href="#" class="btn btn-outline btn-white slide-animate mr-3 mb-1"
                                        data-animation-options="{'name': 'fadeInLeft', 'duration': '1s', 'delay': '1.5s'}">Shop
                                        Men</a>
                                    <a href="#" class="btn btn-outline btn-white slide-animate mb-1"
                                        data-animation-options="{'name': 'fadeInRight', 'duration': '1s', 'delay': '1.5s'}">Shop
                                        Women</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="service-list container appear-animate">
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                'items': 3,
                                'nav': false,
                                'dots': false,
                                'margin': 20,
                                'autoplay': true,
                                'autoplayTimeout': 5000,
                                'responsive': {
                                    '0': {
                                        'items': 1
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3,
                                        'loop': false
                                    }
                                }
                            }">
                            <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                <i class="icon-box-icon d-icon-truck"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Free Shipping &amp; Return</h4>
                                    <p>Free shipping on orders over $99</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.4s'
                                }">
                                <i class="icon-box-icon d-icon-service"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Customer Support 24/7</h4>
                                    <p>Instant access to perfect support</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                <i class="icon-box-icon d-icon-secure"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">100% Secure Payment</h4>
                                    <p>We ensure secure payment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="grey-section pt-10 pb-10 appear-animate" data-animation-options="{'delay': '.3s'}">
                    <div class="container pt-3">
                        <h2 class="title">Browse Our Categories</h2>
                        <div class="row">
                            <div class="col-md-3 col-6 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="#">
                                        <figure class="category-media">
                                            <img src="{{ asset('frontend/theme1/images/demos/demo1/categories/category1.jpg') }}" alt="category"
                                                width="280" height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="{{ url('technology') }}">Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="#">
                                        <figure class="category-media">
                                            <img src="{{ asset('frontend/theme1/images/demos/demo1/categories/category2.jpg') }}" alt="category"
                                                width="280" height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="{{ url('wedding') }}">Wedding</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="#">
                                        <figure class="category-media">
                                            <img src="{{ asset('frontend/theme1/images/demos/demo1/categories/category3.jpg') }}" alt="category"
                                                width="280" height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="shop.html">Watches</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="#">
                                        <figure class="category-media">
                                            <img src="{{ asset('frontend/theme1/images/demos/demo1/categories/category4.jpg') }}" alt="category"
                                                width="280" height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="shop.html">Shoes</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="product-wrapper container appear-animate mt-10 pt-3 pb-8" data-animation-options="{'delay': '.3s'}">
                    <h2 class="title">Best Selling</h2>
                    <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product1.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Solid pattern in fashion summer dress</a>
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
                            </div>
                        </div>
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product2.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Mackintosh Poket backpack</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$35.00</span>
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
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product3.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315">
                                </a>

                                <div class="product-label-group">
                                    <label class="product-label label-new">New</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Fashionablel women's-original-trucker</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$19.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:60%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product4.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Fashion dark obsidian EGT7 converse trainers</a>
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
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product5.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Women's Brown leather backpacks</a>
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
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product6.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Spon wide-striped shirt</a>
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
                </section>

                <section class="banner-group mb-9 container text-uppercase appear-animate">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-1 banner-fixed content-middle" data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'delay': '.5s'
                            }">
                                <figure>
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/banners/banner1.jpg') }}" alt="banner" width="380"
                                        height="207" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">For Ladies</h3>
                                    <h4 class="banner-subtitle font-weight-semi-bold ls-s text-body mb-0">Starting at
                                        $29
                                    </h4>
                                    <hr class="bg-dark">
                                    <a href="#" class="btn btn-link btn-underline btn-sm">Shop Now<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 order-lg-auto order-sm-last">
                            <div class="banner banner-2 banner-fixed content-middle content-center overlay-light appear-animate"
                                data-animation-options="{
                                'name': 'fadeIn',
                                'delay': '.3s'
                            }">
                                <figure>
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/banners/banner2.jpg') }}" alt="banner" width="350"
                                        height="177" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">Deal Promos</h3>
                                    <h4 class="banner-subtitle ls-normal">Starting at $99</h4>
                                    <a href="#" class="btn btn-dark btn-md mb-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-3 banner-fixed content-middle" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.5s'
                            }">
                                <figure>
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/banners/banner3.jpg') }}" alt="banner" width="380"
                                        height="207" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">For Men’s</h3>
                                    <h4 class="banner-subtitle font-weight-semi-bold ls-s text-body mb-0">Up to 30% off
                                    </h4>
                                    <hr class="bg-dark">
                                    <a href="#" class="btn btn-link btn-underline btn-sm">Shop Now<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="product-wrapper pb-10 container appear-animate" data-animation-options="{'delay': '.6s'}">
                    <h2 class="title">Our Featured</h2>
                    <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product5.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-sale">27% off</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Women's Brown leather backpacks</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$230.00</ins><del class="old-price">$210.00</del>
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
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product6.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-sale">27% off</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Spon wide-striped shirt</a>
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
                            </div>
                        </div>
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product7.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Beyond Donald -original-trucker</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$35.00</span>
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
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product8.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Vans Black all star trainer</a>
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
                            </div>
                        </div>
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product9.jpg') }}" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Converse kids one star suede eclipsepulse</a>
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
                </section>

                <section class="banner parallax" data-option="{'offset': 0}"
                    data-image-src="{{ asset('frontend/theme1/images/demos/demo1/parallax.jpg') }}" style="background-color: #44352d;">
                    <div class="container banner-content appear-animate text-center" data-animation-options="{
                        'name': 'blurIn',
                        'delay': '.3s'
                    }">
                        <h3 class="banner-subtitle text-white font-weight-bold mb-2">Extra<span
                                class="label-star bg-primary text-uppercase text-white ml-2 mr-2">30% Off</span>Online
                        </h3>
                        <h2 class="banner-title font-weight-bold text-uppercase text-white mb-2">Lifestyle Collection
                        </h2>
                        <p class="font-primary text-white mb-6">Free shipping on orders over $99</p>
                        <a href="#" class="btn btn-solid pl-5 pr-5">Discover&nbsp;Now</a>
                    </div>
                </section>

                <section class="mt-3 pt-10 pb-10 appear-animate" data-animation-options="{'delay': '.3s'}">
                    <div class="container">
                        <h2 class="title">Our Clients</h2>
                        <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                            data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
                            <figure><img src="{{ asset('frontend/theme1/images/brands/1.png') }}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{ asset('frontend/theme1/images/brands/2.png') }}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{ asset('frontend/theme1/images/brands/3.png') }}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{ asset('frontend/theme1/images/brands/4.png') }}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{ asset('frontend/theme1/images/brands/5.png') }}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{ asset('frontend/theme1/images/brands/6.png') }}" alt="brand" width="180" height="100" />
                            </figure>
                        </div>
                    </div>
                </section>

                <section class="grey-section pt-10 pb-5">
                    <div class="container mt-3 mb-4">
                        <h2 class="title">Latest Blog</h2>
                        <div class="owl-carousel owl-theme row cols-md-2 cols-1" data-owl-options="{
                            'items': 2,
                            'nav': false,
                            'dots': true,
                            'loop': false,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '768': {
                                    'items': 2,
                                    'dots': false
                                }
                            }
                        }">
                            <div class="post post-list overlay-dark overlay-zoom appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.3s'
                            }">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="{{ asset('frontend/theme1/images/demos/demo1/blog/post1.jpg') }}" width="280" height="206"
                                            alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber Week</a>
                                    </h4>
                                    <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua tempo...</p>
                                    <a href="post-single.html"
                                        class="btn btn-outline btn-md btn-dark btn-icon-right">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="post post-list overlay-dark overlay-zoom appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.4s'
                            }">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="{{ asset('frontend/theme1/images/demos/demo1/blog/post2.jpg') }}" width="280" height="206"
                                            alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <h4 class="post-title"><a href="post-single.html">30% Discount for Shoes &amp;
                                            Bags</a></h4>
                                    <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua tempo...</p>
                                    <a href="post-single.html"
                                        class="btn btn-outline btn-md btn-dark btn-icon-right">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pt-10 pb-10 appear-animate">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.5s'
                                }">
                                    <h4 class="widget-title">Latest</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product10.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Fashion dark obsidian EGT7 converse
                                                        trainers</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$39.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product11.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Mackintosh Poket backpack</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$19.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product12.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Pima SS O-Neck NOOS tops</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }">
                                    <h4 class="widget-title">Best Selling</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/ages/demos/demo1/products/product13.jpg') }}im" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Best Dark blue pedestrian bags</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$39.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product14.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Belon blue jeans fashion short</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$19.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product15.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Beyond Donald -original-trucker</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                    <h4 class="widget-title">Top Rated</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product16.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Beyond OTP-blue pattern regor-jacket</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$39.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product17.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Black half-sleeved garment</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$19.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product18.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Black Jeans Beyond trainer</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                    <h4 class="widget-title">Sales</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product19.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Converse kids one star suede eclipsepulse</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$39.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product20.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Factog-red tripes blue check vans trainer</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$19.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/theme1/images/demos/demo1/products/product21.jpg') }}" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Fashionablel women's-original-trucker</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
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
            </div>
        </main>

        @include('frontend.components.footer')
    </div>
    
    @include('frontend.components.mobile_menu')

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>

    @include('frontend.components.mobile_menu')

@endsection