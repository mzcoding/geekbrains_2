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



Route::get('/', 'HomeController@index')->name('news');
Route::get('/category/{slug}', 'CategoryController@show')->name('categories');
Route::get('/news/{slug}/show', 'NewsController@show')
	->where('slug', '\w+')->name('news.show');

Route::group(['middleware' => 'auth'], function() {
Route::get('/logout', function() {
	Auth::logout();
	return redirect('/login');
});
//account
Route::get('/account', 'Account\IndexController@index')->name('account');

//admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
	Route::get('/', 'Admin\IndexController@index')->name('admin');
	Route::resource('/categories', Admin\CategoryController::class);
	Route::resource('/news', Admin\NewsController::class);
});

});

Auth::routes();
