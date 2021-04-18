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
Route::get('/countries','ApiController@countries');
Route::post('/states','ApiController@states');
Route::post('/cities','ApiController@cities');
Route::post('checkemail','ApiController@checkemail');
Route::post('checkmobile','ApiController@checkmobile');

Route::get('/countries', 'ApiController@countries');
Route::post('/states', 'ApiController@states');
Route::post('/cities', 'ApiController@cities');