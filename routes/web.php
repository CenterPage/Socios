<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');

Route::resource('socios', 'SocioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
