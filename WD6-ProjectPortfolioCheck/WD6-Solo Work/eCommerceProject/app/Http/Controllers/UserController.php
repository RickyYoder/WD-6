<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSignup(){
		//return signup view
	}
	
	public function postSignup(Request $request){
		//sign user up with credentials
		$this->validate($request,[
			'email'=>'email|required|unique:users',
			'password'=>'required|min:6'
		]);
		
		//note: add password confirmation later...
		
		$user = new User([
			'email'=>$request->input('email'),
			'password'=>bcrypt($request->input('password'))
		]);
		
		$user->save();
		
		return redirect()->route('/');
	}
}
