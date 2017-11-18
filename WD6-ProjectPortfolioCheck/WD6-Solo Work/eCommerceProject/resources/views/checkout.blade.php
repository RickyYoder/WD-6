@extends('layouts.app')

@section('title','Checkout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1>Checkout</h1>
				<h4>Your Total: ${{ $total }}</h4>
			</div>
		</div>
		<div class="row">
			<div id="charge-error" class="col s12 red white-text {{ !Session::has('error') ? 'hide' : '' }}">
				{{ Session::get('error') }}
			</div>
		</div>
		<div class="row">
			<div id="card-errors" class="col s12 red white-text hide">
				
			</div>
		</div>
		<div class="row">
			<form class="col s12" name="checkout" action="{{ route('checkout') }}" method="post">
				<div class="row">
					<div class="col s12 m6 input-field">
						<label for="name">Name</label>
						<input type="text" id="name" required/>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 input-field">
						<label for="address">Address</label>
						<input type="text" id="address" required/>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 input-field">
						<label for="cardholdername">Cardholder Name</label>
						<input type="text" id="card-name" required/>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m3 input-field">
						
						<div id="card-element"></div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 input-field">
						<button type="submit" class="btn btn-large">Place Order</button>
					</div>
				</div>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection

@section('scripts')
	<script src="https://js.stripe.com/v3/"></script>
	<script>
		var stripe = Stripe('pk_test_rnZoGzKcIy2RSaPcjGt7pVNN'),
			$form = $("form"),
			elements = stripe.elements();
			
		var card = elements.create('card');
		card.mount("#card-element");
		
		card.addEventListener('change', function(event) {
		  var displayError = document.getElementById('card-errors');
		  if (event.error) {
			  displayError.classList.remove("hide");
			displayError.textContent = event.error.message;
		  } else {
			  displayError.classList.add("hide");
			displayError.textContent = '';
		  }
		});
		
		// Create a token or display an error when the form is submitted.
		$form.submit(function(event){
			event.stopPropagation();
			event.preventDefault();
			$("#charge-error").addClass("hide");
			$(this).find('button').prop('disabled',true);
			stripe.createToken(card).then(function(result) {
				if (result.error) {
				  // Inform the customer that there was an error
				  var errorElement = document.getElementById('card-errors');
				  errorElement.textContent = result.error.message;
				} 
				else{
					
					var token = result.token.id;
				   
					$form.append($('<input type="hidden" name="stripeToken" />').val(token));
				
					$form.get(0).submit();
				}
			  });
			return false;
		});
		
		/*function stripeResponseHandler(status, response){
			if(response.error){
				$("#charge-error").removeClass('hide').text(response.error);
				$form.find('button').prop('disabled',false);
			}
			else{
				var token = response.id;
				
				alert(token);
				event.preventDefault();
				event.stopPropagation();
				return false;
				
				
				return false;
			}
		}*/
	</script>
	@endsection