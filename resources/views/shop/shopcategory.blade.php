@extends('layouts.master')
@section('title')
    Motor Shop Home
@endsection
@section('content')
<div class="ads-grid py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>O</span>ur
            <span>N</span>ew
            <span>P</span>roducts</h3>
        <!-- //tittle heading -->
        <div class="row">
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9">
                <div class="wrapper">
                    <!-- first section -->
                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                        <h3 class="heading-tittle text-center font-italic">Category: {{ $category->name }}</h3>
                        <div class="row">
                        @foreach($category->product as $itemcategory)
                            <div class="col-md-4 product-men mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="/storage/products/{{ $itemcategory->image }}" alt="" class="card-img">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center border-top mt-4">
                                        <h4 class="pt-1">
                                            <a href="">{{ $itemcategory->pro_name }}</a>
                                        </h4>
                                        <div class="info-product-price my-2">
                                            <span class="item_price">Ksh {{ $itemcategory->pro_price }} M</span>
                                            <del>No Discount</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <a href="{{ route('galleryshop', $itemcategory->id) }}" class="button btn btn-outline-info pull-left btn-sm">Quick View</a>
                                            <a href="{{ route('product.addToCart', ['id' => $itemcategory->id])}}" class="button btn btn-outline-success btn-sm pull-right">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- //first section -->
                    
                    <!-- showcase section -->
                    <div class="product-sec1 product-sec2 px-sm-5 px-3">
                        <div class="row">
                            <h3 class="col-md-4 effect-bg">Summer Boom</h3>
                            <p class="w3l-nut-middle">Get Extra 15% Off</p>
                            <div class="col-md-8 bg-right-nut">
                                <img src="{{asset('custome/img/home/logo.png')}}" alt="" class="ml-5" style="height: 100%; width: 70%;">
                            </div>
                        </div>
                    </div>
                    <!-- //third section -->
                </div>
            </div>
            <!-- //product left -->

            <!-- product right -->
            <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                <div class="side-bar p-sm-4 p-3">
                    <div class="search-hotel border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">Search Here..</h3>
                        <form action="#" method="post">
                            <input type="search" placeholder="Product name..." name="search" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <!-- price -->
                    <div class="range border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">All Categories</h3>
                        <ul>
                        @foreach($categories as $category)
                            <li class="nav-link">
                                <a href="{{ route('categoryshop', $category->name) }}">
                                    {{ $category->name }}
                                </a>                              
                            </li> 
                        @endforeach                           
                        </ul>
                    </div>
                    <!-- //price -->
                    <!-- discounts -->
                    <div class="left-side border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">Discount</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">5% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">10% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">20% or More</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- reviews -->
                    <div class="customer-rev border-bottom left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Customer Review</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <span>3.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- electronics -->
                    <div class="left-side border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3"></h3>
                        <ul>
                            <li>
                                <!-- <input type="checkbox" class="checked">
                                <span class="span"></span> -->
                            </li>
                        </ul>
                    </div>
                    <!-- //electronics -->
                    <!-- delivery -->
                    <div class="left-side border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Eligible for Cash On Delivery</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //delivery -->
                    <!-- arrivals -->
                    <div class="left-side border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">New Arrivals</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Last 30 days</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Last 90 days</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //arrivals -->
                    <!-- best seller -->
                    <div class="f-grid py-2">
                        <h3 class="agileits-sear-head mb-3">Best Seller</h3>
                        <div class="box-scroll">
                            <div class="scroll">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="{{asset('frontEnd/images/custome/single1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">Toyota (Hillax)</a>
                                        <a href="" class="price-mar mt-2">$1.20 M</a>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="{{asset('frontEnd/images/custome/single2.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href=""> Merceedes Benz</a>
                                        <a href="" class="price-mar mt-2">$1.40 M</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="{{asset('frontEnd/images/custome/single3.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">Toyota (Corola)</a>
                                        <a href="" class="price-mar mt-2">$1.90 M </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //best seller -->
                </div>
                <!-- //product right -->
            </div>
        </div>
    </div>
</div>
<!-- //top products -->
@endsection
