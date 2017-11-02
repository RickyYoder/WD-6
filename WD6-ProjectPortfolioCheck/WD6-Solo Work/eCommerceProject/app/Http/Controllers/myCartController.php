<?php
	namespace App\Http\Controllers;
	
	use App\User;
	use App\Http\Controllers\Controller;
	
	class myCartController extends Controller{
		
		public function viewCart(){
			
			return view('myCart.view');
			
		}
		
	}
?>