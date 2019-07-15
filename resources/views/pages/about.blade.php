@extends('layouts.master') @section('title') Motor Shop About Us @endsection
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        <p class="text-center">Comment Submited Successfull...</p>
    </div>            
@endif
<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="/">Home</a>
						<i>|</i>
					</li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!---728x90--->
	<!-- about -->
	<div class="welcome py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>A</span>bout
				<span>U</span>s</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-6 welcome-left">
					<h3>Welcome</h3>
					<h4 class="my-sm-3 my-2">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis hendrerit
						libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</p>
				</div>
				<div class="col-lg-6 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
					<img src="{{asset('custome/img/pages/ab.jpg')}}" class="img-fluid" alt=" ">
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!---728x90--->
<!-- testimonials -->
<div class="testimonials py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center text-white mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>C</span>ustomers
				<span>S</span>ays</h3>
			<!-- tittle heading -->
			<div class="row gallery-index">
				@foreach($UserComments as $UserComment)
				<div class="col-sm-6 med-testi-grid">
					<div class="med-testi test-tooltip rounded p-4">
						<p>
						" {{$UserComment->message}}
						"</p>
					</div>
					<div class="row med-testi-left my-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
							<img src="{{asset('custome/img/pages/user.jpg')}}" alt=" " class="img-fluid rounded-circle" />
						</div>
						<div class="col-lg-10 col-9 med-testi-txt">
							<h4 class="font-weight-bold mb-lg-1 mb-2">{{$UserComment->name}}</h4>
							<p>{{$UserComment->email}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- //testimonials -->
	<div class="container mt-3">
		<form action="{{ route('comment')}}" method="post">
			{{ csrf_field()}}
			<div class="contact-grids1 w3agile-6">
				@if(Auth::check())
				<p style="display: none;">
					<input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name" placeholder="" required="">
					<input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="" required="">
				</p>
				@else
				<div class="row">
					<div class="col-md-6 col-sm-6 form-group">
						<label class="col-form-label">Name</label>
						<input type="text" class="form-control" name="name" placeholder="" required="">
					</div>
					<div class="col-md-6 col-sm-6 form-group">
						<label class="col-form-label">E-mail</label>
						<input type="email" class="form-control" name="email" placeholder="" required="">
					</div>
				</div>
				@endif
				<div class="contact-me animated wow slideInUp form-group">
					<label class="col-form-label">Your Comment</label>
					<textarea name="message" class="form-control" placeholder="Your Comment ..." rows="3" required=""> </textarea>
				</div>
				<div class="contact-form">
					<input type="submit" value="Submit">
				</div>
			</div>
		</form>
	</div>

@endsection