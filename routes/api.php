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

Route::get('/type','Api\TypeController@index')->name('api.type');

Route::get('/restaurantfilter/{type}','Api\SearchrestaurantController@searchRestaurants')->name('api.restaurantfilter');

Route::get('/dish/{id}','Api\Dishcontroller@index')->name('api.dish');

Route::get('/dish','Api\Dishcontroller@allDishes')->name('api.all.dish');

Route::get('/restaurant/{id}','Api\Restaurantcontroller@restaurantForId')->name('api.restaurant.id');

Route::get('/order','Api\OrderController@index')->name('api.order');