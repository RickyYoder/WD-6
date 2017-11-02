<!doctype html>
<html>
    <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width"/>
		<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <title>@yield('title')</title>
    </head>
    <body>
		<main>
			@yield('content')
		</main>
		
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>