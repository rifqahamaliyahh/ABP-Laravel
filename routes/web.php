<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/lat1','App\Http\Controllers\Lat1Controller@index');
Route::get('/lat1/method2', 'App\Http\Controllers\Lat1Controller@method2');
