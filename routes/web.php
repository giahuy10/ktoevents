<?php

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

Route::prefix('event-report')->group(function () {
    Route::get('/xem-web-moi','XemWebMoiController@index');
});
Route::prefix('download-report')->group(function () {
    Route::get('/xem-web-moi','XemWebMoiController@download');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
