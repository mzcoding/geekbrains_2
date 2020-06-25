<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/start.html', function() {
	 $name = request()->has('name') ? request()->get('name') : null;
	 if(is_null($name)) {
	 	 return "Укажите имя";
	 }

	 return "Hello, ". $name;
});