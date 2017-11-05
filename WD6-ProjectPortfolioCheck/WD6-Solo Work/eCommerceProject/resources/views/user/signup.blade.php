@extends('layouts.app')

@section('title','Sign Up For An Account')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1>Sign Up</h1>
				<h4>Create an account to get the most out of WD6</h4>
			</div>
		</div>
		<div class="row">
			<form class="col s12 m6 offset-m3 center-align">
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
						<button class="btn btn-large waves waves-effect waves-light" type="submit">Create Account</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection