<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

// Route::post('login', 'ApiController@login');
// Route::post('register', 'ApiController@register');

// Route::group(['middleware' => 'auth.jwt'], function () {
//     Route::get('logout', 'ApiController@logout');

//     Route::get('user', 'ApiController@getAuthUser');

//     Route::get('products', 'ProductController@index');
//     Route::get('products/{id}', 'ProductController@show');
//     Route::post('products', 'ProductController@store');
//     Route::put('products/{id}', 'ProductController@update');
//     Route::delete('products/{id}', 'ProductController@destroy');
// });
