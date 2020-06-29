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

Route::get('/', 'NewsController@index')->name('news');
Route::group(['prefix' => 'news'], function () {
 Route::get('/create', 'NewsController@create')->name('news.create');
 Route::post('/store', 'NewsController@store')->name('news.store');
 Route::get('/{id}/edit', 'NewsController@edit')
	->where('id', '\d+')->name('news.edit');
 Route::get('{slug}/show', 'NewsController@show')
	->where('slug', '\w+')->name('news.show');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
