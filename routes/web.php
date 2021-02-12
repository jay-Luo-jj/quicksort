<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'BrowseController@index');

Route::get('/forgot-password', 'PasswordResetController@show')->name("password.reset");
Route::post('/forgot-password', 'PasswordResetController@store')->name("password.email");

Route::get('/add-item', 'AddItemController@show');

Route::get('/login', 'LoginController@show');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('/register', 'RegisterController@show');
Route::post('/register', 'RegisterController@store');
