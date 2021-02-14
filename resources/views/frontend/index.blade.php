@extends('layouts.frontend')

@section('content')

    <div class="page-wrapper">
        <h1 class="d-none">Ratna Store</h1>


        <!-- End of Header -->
        <main class="main">
            <div class="page-content">

                <section class="grey-section pt-10 pb-10 appear-animate">
                    <div class="container pt-3">
                        <!-- <h2 class="title">Browse Our Categories</h2> -->
                        <div class="row">
                            <div class="col-md-3 col-12 mb-4"></div>
                            <div class="col-md-3 col-12 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="#">
                                        <figure class="category-media">
                                            <img src="{{ asset('frontend/theme1/images/demos/demo1/categories/category3.jpg') }}" alt="category"
                                                width="280" height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="shop.html">Retail</a></h4>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-3 col-12 mb-4">
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
                            <div class="col-md-3 col-12 mb-4"></div>
                        </div>
                    </div>
                </section>

            </div>
        </main>

    </div>

@endsection