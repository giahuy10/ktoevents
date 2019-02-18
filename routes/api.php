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

Route::prefix('event-xem-web-moi')->group(function () {
    Route::post('/', 'XemWebMoiController@store');
    Route::get('/','XemWebMoiController@index');
    Route::post('/download', 'XemWebMoiController@download');
});

Route::post('log', 'LogController@store');