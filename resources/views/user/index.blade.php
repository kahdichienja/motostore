@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">            
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session("status") }}
            </div>
            @endif
            <div class="card mt-2">  
                <div class="card-header"> 
                <h5>Hello, {{ Auth::user()->email }}</h5>                
                <a href="{{ route('shophome') }}" class="nav-link">Back To Shop.</a>
                </div>
                <div class="card-body">  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
