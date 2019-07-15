@extends('admin.layouts.master') 
@section('title') 
Motor Shop Admin Create Product 
@endsection @section('content')

<div class="main-panel">
@include('admin.partials.error')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category: {{ $category->name }}</h4>
                <p class="card-description"></p>
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
    @foreach($category->product as $itemcategory)
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        {{ $itemcategory->pro_name }}
                    </h4>
                    <span class="text-info">Code: {{ $itemcategory->pro_code }}</span> 
                    <p class="card-description"></p>
                    <img src="/storage/products/{{ $itemcategory->image }}" alt="" class="card-img">
                    <div class="text-muted m-2 text-center">
                        <p>{{ $itemcategory->pro_info }}</p>
                    </div>
                    <div class="m-1">
                        <small class="pull-left">Discount: {{ $itemcategory->spl_price }}%</small>
                        <small class="pull-right">Original Price: Ksh{{ $itemcategory->pro_price }}M</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
