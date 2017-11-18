@extends('layouts.app')

@section('title','Homepage')

@section('content')
	<div class="container">
		@if(Session::has('success'))
			<div class="row">
				<div id="charge-message" class="green">
				{{ Session::get('success') }}
				</div>
			</div>
		@endif
		<div class="row">
			@foreach($products as $product)
				<div class="col s12 m4">
					<div class="product">
					<img src="{{ $product->imagePath }}" alt="Product Image" />
					{{ $product->title }}
					<div class="row">
						<div class="col s12 right">
							<a href="{{ route('product.addToCart', ['id'=>$product->id]) }}" class="btn waves waves-effect waves-dark"><i class="material-icons">add_shopping_cart</i> Add to Cart</a>
						</div>
					</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection