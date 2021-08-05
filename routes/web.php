<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');

Route::get('buscar-socio', 'Search\SearchSocioController')->name('search.socio');
Route::resource('socios', 'SocioController');

Auth::routes(["register" => false]);

Route::get('/home', 'HomeController@index')->name('home');
