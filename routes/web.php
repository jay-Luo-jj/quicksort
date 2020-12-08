<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', 'LoginController@showLogin');
Route::post('/login', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout');

Route::get('/register', 'RegisterController@showRegister');
Route::post('/register', 'RegisterController@doRegister');


Route::get('/', function () {
    return view('pages/login');
});
