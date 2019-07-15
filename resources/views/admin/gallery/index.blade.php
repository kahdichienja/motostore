@extends('admin.layouts.master') @section('title') Motor Shop Admin Create
Product @endsection @section('content')

<div class="main-panel">
@include('admin.partials.error')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-description"></p>
                        <form
                            class="forms-sample"
                            method="post"
                            action="{{ route('gallery.store') }}"
                            enctype="multipart/form-data"
                        >
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail3"
                                    >Select Product</label
                                >

                                <select class="form-control" name="product_id">
                                    <option>--Select Product--</option>
                                    @foreach($products as $product)
                                    <option
                                        name="{{ $product->id }}"
                                        value="{{ $product->id }} "
                                        >{{ $product->pro_name }}:ID {{ $product->id }}</option
                                    >
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Image
                                </label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id=""
                                    name="image"
                                    placeholder="Location"
                                />
                            </div>
                            <button
                                type="submit"
                                class="btn btn-block btn-success mr-2"
                            >
                                Upload Gallery
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
