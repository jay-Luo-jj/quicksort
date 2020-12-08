<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'BrowseController@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');
