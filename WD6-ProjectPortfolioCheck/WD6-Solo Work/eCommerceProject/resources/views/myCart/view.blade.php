@extends('layouts.app')

@section('title','My Cart')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1>My Cart</h1>
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
		
		
		@if(Session::has('cart'))
		<div class="row">
		@foreach($products as $product)
			<div class="col s12 m4">
				<div class="product">
				<span class="badge">{{ $product['qty'] }}</span>
				<img src="{{ $product['item']['imagePath'] }}" alt="Product Image" />
				{{ $product['item']['title'] }}
				<div class="row"></div>
				<div class="row">
					<div class="col s12 m6 offset-m6">
						<a class="btn waves waves-effect waves-dark" href="/removeFromCart/{{ $product['item']['id'] }}"><i class="material-icons">delete</i></a>
					</div>
				</div>
				</div>
			</div>
		@endforeach
		</div>
		@else
		<div class="row">
			<div class="col s12">
				<p>You have nothing in your cart at the moment.</p>
			</div>
		</div>
		@endif
		
		@if(Session::has('savedItems') && count(Session::get('savedItems')->items) > 0)
			<div class="row">
				<div class="col s12">
					<h4>Don't Forget These Items!</h4>
				</div>
			</div>
			<div class="row">
				@foreach($savedItems as $saved)
					<div class="col s12 m4">
						<div class="product">
						<img src="{{ $saved['imagePath'] }}" alt="Product Image" />
						{{ $saved['title'] }}
						<div class="row"></div>
						<div class="row">
							<div class="col s12 m6 offset-m6">
								<a class="btn waves waves-effect waves-dark" href="/unsave/{{ $saved['id'] }}"><i class="material-icons">delete</i></a>
							</div>
						</div>
						</div>
					</div>
				@endforeach
			</div>
		@else
			<div class="col s12">
				<p>You have no items saved</p>
			</div>
		@endif
		
		<div class="row">
			<div class="col s12">
				<a class="btn btn-large right waves waves-effect" href="#!">Checkout</a>
			</div>
		</div>
	</div>
@endsection