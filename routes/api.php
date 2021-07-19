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

Route::get('/restaurant','Api\RestaurantController@index')->name('api.restaurant');

Route::get('/dish/{id}','Api\Dishcontroller@index')->name('api.dish');

Route::get('/dish','Api\Dishcontroller@allDishes')->name('api.all.dish');

Route::get('/restaurant/{id}','Api\Restaurantcontroller@restaurantForId')->name('api.restaurant.id');