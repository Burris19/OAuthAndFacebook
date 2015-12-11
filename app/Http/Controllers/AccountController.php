<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccountController extends Controller {

	public function facebook_redirect() {
		return \Socialize::with('facebook')->redirect();
	}

	public function facebook() {
		$user = \Socialize::with('facebook')->user();
		dd($user);
	}



}
