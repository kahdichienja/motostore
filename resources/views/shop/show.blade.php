@extends('layouts.master')
@section('title')
    Motor Shop Home
@endsection
@section('content')
    <div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{ url('/') }}">Home</a>
						<i>|</i>
					</li>
					<li>{{ $product->pro_name }} Details</li>
                </ul>
			</div>
		</div>
    </div>
    <div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-body">
                            <img
                                    src="/storage/products/{{ $product->image }}"
                                    alt=""
                                    class="card-img"
                                />
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
                            @foreach($galleries as $gallerylist)
								<li data-thumb="/storage/productsgallery/{{ $gallerylist->image }}">
									<div class="thumb-image">
										<img src="/storage/productsgallery/{{ $gallerylist->image }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
                                </li>
                                @endforeach
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{ $product->pro_name }}</h3>
					<p class="mb-3">
						<span class="item_price">Ksh {{ $product->pro_price }} M</span>
						<del class="mx-2 font-weight-light">Discounts: {{ $product->spl_price }}%</del>
						<label>Free delivery</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Cash on Delivery Eligible.
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
						<ul>
							
							<li class="mb-1">
                            {{ $product->pro_info }}
							</li>
						</ul>
						
						<div class="occasion-cart">
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="button btn btn-success btn-sm">Add to cart</a>
							</div>
						</div>
						<p class="my-sm-4 my-3">
						{{ $product->pro_name }} Specification.
						</p>
						<div class="card-body">
                        @foreach($productAttributes as $p_att)
                        <ul class="list-group list-star">
                            <li class="list-group-item m-2">Chesis Number: {{ $product->chesis_number }}</li>
                            <li class="list-group-item m-2">Registration Date: {{ $p_att->registration_date }}</li>
                            <li class="list-group-item m-2">Year Of Manufacture: {{ $p_att->manufacture_year }}</li>
                            <li class="list-group-item m-2">Millage In Km: {{ $p_att->milage }}</li>
                            <li class="list-group-item m-2">Transmission: {{ $p_att->transmission }}</li>
                            <li class="list-group-item m-2">Engine Capacity: {{ $p_att->engine_capacity }}</li>
                            <li class="list-group-item m-2">Type Of Fuel: {{ $p_att->fuel_type }}</li>
                            <li class="list-group-item m-2">Body Style: {{ $p_att->Body_style }}</li>
                            <li class="list-group-item m-2">Exterior color: {{ $p_att->exterior_color }}</li>
                            <li class="list-group-item m-2">Interior color: {{ $p_att->interior_color }}</li>
                            <li class="list-group-item m-2">Drive type: {{ $p_att->drive_type }}</li>
                            <li class="list-group-item m-2">Number of doors: {{ $p_att->number_of_doors }}</li>
                            <li class="list-group-item m-2">Number of seats: {{ $p_att->number_of_seats }}</li>
                            <li class="list-group-item m-2">Dimension: {{ $p_att->dimension }}</li>
                            <li class="list-group-item m-2">Condition: {{ $p_att->condition }}</li>
                            <li class="list-group-item m-2">Expiry date: {{ $p_att->expiry_date }}</li>
                        </ul>
                        @endforeach
                    </div>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection
