<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// implement group middleware auth for resource route
Route::middleware('auth')->group(function () {
    Route::resource('contacts', 'ContactController');
});
// //resource individual middleware route
// Route::resource('contacts', 'ContactController')->middleware('auth');

//simple route
Route::resource('contacts', 'ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
