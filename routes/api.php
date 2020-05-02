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

Route::group(['middleware' => 'api'], function(){
    Route::resource('products', 'ProductController');
    Route::resource('stock', 'StockController')->parameters([
        'stock' => 'id'
    ]);

    Route::resource('orders', 'OrderController')->only([
        'store'
    ]);

    Route::post('login', 'UserController@login');
    Route::post('user/register', 'UserController@register');
});


Route::group(['middleware' => ['jwt.auth','api-header']], function () {
    Route::resource('orders', 'OrderController')->except([
        'store'
    ]);
});


