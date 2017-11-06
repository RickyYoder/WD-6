@extends('layouts.app')

@section('title','Account Signin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1>Sign In</h1>
				<h4>Sign in to your account to get the most out of WD6</h4>
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
			<form action="/signin" method="post" class="col s12 m6 offset-m3 center-align">
				<div class="row">
					<div class="col s12 input-field">
						<label for="email">Email</label>
						<input type="email" name="email" placeholder="me@email.com" />
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">
						<label for="email">Password</label>
						<input type="password" name="password" placeholder="Secret!" />
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">
						<button class="btn btn-large waves waves-effect waves-light" type="submit">Sign In</button>
						{{ csrf_field() }}
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection