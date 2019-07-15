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
                        <h4 class="card-title">Add Category form</h4>
                        <p class="card-description"> </p>
                        <form class="forms-sample" method="post" action="{{ route('createCategory') }}">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name')? 'has-error':'' }}">
                                <label for="exampleInputName1">Category Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name="name"
                                    placeholder="Category Name"
                                />
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <button type="submit" class="btn btn-success mr-2 btn-block">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
            <!--
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic form</h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="exampleInputName1"
                                    placeholder="Name"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3"
                                    >Email address</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="exampleInputEmail3"
                                    placeholder="Email"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="exampleInputPassword4"
                                    placeholder="Password"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">City</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="exampleInputCity1"
                                    placeholder="Location"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea
                                    class="form-control"
                                    id="exampleTextarea1"
                                    rows="2"
                                ></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">
                                Submit
                            </button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            -->    
            </div>
            <div class="col-md-2 grid-margin stretch-card">
            <!--
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form</h4>
                            <p class="card-description">
                                Basic form elements
                            </p>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="exampleInputCity1"
                                        placeholder="Location"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Textarea</label>
                                    <textarea
                                        class="form-control"
                                        id="exampleTextarea1"
                                        rows="2"
                                    ></textarea>
                                </div>
                                <button type="submit" class="btn btn-success mr-2">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
             -->
                </div>
        </div>
    </div>

    @endsection
</div>
