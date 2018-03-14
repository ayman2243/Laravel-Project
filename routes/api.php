<?php

use Illuminate\Http\Request;

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


Route::post('register', 'API\Auth\AuthController@register');

Route::post('login', 'API\Auth\AuthController@login');

Route::group(['middleware' => ['jwt.auth']], function() {
   
    Route::get('books', 'API\BookController@index');
   
    Route::post('books', 'API\BookController@store');
   
    Route::put('books/{id}', 'API\BookController@update');
   
    Route::delete('books/{id}', 'API\BookController@destroy');
   
    Route::get('user', 'API\Auth\AuthController@getAuthUser');
   
    Route::get('logout', 'API\Auth\AuthController@logout');
   
    Route::get('test', function(){
        return response()->json(['foo'=>'bar']);
    });
});

