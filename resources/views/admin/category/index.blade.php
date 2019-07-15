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
                <h4 class="card-title">All Category table</h4>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
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

                        @foreach($categories as $category)
                            <tr>
                                <td>
                                {{ $category->id }}
                                </td>
                                <td>
                                {{ $category->name }}
                                </td>
                                <td>
                                    <form action="{{ route('deletecategory', $category->id) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                    </form>

                                </td>
                                <td>
                                    <a href="{{ route('editcategory', $category->id) }}">edit</a>
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
