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

Route::get('/', function () {
    return view('welcome');
});

Route::get('haikal/{makan}/{minum}/{ngemil}',function ($makan,$minum,$ngemil){
	return 'Tuang '.$makan.'<br>'.
	'Eeut '.$minum.'<br>'.
	'Nyemil '.$ngemil.'<br>';
});

//routing optional parameter
Route::get('user/{nama?}',function($nama="Haikal Maulana F"){
	return $nama;
});