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
Route::apiResource('products','Api\DonationController', ['only' => ['index','show']]);

Route::apiResource('events','Api\EventController', ['only' => ['index','show']]);

//--------------------------------------------------------------------------------------------
Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::post('login', 'Api\AuthController@login');
Route::post('logout', 'Api\AuthController@logout')->middleware('auth:api');
Route::get('me', 'Api\AuthController@me')->middleware('auth:api');
