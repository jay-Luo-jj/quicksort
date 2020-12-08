<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'BrowseController@index');

Route::get('/forgot-password', 'PasswordResetController@show');

Route::get('/login', 'LoginController@show');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('/register', 'RegisterController@show');
Route::post('/register', 'RegisterController@store');
