<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offers On Top Deals & Discounts
						<i class="fa fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<i class="fa fa-phone mr-2"></i> 0797324006
						</li>
						<li class="text-center border-right">
                            <a class="text-white" href="{{ route('product.shopping-cart')}}">
								<i class="fa fa-shopping-cart"></i> View Cart
								<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
							</a>
                        </li>
                        @if(Auth::check())
                        <li class="text-center border-right">
                            <a class="text-white" href="{{ route('home')}}"><i class="fa fa-user"></i>{{ Auth::user()->email }}</a>
                        </li>
                        <li class="text-center border-right">
						<a class="dropdown-item text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                        </li>
                        @else
                        <li class="text-center border-right">
                            <a class="text-white" href="{{ route('login') }}">
								<i class="fa fa-lock"></i> Login
							</a>
						</li>
						<li class="text-center border-right">
                            <a class="text-white" href="{{ route('register') }}">
								<i class="fa fa-lock"></i> Register
							</a>
                        </li>
                        @endif
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->
	<!-- <div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Select County</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select County</option>
					<option>Nairobi</option>
					<option>Kisumu</option>
					<option>Homa Bay</option>
					<option>Kissi</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div> -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="{{url('/')}}" class="font-weight-bold font-italic">
							<img src="{{asset('custome/img/home/logo.png')}}" alt=" " class="img-fluid">Motor Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
    <!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
                <!-- categories -->
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{url('/')}}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{ route('shophome') }}">
								Shop 	
							</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="/docs">FAQ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
