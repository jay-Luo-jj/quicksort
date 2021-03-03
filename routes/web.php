<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'BrowseController@index');
Route::post('/', 'BrowseController@add');

Route::get('/test', 'HelloWorldController@testPage')->middleware('auth');
Route::post('/test', 'HelloWorldController@testPagePost');

Route::get('/forgot-password', 'PasswordResetController@show')->name("password.reset");
Route::post('/password-reset', 'PasswordResetController@showReset');
Route::post('/forgot-password', 'PasswordResetController@store')->name("password.email");

Route::get('/add-item', 'AddItemController@show');
Route::get('/request-item', 'RequestItemController@show');
Route::get('/item-confirmed', 'ConfirmItemController@show');

Route::get('/login', 'LoginController@show')->name("login");
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('/register', 'RegisterController@show');
Route::post('/register', 'RegisterController@store');
