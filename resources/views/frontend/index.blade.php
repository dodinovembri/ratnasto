@extends('layouts.frontend')

@section('content')

    <div class="page-wrapper">
        <header class="header header-22">
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index-32.html" class="logo">
                            <img src="{{ asset('frontend/assets/images/demos/demo-22/logo.png') }}" alt="Molla Logo" width="130" height="30">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-round">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>

                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                <i class="icon-random"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="#" class="action-link">Clear All</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div>
                        <a href="wishlist.html" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{ asset('frontend/assets/images/products/cart/product-1.jpg') }}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{ asset('frontend/assets/images/products/cart/product-2.jpg') }}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="wrap-container sticky-header">
                <div class="header-bottom">
                    <div class="container">
                        <div class="header-left">
                            <div class="dropdown category-dropdown" data-visible="true">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                                    Browse Categories
                                </a>

                                <div class="dropdown-menu">
                                    <nav class="side-nav">
                                        <ul class="menu-vertical sf-arrows sf-js-enabled" style="touch-action: pan-y;">
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-laptop"></i>Electronics</a>

                                                <div class="megamenu" style="display: none;">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Laptops &amp; Computers</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Desktop Computers</a></li>
                                                                            <li><a href="#">Monitors</a></li>
                                                                            <li><a href="#">Laptops</a></li>
                                                                            <li><a href="#">iPad &amp; Tablets</a></li>
                                                                            <li><a href="#">Hard Drives &amp; Storage</a></li>
                                                                            <li><a href="#">Printers &amp; Supplies</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">TV &amp; Video</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">TVs</a></li>
                                                                            <li><a href="#">Home Audio Speakers</a></li>
                                                                            <li><a href="#">Projectors</a></li>
                                                                            <li><a href="#">Media Streaming Devices</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Cell Phones</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Carrier Phones</a></li>
                                                                            <li><a href="#">Unlocked Phones</a></li>
                                                                            <li><a href="#">Phone &amp; Cellphone Cases</a></li>
                                                                            <li><a href="#">Cellphone Chargers </a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Digital Cameras</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Digital SLR Cameras</a></li>
                                                                            <li><a href="#">Sports &amp; Action Cameras</a></li>
                                                                            <li><a href="#">Camcorders</a></li>
                                                                            <li><a href="#">Camera Lenses</a></li>
                                                                            <li><a href="#">Photo Printer</a></li>
                                                                            <li><a href="#">Digital Memory Cards</a></li>
                                                                            <li><a href="#">Camera Bags, Backpacks &amp; Cases</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="{{ asset('frontend/assets/images/demos/demo-13/menu/banner-1.jpg') }}" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-couch"></i>Furniture</a>

                                                <div class="megamenu" style="display: none;">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Bedroom</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Beds, Frames &amp; Bases</a></li>
                                                                            <li><a href="#">Dressers</a></li>
                                                                            <li><a href="#">Nightstands</a></li>
                                                                            <li><a href="#">Kids' Beds &amp; Headboards</a></li>
                                                                            <li><a href="#">Armoires</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Living Room</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Coffee Tables</a></li>
                                                                            <li><a href="#">Chairs</a></li>
                                                                            <li><a href="#">Tables</a></li>
                                                                            <li><a href="#">Futons &amp; Sofa Beds</a></li>
                                                                            <li><a href="#">Cabinets &amp; Chests</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Office</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Office Chairs</a></li>
                                                                            <li><a href="#">Desks</a></li>
                                                                            <li><a href="#">Bookcases</a></li>
                                                                            <li><a href="#">File Cabinets</a></li>
                                                                            <li><a href="#">Breakroom Tables</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Kitchen &amp; Dining</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Dining Sets</a></li>
                                                                            <li><a href="#">Kitchen Storage Cabinets</a></li>
                                                                            <li><a href="#">Bakers Racks</a></li>
                                                                            <li><a href="#">Dining Chairs</a></li>
                                                                            <li><a href="#">Dining Room Tables</a></li>
                                                                            <li><a href="#">Bar Stools</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="{{ asset('frontend/assets/images/demos/demo-13/menu/banner-2.jpg') }}" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-concierge-bell"></i>Cooking</a>

                                                <div class="megamenu" style="display: none;">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="menu-title">Cookware</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Cookware Sets</a></li>
                                                                    <li><a href="#">Pans, Griddles &amp; Woks</a></li>
                                                                    <li><a href="#">Pots</a></li>
                                                                    <li><a href="#">Skillets &amp; Grill Pans</a></li>
                                                                    <li><a href="#">Kettles</a></li>
                                                                    <li><a href="#">Soup &amp; Stockpots</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="menu-title">Dinnerware &amp; Tabletop</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Plates</a></li>
                                                                    <li><a href="#">Cups &amp; Mugs</a></li>
                                                                    <li><a href="#">Trays &amp; Platters</a></li>
                                                                    <li><a href="#">Coffee &amp; Tea Serving</a></li>
                                                                    <li><a href="#">Salt &amp; Pepper Shaker</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="menu-title">Cooking Appliances</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Microwaves</a></li>
                                                                    <li><a href="#">Coffee Makers</a></li>
                                                                    <li><a href="#">Mixers &amp; Attachments</a></li>
                                                                    <li><a href="#">Slow Cookers</a></li>
                                                                    <li><a href="#">Air Fryers</a></li>
                                                                    <li><a href="#">Toasters &amp; Ovens</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->

                                                        <div class="row menu-banners">
                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/assets/images/demos/demo-13/menu/1.jpg') }}" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/assets/images/demos/demo-13/menu/2.jpg') }}" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/assets/images/demos/demo-13/menu/3.jpg') }}" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-tshirt"></i>Clothing</a>

                                                <div class="megamenu" style="display: none;">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Women</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                            <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                            <li><a href="#"><strong>Trending</strong></a></li>
                                                                            <li><a href="#">Clothing</a></li>
                                                                            <li><a href="#">Shoes</a></li>
                                                                            <li><a href="#">Bags</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Jewlery &amp; Watches</a></li>
                                                                            <li><a href="#"><strong>Sale</strong></a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Men</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                            <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                            <li><a href="#"><strong>Trending</strong></a></li>
                                                                            <li><a href="#">Clothing</a></li>
                                                                            <li><a href="#">Shoes</a></li>
                                                                            <li><a href="#">Bags</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Jewlery &amp; Watches</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="{{ asset('frontend/assets/images/demos/demo-13/menu/banner-3.jpg') }}" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->

                                                    <div class="menu-col menu-brands">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="{{ asset('frontend/assets/images/brands/1.png') }}" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="{{ asset('frontend/assets/images/brands/2.png') }}" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="{{ asset('frontend/assets/images/brands/3.png') }}" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="{{ asset('frontend/assets/images/brands/4.png') }}" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="{{ asset('frontend/assets/images/brands/5.png') }}" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="{{ asset('frontend/assets/images/brands/6.png') }}" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-brands -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li><a href="#"><i class="icon-blender"></i>Home Appliances</a></li>
                                            <li><a href="#"><i class="icon-heartbeat"></i>Healthy &amp; Beauty</a></li>
                                            <li><a href="#"><i class="icon-shoe-prints"></i>Shoes &amp; Boots</a></li>
                                            <li><a href="#"><i class="icon-map-signs"></i>Travel &amp; Outdoor</a></li>
                                            <li><a href="#"><i class="icon-mobile-alt"></i>Smart Phones</a></li>
                                            <li><a href="#"><i class="icon-tv"></i>TV &amp; Audio</a></li>
                                            <li><a href="#"><i class="icon-shopping-bag"></i>Backpack &amp; Bag</a></li>
                                            <li><a href="#"><i class="icon-music"></i>Musical Instruments</a></li>
                                            <li><a href="#"><i class="icon-gift"></i>Gift Ideas</a></li>
                                        </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div>
                        </div>
                        <div class="header-center">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="megamenu-container">
                                        <a href="index-32.html" class="sf-with-ul">Home</a>

                                        <div class="megamenu demo">
                                            <div class="menu-col">
                                                <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                                <div class="demo-list">
                                                    <div class="demo-item">
                                                        <a href="index-1.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/1.jpg') }}');"></span>
                                                            <span class="demo-title">01 - furniture store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-2.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/2.jpg') }}');"></span>
                                                            <span class="demo-title">02 - furniture store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-3.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/3.jpg') }}');"></span>
                                                            <span class="demo-title">03 - electronic store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-4.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/4.jpg') }}');"></span>
                                                            <span class="demo-title">04 - electronic store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-5.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/5.jpg') }}');"></span>
                                                            <span class="demo-title">05 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-6.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/6.jpg') }}');"></span>
                                                            <span class="demo-title">06 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-7.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/7.jpg') }}');"></span>
                                                            <span class="demo-title">07 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-8.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/8.jpg') }}');"></span>
                                                            <span class="demo-title">08 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-9.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/9.jpg') }}');"></span>
                                                            <span class="demo-title">09 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item">
                                                        <a href="index-10.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/10.jpg') }}');"></span>
                                                            <span class="demo-title">10 - shoes store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-11.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/11.jpg') }}');"></span>
                                                            <span class="demo-title">11 - furniture simple store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-12.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/12.jpg') }}');"></span>
                                                            <span class="demo-title">12 - fashion simple store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-13.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/13.jpg') }}');"></span>
                                                            <span class="demo-title">13 - market</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-14.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/14.jpg') }}');"></span>
                                                            <span class="demo-title">14 - market fullwidth</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-15.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/15.jpg') }}');"></span>
                                                            <span class="demo-title">15 - lookbook 1</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-16.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/16.jpg') }}');"></span>
                                                            <span class="demo-title">16 - lookbook 2</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-17.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/17.jpg') }}');"></span>
                                                            <span class="demo-title">17 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-18.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/18.jpg') }}');"></span>
                                                            <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-19.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/19.jpg') }}');"></span>
                                                            <span class="demo-title">19 - games store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-20.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/20.jpg') }}');"></span>
                                                            <span class="demo-title">20 - book store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-21.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/21.jpg') }}');"></span>
                                                            <span class="demo-title">21 - sport store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-22.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/22.jpg') }}');"></span>
                                                            <span class="demo-title">22 - tools store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-23.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/23.jpg') }}');"></span>
                                                            <span class="demo-title">23 - fashion left navigation store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-24.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/24.jpg') }}');"></span>
                                                            <span class="demo-title">24 - extreme sport store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-25.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/25.jpg') }}');"></span>
                                                            <span class="demo-title">25 - jewelry store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-26.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/26.jpg') }}');"></span>
                                                            <span class="demo-title">26 - market store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-27.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/27.jpg') }}');"></span>
                                                            <span class="demo-title">27 - fashion store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-28.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/28.jpg') }}');"></span>
                                                            <span class="demo-title">28 - food market store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-29.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/29.jpg') }}');"></span>
                                                            <span class="demo-title">29 - t-shirts store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-30.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/30.jpg') }}');"></span>
                                                            <span class="demo-title">30 - headphones store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
    
                                                    <div class="demo-item hidden">
                                                        <a href="index-31.html">
                                                            <span class="demo-bg" style="background-image: url('{{ asset('frontend/assets/images/menu/demos/31.jpg') }}');"></span>
                                                            <span class="demo-title">31 - yoga store</span>
                                                        </a>
                                                    </div><!-- End .demo-item -->
                                                </div><!-- End .demo-list -->

                                                <div class="megamenu-action text-center">
                                                    <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .text-center -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li>
                                        <a href="category.html" class="sf-with-ul">Shop</a>

                                        <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Shop List</a></li>
                                                                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                                <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                                <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="dashboard.html">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="{{ asset('frontend/assets/images/menu/banner-1.jpg') }}" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                    </li>
                                    <li>
                                        <a href="product.html" class="sf-with-ul">Product</a>

                                        <div class="megamenu megamenu-sm">
                                            <div class="row no-gutters">
                                                <div class="col-md-6">
                                                    <div class="menu-col">
                                                        <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="product.html">Default</a></li>
                                                            <li><a href="product-centered.html">Centered</a></li>
                                                            <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                            <li><a href="product-gallery.html">Gallery</a></li>
                                                            <li><a href="product-sticky.html">Sticky Info</a></li>
                                                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                            <li><a href="product-fullwidth.html">Full Width</a></li>
                                                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                        </ul>
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html">
                                                            <img src="{{ asset('frontend/assets/images/demos/demo-19/menu/banner-2.jpg') }}" alt="Banner">
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-sm -->
                                    </li>
                                    <li>
                                        <a href="#" class="sf-with-ul">Pages</a>

                                        <ul>
                                            <li>
                                                <a href="about.html" class="sf-with-ul">About</a>

                                                <ul>
                                                    <li><a href="about.html">About 01</a></li>
                                                    <li><a href="about-2.html">About 02</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html" class="sf-with-ul">Contact</a>

                                                <ul>
                                                    <li><a href="contact.html">Contact 01</a></li>
                                                    <li><a href="contact-2.html">Contact 02</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="sf-with-ul">Blog</a>

                                        <ul>
                                            <li><a href="blog.html">Classic</a></li>
                                            <li><a href="blog-listing.html">Listing</a></li>
                                            <li>
                                                <a href="#">Grid</a>
                                                <ul>
                                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Masonry</a>
                                                <ul>
                                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Mask</a>
                                                <ul>
                                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Single Post</a>
                                                <ul>
                                                    <li><a href="single.html">Default with sidebar</a></li>
                                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                        <ul>
                                            <li><a href="elements-products.html">Products</a></li>
                                            <li><a href="elements-typography.html">Typography</a></li>
                                            <li><a href="elements-titles.html">Titles</a></li>
                                            <li><a href="elements-banners.html">Banners</a></li>
                                            <li><a href="elements-product-category.html">Product Category</a></li>
                                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                                            <li><a href="elements-buttons.html">Buttons</a></li>
                                            <li><a href="elements-accordions.html">Accordions</a></li>
                                            <li><a href="elements-tabs.html">Tabs</a></li>
                                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                                            <li><a href="elements-cta.html">Call to Action</a></li>
                                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-left -->

                        <div class="header-right">
                            <div class="header-text">
                                <ul class="top-menu top-link-menu">
                                    <li>
                                        <ul>
                                            <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login / Registration</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- End .header-text -->
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
            </div><!-- End .wrap-container -->
        </header><!-- End .header -->

        <main class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="intro-slider-container mt-2">
                            <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
                                data-owl-options='{
                                    "dots": true,
                                    "nav": true, 
                                    "responsive": {
                                        "1200": {
                                            "nav": true,
                                            "dots": true
                                        }
                                    }
                                }'>
                                <div class="intro-slide banner-lg" style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/slider/slide-1.jpg') }}');">
                                    <div class="intro">
                                        <div class="title">
                                            <a>deal of the day</a>
                                        </div>
                                        <div class="content">
                                            <h3><span>up to</span> 20% <span>off</span></h3><h4>heavy duty deals</h4>
                                        </div>
                                        <div class="action">
                                            <a href="category.html">discover now</a>
                                        </div>
                                    </div>
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide banner-lg" style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/slider/slide-2.jpg') }}');">
                                    <div class="intro">
                                        <div class="title">
                                            <a>clearance</a>
                                        </div>
                                        <div class="content">
                                            <h3>power tools<br>up to <span>30% off</span></h3>
                                        </div>
                                        <div class="action">
                                            <a href="category.html">discover now</a>
                                        </div>
                                    </div>
                                </div><!-- End .intro-slide -->


                                
                            </div><!-- End .intro-slider owl-carousel owl-simple -->

                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div>
                    <div class="col-lg-4 banner">
                        <div class="col-12" style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/slider/banner-1.jpg') }}')">
                            <div class="intro">
                                <div class="title">
                                    <h3>New arrivals</h3>
                                </div>
                                <div class="content">
                                    <h3>up to </h3> <h3 class="highlight">&nbsp;40% off</h3>
                                </div>
                                <div class="action">
                                    <a href="category.html">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/slider/banner-2.jpg') }}')">
                            <div class="intro">
                                <div class="title">
                                    <h2>outdoor</h2>
                                </div>
                                <div class="content">
                                    <h4>power equipment</h4>
                                </div>
                                <div class="action">
                                    <a href="category.html">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/slider/banner-3.jpg') }}')">
                            <div class="intro">
                                <div  class="title">
                                    <h3 class="highlight">save 20%</h3><h3>&nbsp;or more</h3>
                                </div>
                                <div class="content">
                                    <h3>deals & savings</h3>
                                </div>
                                <div class="action">
                                    <a href="category.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container text-center shop">
                <h2 class="title mt-4 mb-5"> Shop by Brands </h2>
                <div class="owl-carousel mb-5 owl-simple" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                    <a href="#" class="brand">
                        <img src="{{ asset('frontend/assets/images/brands/1.png') }}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{ asset('frontend/assets/images/brands/2.png') }}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{ asset('frontend/assets/images/brands/3.png') }}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{ asset('frontend/assets/images/brands/4.png') }}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{ asset('frontend/assets/images/brands/5.png') }}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{ asset('frontend/assets/images/brands/6.png') }}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{ asset('frontend/assets/images/brands/7.png') }}" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="featured-back" style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/featured/background.jpg') }}');">
                <div class="container">
                    <div class="section-title">
                        <ul class="nav nav-pills nav-border-anim" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-featured-link" data-toggle="tab" href="#tab-featured" role="tab" aria-controls="tab-featured" aria-selected="true"><span>Featured</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-best-link" data-toggle="tab" href="#tab-best" role="tab" aria-controls="tab-best" aria-selected="false"><span>Bestsellers</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-sale-link" data-toggle="tab" href="#tab-sale" role="tab" aria-controls="tab-sale" aria-selected="false"><span>Sale</span></a>
                            </li>
                        </ul>

                    
                        <a class="link" href="#">All Featured Products</a>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="product-lg">
                                <figure class="product-media">
                                    <span class="product-label label-limited">limited time sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-1.jpg') }}" alt="Product image" class="product-image">
                                    </a>

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="save-price"><span>Save $64.00</span></h3>
                                    <h3 class="product-title"><a href="product.html">DEWALT DWE575SB</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$79.00</span>
                                        <span class="old-price">Was $143.00</span>
                                    </div><!-- End .product-price -->
                                    <div class="action">
                                        <a href="category.html">shop now</a>
                                    </div>
                                </div><!-- End .product-body -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-featured" role="tabpanel" aria-labelledby="tab-featured-link">
                                    <div class="row products all">
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Sale</span>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-2.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Woodworking</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">DEWALT DWARA 100</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$23.35</span>
                                                        <span class="old-price">Was $40.99</span>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-3.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Power Tool Accessories</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Milwaukee Battery 18V LITHIUM</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $34.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->


                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-4.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Power Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">DEWALT Hammer Drill</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $79.00
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-5.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Air Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Makita XBU02PT1</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $302.20
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Sale</span>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-6.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Hand Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">DEWALT DWASHRIR</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$70.95</span>
                                                        <span class="old-price">Was $90.00</span>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-7.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Power Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Milwaukee 2648-20</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $151.75
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                    </div><!-- End .product-nav -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                    </div><!-- End .row -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="tab-best" role="tabpanel" aria-labelledby="tab-best-link">
                                    <div class="row products">
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Sale</span>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-2.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Woodworking</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">DEWALT DWARA 100</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$23.35</span>
                                                        <span class="old-price">Was $40.99</span>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-4.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Power Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">DEWALT Hammer Drill</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $79.00
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-5.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Air Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Makita XBU02PT1</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $302.20
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                   </div>
                                </div>
                                <div class="tab-pane fade" id="tab-sale" role="tabpanel" aria-labelledby="tab-sale-link">
                                    <div class="row products">
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-4.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Power Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">DEWALT Hammer Drill</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $79.00
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-5.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Air Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Makita XBU02PT1</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $302.20
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Sale</span>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-6.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Hand Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">DEWALT DWASHRIR</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$70.95</span>
                                                        <span class="old-price">Was $90.00</span>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-22/featured/product-7.jpg') }}" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Power Tools</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Milwaukee 2648-20</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $151.75
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                    </div><!-- End .product-nav -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                    <div class="mb-2"></div><!-- End .mb-6 -->
                </div><!-- End .container -->
            </div>

            <div class="newsletter" style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/newsLetter/background.jpg') }}');">
                <div class="container">
                    <div class="subscribe text-center">
                        <div class="intro">
                            <h3 class="title">Subscribe for Our Newsletter</h3>
                            <h4 class="content">Learn about new offers and get more deals by joining our newsletter</h4>
                        </div>
                        <div class="subscribe action">
                            <form action="#">
                                <div class="input-group">
                                    <input type="email" placeholder="Enter your Email Address" aria-label="Email Adress" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-subscribe" type="submit"><span>Subscribe now</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container banner-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 banner-lg">
                        <a href="category.html">
                            <img src="{{ asset('frontend/assets/images/demos/demo-22/banner/banner-1.jpg') }}">
                        </a>
                        <div class="banner-content">
                            <div class="title">
                                <a href="category.html">save up to 30%</a>
                            </div>
                            <div class="content">
                                <a href="category.html">
                                    <h3 class="highlight">Premium Brands</h3>
                                    <h4>for the Toughest Jobs</h4>
                                </a>
                            </div>
                            <div class="action">
                                <a href="category.html">discover now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 banner-lg">
                        <a href="category.html">
                            <img src="{{ asset('frontend/assets/images/demos/demo-22/banner/banner-2.jpg') }}">
                        </a>
                        <div class="banner-content">
                            <div class="title">
                                <a href="category.html">best sellers in tools</a>
                            </div>
                            <div class="content">
                                <a href="category.html">
                                    <h3>Pro-level tools</h3>
                                    <h4 class="highlight">Save on Bestsellers</h4>
                                </a>
                            </div>
                            <div class="action">
                                <a href="category.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container service">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-rocket"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                <p>Orders $50 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-4 -->
                    
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-rotate-left"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                <p>Within 30 days</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-4 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-info-circle"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                <p>When you sign up</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-4 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-life-ring"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                <p>24/7 amazing services</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-4 -->

                </div>
            </div>

            <div class="container popular">
                <hr class="mb-5">

                <div class="section-title">
                    <div><p class="title"><span>Popular Products</span></p></div>
                    
                    <a class="link" href="#">See All Products</a>
                </div>

                <div class="row products">
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-1.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Air Tools & Compressors</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Makita XCV11Z</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$158.40</span>
                                    <span class="old-price">Was $330.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-2.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Power Tools</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Milwaukee 2803-20</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$77.99</span>
                                    <span class="old-price">Was $115.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                                
                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-3.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Power Tools</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Makita XSH03Z</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $119.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #ccccff;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-4.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Air Tools & Compressors</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">DEWALT DCE511B</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$100.99</span>
                                    <span class="old-price">Was $130.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #ffca51;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #bb8379;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-5.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Hand Tools</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">TEKTON 30603 Fiberglass</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $8.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-6.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Power Tool Accessories</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">DEWALT DCB205 20V</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $69.94
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-7.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Power Tools</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">BLACK+DECKER BDEJS600C</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$42.99</span>
                                    <span class="old-price">Was $67.50</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 3 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #78645f;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #b89474;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-8.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Power Tool Accessories</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">DEWALT DW1354 14-Piece Titanium Drill Bit Set</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $29.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-9.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Power Tools</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">WEN 6530</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $41.61
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 7 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-22/products/product-10.jpg') }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Power Tools</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Ryobi P506 One+</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $35.85
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div><!-- End .row -->
            </div>

            <div class="container bannerad">
                <div class="banner-lg"  style="background-image: url('{{ asset('frontend/assets/images/demos/demo-22/bannerad/background.jpg') }}');">
                    <div class="price">
                        <h4 class="highlight">from</h3><h3>$39</h3><sup class="highlight">,99</sup>
                    </div>
                    <div class="content">
                        <h4>woodworking tools</h4>
                        <h3>from top rated brands</h3>
                        <div class="action">
                            <a href="category.html">discover now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container post">

                <div class="section-title">
                    <div><p class="title"><span>Our Blog Posts</span></p></div>
                    
                    <a class="link" href="#">See All Posts</a>
                </div>

                <div class="owl-carousel owl-simple mb-4" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "items": 3,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":1,
                                "dots":true
                            },
                            "520": {
                                "items":2,
                                "dots":true
                            },
                            "768": {
                                "items":3
                            }
                        }
                    }'>
                    <article class="entry">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="{{ asset('frontend/assets/images/demos/demo-22/post/post-1.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">Nov 22, 2018</a>, 0 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">Sed adipiscing ornare.</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                
                    <article class="entry">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="{{ asset('frontend/assets/images/demos/demo-22/post/post-2.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">Nov 22, 2018</a>, 0 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">Aenean dignissim pellentesque.</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="{{ asset('frontend/assets/images/demos/demo-22/post/post-3.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">Nov 22, 2018</a>, 2 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">Quisque volutpat mattis.</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="{{ asset('frontend/assets/images/demos/demo-22/post/post-2.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">Nov 22, 2018</a>, 0 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">Aenean dignissim pellentesque.</a>
                            </h3><!-- End .entry-title -->
                            
                            <div class="entry-content">
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                </div><!-- End .owl-carousel -->

            </div>

        </main>

        <footer class="footer footer-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="{{ asset('frontend/assets/images/demos/demo-22/logo-footer.png') }}" class="footer-logo" alt="Footer Logo" width="100" height="25">
                                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">About Molla</a></li>
                                    <li><a href="#">How to shop on Molla</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="login.html">Log in</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                    <figure class="footer-payments">
                        <img src="{{ asset('frontend/assets/images/payments.png') }}" alt="Payment methods" width="272" height="20">
                    </figure><!-- End .footer-payments -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->


        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>


        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
        <div class="mobile-menu-container mobile-menu-light">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>

                <form action="#" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Search</label>
                    <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>
                
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="index-32.html">Home</a>

                            <ul>
                                <li><a href="index-1.html">01 - furniture store</a></li>
                                <li><a href="index-2.html">02 - furniture store</a></li>
                                <li><a href="index-3.html">03 - electronic store</a></li>
                                <li><a href="index-4.html">04 - electronic store</a></li>
                                <li><a href="index-5.html">05 - fashion store</a></li>
                                <li><a href="index-6.html">06 - fashion store</a></li>
                                <li><a href="index-7.html">07 - fashion store</a></li>
                                <li><a href="index-8.html">08 - fashion store</a></li>
                                <li><a href="index-9.html">09 - fashion store</a></li>
                                <li><a href="index-10.html">10 - shoes store</a></li>
                                <li><a href="index-11.html">11 - furniture simple store</a></li>
                                <li><a href="index-12.html">12 - fashion simple store</a></li>
                                <li><a href="index-13.html">13 - market</a></li>
                                <li><a href="index-14.html">14 - market fullwidth</a></li>
                                <li><a href="index-15.html">15 - lookbook 1</a></li>
                                <li><a href="index-16.html">16 - lookbook 2</a></li>
                                <li><a href="index-17.html">17 - fashion store</a></li>
                                <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                <li><a href="index-19.html">19 - games store</a></li>
                                <li><a href="index-20.html">20 - book store</a></li>
                                <li><a href="index-21.html">21 - sport store</a></li>
                                <li><a href="index-22.html">22 - tools store</a></li>
                                <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                <li><a href="index-24.html">24 - extreme sport store</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html">Shop</a>
                            <ul>
                                <li><a href="category-list.html">Shop List</a></li>
                                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="#">Lookbook</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html" class="sf-with-ul">Product</a>
                            <ul>
                                <li><a href="product.html">Default</a></li>
                                <li><a href="product-centered.html">Centered</a></li>
                                <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                <li><a href="product-gallery.html">Gallery</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                <li><a href="product-fullwidth.html">Full Width</a></li>
                                <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li>
                                    <a href="about.html">About</a>

                                    <ul>
                                        <li><a href="about.html">About 01</a></li>
                                        <li><a href="about-2.html">About 02</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>

                                    <ul>
                                        <li><a href="contact.html">Contact 01</a></li>
                                        <li><a href="contact-2.html">Contact 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>

                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="#">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Single Post</a>
                                    <ul>
                                        <li><a href="single.html">Default with sidebar</a></li>
                                        <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                        <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements-list.html">Elements</a>
                            <ul>
                                <li><a href="elements-products.html">Products</a></li>
                                <li><a href="elements-typography.html">Typography</a></li>
                                <li><a href="elements-titles.html">Titles</a></li>
                                <li><a href="elements-banners.html">Banners</a></li>
                                <li><a href="elements-product-category.html">Product Category</a></li>
                                <li><a href="elements-video-banners.html">Video Banners</a></li>
                                <li><a href="elements-buttons.html">Buttons</a></li>
                                <li><a href="elements-accordions.html">Accordions</a></li>
                                <li><a href="elements-tabs.html">Tabs</a></li>
                                <li><a href="elements-testimonials.html">Testimonials</a></li>
                                <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                <li><a href="elements-portfolio.html">Portfolio</a></li>
                                <li><a href="elements-cta.html">Call to Action</a></li>
                                <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->

                <div class="social-icons">
                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->
    </div>

    @include('frontend.components.auth')
    @include('frontend.components.newsletter')

@endsection