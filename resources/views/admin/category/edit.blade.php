@extends('admin.layouts.master') @section('title') Motor Shop Admin Create
Product @endsection @section('content')

<div class="main-panel">
    @include('admin.partials.error')
    <div class="content-wrapper">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Edit {{ $category->name }} Category
                    </h4>
                    <p class="card-description"></p>
                    <form
                        class="forms-sample"
                        method="post"
                        action="{{ route('updatecategory', $category->id) }}"
                    >
                    
                    {{ csrf_field() }}
                        <div
                            class="form-group{{ $errors->has('name')? 'has-error':'' }}"
                        >
                            <label for="exampleInputName1">Category Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id=""
                                name="name"
                                value="{{ $category->name }}"
                                placeholder="Category Name"
                            />
                            <span
                                class="text-danger"
                                >{{ $errors->first('name') }}</span
                            >
                        </div>
                        <button
                            type="submit"
                            class="btn btn-success mr-2 btn-block"
                        >
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
