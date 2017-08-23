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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uppercase/{str}', function($str) { 
	$data['uppercase'] = strtoupper($str);
	return view('uppercase', $data);
});

Route::get('/increment/{int}', function($int) {
	return ++$int;
});

Route::get('/add/{int1}+{int2}', function($int1, $int2) {
	return $int1 + $int2;
});

Route::get('/rolldice/{guess}', function($guess) {
	$data['random'] = mt_rand(1, 6);
	$data['guess'] = $guess;
	return view('roll-dice', $data);
});
