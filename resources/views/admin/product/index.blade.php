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
                <h4 class="card-title">All Products table</h4>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Category
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Gallery
                                </th>
                                <th>
                                    Specications
                                </th>
                                <th>
                                    Time
                                </th>
                                <th>
                                    delete
                                </th>
                                <th>
                                    Edit
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <img src="/storage/products/{{ $product->image }}" alt="" width="100">
                                </td>
                                <td>
                                {{ $product->pro_name }}
                                </td>
                                <td>
                                    <a class="nav-link" href="{{ route('productscategory', $product->category->name) }}">
                                        {{ $product->category->name }}
                                    </a>
                                </td>
                                <td>
                                Ksh{{ $product->pro_price }} M
                                </td>
                                <td class="text-info"> 

                                <a class="nav-link" href="{{ route('productsgallery', $product->id) }}">
                               Make {{ $product->pro_name }}'s Gallery.
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('productattribute', $product->id) }}">Add {{ $product->pro_name }} Specications</a>
                                
                                </td>
                                <td>
                                 {{ $product->created_at->diffForHumans() }}
                                </td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                    </form>

                                </td>
                                <td>
                                    <a href="{{ route('products.show', $product->id) }}">edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
