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

Route::middleware('api')->group(function () {
    Route::get('/books', 'ApiBookController@index');
    Route::get('/books/{book}', 'ApiBookController@show');
    Route::post('/books', 'ApiBookController@store');
    Route::put('/books/{book}', 'ApiBookController@update');
    Route::delete('/books/{book}', 'ApiBookController@destroy');
});
