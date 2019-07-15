@extends('layouts.app') @section('content')
<div class="container">
    @foreach($orders as $order) @foreach($order->cart->items as $item)

    <div class="col-md-8 offset-2 grid-margin stretch-card">
        <div class="card mb-2" id="orders">
            <div class="card-body">
                <h5>My Order</h5>
                <h4 class="card-title">Address</h4>
                <p class="card-description">
                    Order Phone Number.
                    <code>{{ $order->phone_number }}</code> tag
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <p class="font-weight-bold">Motostore .inc</p>
                            <p>
                                P.O BOX 2189312,
                            </p>
                            <p>
                                date
                            </p>
                            <p>
                                Kisumu, Kenya Oginga Odinga Streat 94107
                            </p>
                        </address>
                    </div>
                    <div class="col-md-6">
                        <address class="text-primary">
                            <p class="font-weight-bold">
                                E-mail
                            </p>
                            <p class="mb-2">
                                agooclinton@gmail.com
                            </p>
                            <p class="font-weight-bold">
                                Web Address
                            </p>
                            <p>
                                www.ourdomain.com
                            </p>
                        </address>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    Product Name: {{ $item["item"]["pro_name"] }}
                </h4>
                <p class="card-description">
                    Quantity
                    <code>{{ $item["qty"] }}</code>
                    Price
                    <code>Ksh{{ $item["pro_price"] }} M</code>
                </p>
                <p class="lead">Delivery Status: {{ $order->delivered }}</p>
            </div>
        </div>
    </div>
    @endforeach @endforeach
</div>
@endsection
