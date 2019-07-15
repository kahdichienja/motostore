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
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Product form</h4>
                        <p class="card-description"> </p>
                        <form class="forms-sample" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('pro_name')? 'has-error':'' }}">
                                <label for="exampleInputName1">Product Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name="pro_name"
                                    placeholder="Product Name"
                                />
                                <span class="text-danger">{{ $errors->first('pro_name') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('pro_code')? 'has-error':'' }}">
                                <label for="exampleInputEmail3"
                                    >Product Code</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name="pro_code"
                                    placeholder="Product Code"
                                />
                                <span class="text-danger">{{ $errors->first('pro_code') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('category_id')? 'has-error':'' }}">
                            <label for="exampleInputEmail3"
                                    >Select Category</label
                                >
                                
                                <select class="form-control" name="category_id">
                                    <option>--Select Category--</option>
                                @foreach($categories as $category)
                                    <option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('category_id') }}</span>
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
                                    placeholder="Product Price"
                                />
                                <span class="text-danger">{{ $errors->first('pro_price') }}</span>
                            </div>
                            <div class="form-group{{ $errors->has('image')? 'has-error':'' }}">
                                <label>Product Photo</label>
                                <input
                                    type="file"
                                    name="image"
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
                                ></textarea>
                                <span class="text-danger">{{ $errors->first('pro_info') }}</span>
                            </div>
                            <button type="submit" class="btn btn-success mr-2 btn-block">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              
            </div>
            <div class="col-md-2 grid-margin stretch-card">

            </div>
        </div>
    </div>

    @endsection
</div>
