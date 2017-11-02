<?php
	namespace App\Http\Controllers;
	
	use App\User;
	use App\Http\Controllers\Controller;
	
	class HomepageController extends Controller{
		
		public function helloWorld(){
			
			return view('helloworld');
			
		}
		
	}
?>