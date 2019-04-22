<?php


Route::get('test/login', 'Shudanti\Login\Controllers\LoginController@index')->name('test.login.index');
Route::post('test/login', 'Shudanti\Login\Controllers\LoginController@postLogin')->name('test.login.postLogin');

Route::get('test/user', 'Shudanti\Login\Controllers\LoginController@user')->name('test.user');
