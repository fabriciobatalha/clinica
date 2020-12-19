<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function() {
    Route::post('login', 'App\Http\Controllers\Api\AuthController@login')->name('api.login');
    Route::post('refresh', 'App\Http\Controllers\Api\AuthController@refresh');
});

Route::group(['prefix' => 'v1', 'middleware' => ['auth:api', 'jwt.refresh']], function() {
    Route::post('logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::resource('exames', 'App\Http\Controllers\ExamesController');
});
