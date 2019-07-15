@extends('admin.layouts.master') @section('title') Motor Shop Admin Create
Product @endsection @section('content')

<div class="main-panel">
    <div class="content-wrapper">        
    @include('admin.partials.success')
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    @if (count($productAttributes) > 0) 
                    <h4 class="text-center text-info mt-2">
                        {{ $product->pro_name }} Specification.
                    </h4>
                    <div class="card-body">
                        @foreach($productAttributes as $p_att)
                        <ul class="list-group list-star">
                            <li class="list-group-item m-2">Vehicle Identification Number: {{ $p_att->vehicle_id_number }}</li>
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
                    @else
                    <h4 class="text-info m-4">
                        {{ $product->pro_name }} Specification.
                    </h4>
                    <div class="card-body">
                        <form
                            action="{{ route('storeAttributtes') }}"
                            method="post"
                        >
                            "{{ csrf_field() }}
                            <input
                                type="hidden"
                                name="product_id"
                                value="{{ $product->id }}"
                            />
                            <div class="row">
                                <div
                                    class="form-group{{ $errors->has('vehicle_id_number')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Vehicle Identification Number</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('vehicle_id_number') }}"
                                        name="vehicle_id_number"
                                        placeholder="Vehicle Identification Number"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('vehicle_id_number') }}</span
                                    >
                                </div>
                                <div
                                    class="form-group{{ $errors->has('registration_date')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Registration Date</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('registration_date') }}"
                                        name="registration_date"
                                        placeholder="Registration Date"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('registration_date') }}</span
                                    >
                                </div>
                            </div>
                            <div class="row">
                                <div
                                    class="form-group{{ $errors->has('manufacture_year')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Year Of Manufacture</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('manufacture_year') }}"
                                        name="manufacture_year"
                                        placeholder="Year Of Manufacture"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('manufacture_year') }}</span
                                    >
                                </div>
                                <div
                                    class="form-group{{ $errors->has('milage')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Millage In Km</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('milage') }}"
                                        name="milage"
                                        placeholder="Millage In Km"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('milage') }}</span
                                    >
                                </div>
                            </div>
                            <div
                                class="form-group{{ $errors->has('transmission')? 'has-error':'' }}"
                            >
                                <label for="exampleInputName1"
                                    >Transmission</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    value="{{ old('transmission') }}"
                                    name="transmission"
                                    placeholder="Transmission"
                                />
                                <span
                                    class="text-danger"
                                    >{{ $errors->first('transmission') }}</span
                                >
                            </div>
                            <div class="row">
                                <div
                                    class="form-group{{ $errors->has('engine_capacity')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Engine Capacity</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('engine_capacity') }}"
                                        name="engine_capacity"
                                        placeholder="Engine Capacity"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('engine_capacity') }}</span
                                    >
                                </div>
                            </div>
                            <div class="row">
                                <div
                                    class="form-group{{ $errors->has('fuel_type')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Type Of Fuel</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('fuel_type') }}"
                                        name="fuel_type"
                                        placeholder="Type Of Fuel"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('fuel_type') }}</span
                                    >
                                </div>
                                <div
                                    class="form-group{{ $errors->has('Body_style')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Body Style</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('Body_style') }}"
                                        name="Body_style"
                                        placeholder="Body Style"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('Body_style') }}</span
                                    >
                                </div>
                            </div>
                            <div
                                class="form-group{{ $errors->has('exterior_color')? 'has-error':'' }}"
                            >
                                <label for="exampleInputName1"
                                    >Exterior color</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    value="{{ old('exterior_color') }}"
                                    name="exterior_color"
                                    placeholder="Exterior color"
                                />
                                <span
                                    class="text-danger"
                                    >{{ $errors->first('exterior_color') }}</span
                                >
                            </div>
                            <div
                                class="form-group{{ $errors->has('interior_color')? 'has-error':'' }}"
                            >
                                <label for="exampleInputName1"
                                    >Interior color</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    value="{{ old('interior_color') }}"
                                    name="interior_color"
                                    placeholder="Interior color"
                                />
                                <span
                                    class="text-danger"
                                    >{{ $errors->first('interior_color') }}</span
                                >
                            </div>
                            <div class="row">
                                <div
                                    class="form-group{{ $errors->has('drive_type')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Drive type</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('drive_type') }}"
                                        name="drive_type"
                                        placeholder="Drive type"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('drive_type') }}</span
                                    >
                                </div>
                                <div
                                    class="form-group{{ $errors->has('number_of_doors')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Number of doors</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('number_of_doors') }}"
                                        name="number_of_doors"
                                        placeholder="Number of doors"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('number_of_doors') }}</span
                                    >
                                </div>
                            </div>
                            <div class="row">
                                <div
                                    class="form-group{{ $errors->has('number_of_seats')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Number of seats</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('number_of_seats') }}"
                                        name="number_of_seats"
                                        placeholder="Number of seats"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('number_of_seats') }}</span
                                    >
                                </div>
                                <div
                                    class="form-group{{ $errors->has('dimension')? 'has-error':'' }} col-md-6"
                                >
                                    <label for="exampleInputName1"
                                        >Dimension</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id=""
                                        value="{{ old('dimension') }}"
                                        name="dimension"
                                        placeholder="Dimension"
                                    />
                                    <span
                                        class="text-danger"
                                        >{{ $errors->first('dimension') }}</span
                                    >
                                </div>
                            </div>
                            <div
                                class="form-group{{ $errors->has('condition')? 'has-error':'' }}"
                            >
                                <label for="exampleInputName1">Condition</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    value="{{ old('condition') }}"
                                    name="condition"
                                    placeholder="Condition"
                                />
                                <span
                                    class="text-danger"
                                    >{{ $errors->first('condition') }}</span
                                >
                            </div>
                            <div
                                class="form-group{{ $errors->has('expiry_date')? 'has-error':'' }}"
                            >
                                <label for="exampleInputName1"
                                    >Expiry date</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    value="{{ old('expiry_date') }}"
                                    name="expiry_date"
                                    placeholder="Expiry date"
                                />
                                <span
                                    class="text-danger"
                                    >{{ $errors->first('expiry_date') }}</span
                                >
                            </div>
                            <button
                                type="submit"
                                class="btn btn-block btn-sm btn-success"
                            >
                                submit
                            </button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{ $product->pro_name }}

                        <img
                            src="/storage/products/{{ $product->image }}"
                            alt=""
                            class="card-img"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
