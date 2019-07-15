@extends('layouts.master') @section('title') Motor Shop Home @endsection
@section('content') 
@if(Session::has('cart'))
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="/">Home</a>
						<i>|</i>
					</li>
					<li>Cart</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!---728x90--->
    	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>art
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Your shopping cart contains:
					<span>{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}} Product(s)</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Product Image</th>
								<th>Quantity</th>
								<th>Product Name</th>

								<th>Price</th>
                                <th>Remove 1</th>
                                <th>Remove all</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($products as $product)
							<tr class="">
								 <td class="invert-image" style="height: 20%; width: 30%;">
									<a href="single.html">
                                        <img 
                                            src='/storage/products/{{ $product["item"]["image"] }}'
                                            alt=" " 
                                            class="img-responsive">
									</a>
								</td>
								<td class="">
                                    {{ $product["qty"] }}
								</td>
								<td class="invert">{{ $product["item"]["pro_name"] }}</td>
								<td class="invert">Ksh {{$product["pro_price"]}} M</td>
								<td class="">
									<a href="{{ route('getRduceByOne', ['id' => $product['item']['id']]) }}">X</a>
                                </td>
                                <td class="">
								    <a href="{{ route('getRemoveItem', ['id' => $product['item']['id']]) }}">X</a>
                                </td>
                            </tr>
                        @endforeach    
						</tbody>
                    </table>
                    <hr>
                    <div class="pull-right">
                        <strong>Total Price:Ksh{{ $totalPrice }} M</strong>
                        <a class="btn btn-success" href="{{ route('cartCheckout') }}">Checkout</a>
                        
                    </div>
				</div>
			</div>
			<div class="checkout-left">
			</div>
		</div>
	</div>

@else
<div class="container text-center">
    <h1>No Item in the Cart</h1>
</div>
@endif
@endsection
