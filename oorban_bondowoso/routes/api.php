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

Route::get('all-property', 'API\PropertiController@allProperty');
Route::post('addfavorit', 'API\FavoritController@addfavorit');
Route::post('deletefavorit', 'API\FavoritController@deletefavorit');
Route::get('checkfavorit', 'API\FavoritController@checkfavorit');
Route::get('listfavorit', 'API\FavoritController@listfavorit');
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::post('update', 'API\UserController@update');
