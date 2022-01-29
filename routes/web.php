<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fileup','FileUploadController@create');

Route::post('/fileup','FileUploadController@store');

