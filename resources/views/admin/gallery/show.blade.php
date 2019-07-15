@extends('admin.layouts.master') @section('title') Motor Shop Admin Create
Product @endsection @section('content')

<div class="main-panel">
    @include('admin.partials.error')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->pro_name }}</h4>
                        <p class="card-description"></p>
                        <img
                            src="/storage/products/{{ $product->image }}"
                            alt=""
                            class="card-img"
                        />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-info">
                            Add More Gallery To {{ $product->pro_name }}
                        </h6>
                        <form
                            class="forms-sample"
                            method="post"
                            action="{{ route('gallery.store') }}"
                            enctype="multipart/form-data"
                        >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input
                                    type="hidden"
                                    class="form-control"
                                    name="product_id"
                                    value="{{ $product->id }} "
                                />
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
                            <div class="form-group">
                                <button
                                    type="submit"
                                    class="btn btn-block btn-success mr-2"
                                >
                                    Upload Gallery
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="row">
                    @foreach($galleries as $gallerylist)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <p class="card-description"></p>
                                <img
                                    src="/storage/productsgallery/{{ $gallerylist->image }}"
                                    alt=""
                                    class="card-img"
                                />
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Update This Photo</th>
                                            <th>Delete This Photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <form
                                                    action="{{ route('gallery.update', $gallerylist->id) }}"
                                                    enctype="multipart/form-data"
                                                    method="post"
                                                    class="pull-left"
                                                >
                                                    {{ method_field("PUT") }}
                                                    {{ csrf_field() }}

                                                    <input
                                                        type="hidden"
                                                        name="product_id"
                                                        value="{{ $product->id }}"
                                                    />
                                                    <input
                                                        type="file"
                                                        name="image"
                                                        class="form-control"
                                                        id=""
                                                    />
                                                    <button
                                                        type="submit"
                                                        class="btn btn-xs btn-info"
                                                    >
                                                        Update
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('gallery.destroy', $gallerylist->id) }}"
                                                    method="post"
                                                    class="pull-right"
                                                >
                                                    {{ csrf_field() }}
                                                    {{ method_field("DELETE") }}
                                                    <button
                                                        type="submit"
                                                        class="btn btn-xs btn-danger"
                                                    >
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endsection
</div>
