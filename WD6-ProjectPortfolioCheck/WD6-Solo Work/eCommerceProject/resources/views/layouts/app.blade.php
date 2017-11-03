<!doctype html>
<html>
    <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width"/>
		<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<script src="https://use.fontawesome.com/2e58db1670.js"></script>
        <title>@yield('title')</title>
    </head>
    <body>
		<header>
			<div class="navbar-fixed">
				<nav>
					<div class="nav-wrapper">
						<a class="brand-logo left" href="/">WD6 Store</a>
						
						<ul class="right hide-on-small-only">
							<li><a href="#!"><i class="fa fa-user fa-lg"></i> My Account</a></li>
							<li><a href="/cart"><i class="fa fa-shopping-cart fa-lg"></i> My Cart</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		
		<main>
			@yield('content')
		</main>
		
		<footer class="page-footer">
			<div class="container">
				<div class="row"> 
					<div class="col s12 m4">
						
					</div>
				</div>
				<div class="row">
					<div class="col s12 center-align">
						&copy;2017 Full Sail University
					</div>
				</div>
			</div>
		</footer>
		
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>