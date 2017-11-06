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
		
		<div class="row">
			<div class="col s12">
				<p>You have nothing in your cart at the moment.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col s12">
				<h4>Don't Forget These Items!</h4>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m2">
				<div class="saved">
					<img src="https://ae01.alicdn.com/kf/HTB1PNwhNVXXXXXdXFXXq6xXFXXXn/10pcs-lot-Capacitive-Touch-Screen-Stylus-Pen-For-IPad-Air-Mini-2-3-4-For-IPhone.jpg_640x640.jpg"/>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="saved">
					<img src="https://ae01.alicdn.com/kf/HTB1Qgy.SXXXXXbxXXXXq6xXFXXXR/50PCS-LOT-USB-3-1-Type-C-Male-to-Micro-USB-Female-Adapter-Converter-Connector-USB.jpg_640x640.jpg"/>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col s12">
				<a class="btn btn-large right waves waves-effect" href="#!">Checkout</a>
			</div>
		</div>
	</div>
@endsection