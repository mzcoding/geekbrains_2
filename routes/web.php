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

Route::get('/admin',  'Admin\IndexController@index')->name('admin');

Route::get('/', 'HomeController@index')->name('news');
Route::get('/category/{slug}', 'CategoryController@show')->name('categories');
//categories
Route::group(['prefix' => 'categories'], function() {
	Route::get('/create', 'CategoryController@create')->name('categories.create');
	Route::post('/store', 'CategoryController@store')->name('categories.store');
	Route::get('/edit', 'CategoryController@edit')->name('categories.edit');
	Route::put('/update', 'CategoryController@update')->name('categories.update');
});
//news
Route::group(['prefix' => 'news'], function () {
 Route::get('/create', 'NewsController@create')->name('news.create');
 Route::post('/store', 'NewsController@store')->name('news.store');

 Route::get('/{news}/edit', 'NewsController@edit')->name('news.edit');
 Route::put('/{id}/update', 'NewsController@update')->name('news.update');
 Route::get('{slug}/show', 'NewsController@show')
	->where('slug', '\w+')->name('news.show');
});

Route::get('/prices', function() {
	$prices = collect([50, 100, 500, 1000]);
	dd($prices->first());
});

//Auth::routes();
