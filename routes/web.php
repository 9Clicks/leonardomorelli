<?php


Route::get('/', '_PrincipalController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
