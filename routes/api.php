<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/news', function() {
	  $data = file_get_contents(storage_path('app/public/db.txt'));
	  $e = explode("\n", $data);
	  $response = [];
	  $i = 0;
	  foreach($e as $news) {
	  	 $response[] = [
	  	 	 'id'     => $i,
			 'text'   => $news,
			 'status' => 'published'
		 ];
	  	 $i++;
	  }

	  return response()->json($response, 400)
		   ->header('Content-Type', 'application/json');
});
