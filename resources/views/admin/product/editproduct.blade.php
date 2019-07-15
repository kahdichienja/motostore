@extends('admin.layouts.master') @section('title') Motor Shop Admin Create
Product @endsection @section('content')
<div class="main-panel">
    @include('admin.partials.error')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Products</h4>
                        <p class="card-description"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Product form</h4>
                        <p class="card-description"> </p>
                        <form class="forms-sample" method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('pro_name')? 'has-error':'' }}">
                                <label for="exampleInputName1">Product Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name="pro_name"
                                    value="{{ $product->pro_name }}"
                                    placeholder="Product Name"
                                />
                                <span class="text-danger">{{ $errors->first('pro_name') }}</span>
                            </div>
                            <input
                                    type="hidden"
                                    class="form-control"
                                    id=""
                                    name="category_id"
                                    value="{{ $product->category_id }}"
                                    placeholder="Product Name"
                                />
                            <div class="form-group{{ $errors->has('pro_code')? 'has-error':'' }}">
                                <label for="exampleInputEmail3"
                                    >Product Code</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name="pro_code"
                                    value="{{ $product->pro_code }}"
                                    placeholder="Product Code"
                                />
                                <span class="text-danger">{{ $errors->first('pro_code') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('pro_price')? 'has-error':'' }}">
                                <label for="exampleInputPassword4"
                                    >Product Price</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name="pro_price"
                                    value="{{ $product->pro_price }}"
                                    placeholder="Product Price"
                                />
                                <span class="text-danger">{{ $errors->first('pro_price') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('image')? 'has-error':'' }}">
                                <label>Product Photo</label>
                                <input
                                    type="file"
                                    name="image"
                                    value="{{ $product->image }}"
                                    class="form-control"
                                />
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('spl_price')? 'has-error':'' }}">
                                <label for="">Discount</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    value="{{ $product->spl_price }}"
                                    name="spl_price"
                                    placeholder="Discount"
                                />
                                <span class="text-danger">{{ $errors->first('spl_price') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('chesis_number')? 'has-error':'' }}">
                                <label for="">Chesis Number</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    value="{{ $product->chesis_number }}"
                                    name="chesis_number"
                                    placeholder="Chesis Number"
                                />
                                <span class="text-danger">{{ $errors->first('chesis_number') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('pro_info')? 'has-error':'' }}">
                                <label for="">Product Information</label>
                                <textarea
                                    class="form-control"
                                    id=""
                                    name="pro_info"
                                    row="6"
                                >{{ $product->pro_info }}</textarea>
                                <span class="text-danger">{{ $errors->first('pro_info') }}</span>
                            </div>
                            <button type="submit" class="btn btn-success mr-2 btn-block">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->pro_name }}</h4>
                        <p class="card-description">
                            Previous Upload
                        </p>
                        <img src="/storage/products/{{ $product->image }}" alt="" class="card-img">
                        <h5 class="text-info mt-4">Chesis No: {{ $product->chesis_number }}</h5>
                        
                    </div>
                </div>   
            </div>
        </div>
    </div>

    @endsection
</div>
