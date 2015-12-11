<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'facebook' => [
		'client_id' => '1650515918570289',
		'client_secret' => '25592a3557a1720949897683adb2fc9c',
		'redirect' => '178.62.55.246/account/facebook',
	],

	'twitter' => [
		'client_id' => '1SJ7nICYndubV7WA8zJAh5CLd',
		'client_secret' => '4eKzDTTyGCQMXN0fYpcpTfua5qWXftEQNW3cK44a4U9Vcaasqi',
		'redirect' => '178.62.55.246/account/twitter',
	],

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],

];
