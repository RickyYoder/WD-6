@extends('layouts.app')

@section('title','Account Signin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1>Profile Page</h1>
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
			
		</div>
	</div>
@endsection