<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('prueba', function(){
////	return "Listo para hacer el llamado";
//	return \OAuth::authorize('facebook');
//});
//
//Route::get('login','WelcomeController@index');


Route::get('facebook','AccountController@facebook_redirect');
Route::get('account/facebook','AccountController@facebook');


Route::get('twitter','AccountController@twitter_redirect');
Route::get('account/twitter','AccountController@twitter');





Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
