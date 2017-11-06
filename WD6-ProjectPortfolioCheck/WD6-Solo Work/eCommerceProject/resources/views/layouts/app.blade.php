<!doctype html>
<html>
    <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width"/>
		<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<script src="https://use.fontawesome.com/2e58db1670.js"></script>
        <title>@yield('title')</title>
    </head>
    <body>
		<ul class="dropdown-content" id="accountDropdown">
			<!--PHP logic goes here to determine what links are shown...-->
			<li><a href="/signin">Sign In</a></li>
			<li><a href="/signup">Sign Up</a></li>
		</ul>
	
		<header>
			<div class="navbar-fixed">
				<nav>
					<div class="nav-wrapper">
						<a class="brand-logo left" href="/">WD6 Store</a>
						
						<ul class="right hide-on-small-only">
							<li><a class="dropdown-button" data-activates="accountDropdown" href="#!"><i class="fa fa-user fa-lg"></i> My Account <i class="material-icons right">arrow_drop_down</i></a></li>
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