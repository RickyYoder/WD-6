@extends('layouts.app')

@section('title','Account Signin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1>My WD6 Account</h1>
			</div>
		</div>
		@if(count($errors) > 0)
			<div class="row">
				<div class="col s12 white-text red darken-2">
					@foreach($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			</div>
		@endif
		<div class="row">
			<div class="col s12 m2"><strong>Email Address:</strong></div>
			<div class="col s12 m2">{{ Auth::user()->email }}</div>
		</div>
		<div class="row">
			<div class="col s12 m2"><strong>User Since:</strong></div>
			<div class="col s12 m2">{{ Auth::user()->created_at }}</div>
		</div>
	</div>
@endsection