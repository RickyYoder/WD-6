<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	"uses"=>'HomepageController@helloWorld',
	"as"=>"index"
]);

Route::get('/cart', 'myCartController@viewCart');

Route::get('/signup',[
	"uses"=>"UserController@getSignup",
	"as"=>"user.signup",
	"middleware"=>"guest"
]);

Route::post('/signup',[
	"uses"=>"UserController@postSignup",
	"as"=>"user.signup",
	"middleware"=>"guest"
]);


Route::get('/signin',[
	"uses"=>"UserController@getSignin",
	"as"=>"user.signin",
	"middleware"=>"guest"
]);

Route::post('/signin',[
	"uses"=>"UserController@postSignin",
	"as"=>"user.signin",
	"middleware"=>"guest"
]);

Route::get('/profile',[
	"uses"=>"UserController@getProfile",
	"as"=>"user.profile",
	"middleware"=>"auth"
]);

Route::get('/logout',[
	"uses"=>"UserController@getLogout",
	"as"=>"user.logout",
	"middleware"=>"auth"
]);

Route::get('/phpinfo',function(){
	die(phpinfo());
});

Route::get('/version', function()
{
$laravel = app();
return "Your Laravel version is ".$laravel::VERSION;
});


?>