<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getSignup(){
		//return signup view
		return view('user.signup');
	}
	
	public function postSignup(Request $request){
		//sign user up with credentials
		$this->validate($request,[
			'email'=>'email|required|unique:users',
			'password'=>'required|min:6',
			'confirmedPassword'=>'required|same:password'
		]);
		
		$user = new User([
			'email'=>$request->input('email'),
			'password'=>bcrypt($request->input('password'))
		]);
		
		$user->save();
		
		Auth::login($user);
		
		return redirect('/profile');
	}
	
	public function getSignin(){
		return view('user.signin');
	}
	
	public function postSignin(Request $request){
		$this->validate($request,[
			'email'=>'email|required',
			'password'=>'required|min:6'
		]);
		
		if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
			return redirect('/profile');
		}else{
			return redirect()->back();
		}
	}
	
	public function getProfile(){
		return view('user.profile');
	}
	
	public function getLogout(){
		Auth::logout();
		return redirect('/');
	}
}
