<?php

Route::get('/', function () {
    return view('welcome');
});

route::get('/teste', 'PagesController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

