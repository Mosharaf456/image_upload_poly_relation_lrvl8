<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fileup','FileUploadController@create');

Route::post('/fileup','FileUploadController@store');

// 
Route::get('/users/create','UsersController@create');

Route::post('/users/create','UsersController@store');

//
Route::get('/images','UsersController@images');

