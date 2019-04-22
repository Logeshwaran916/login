<?php
Route::get('test/login', 'Shudanti\Login\Controllers\LoginController@index')->name('shudanti.login.index');
Route::post('test/login', 'Shudanti\Login\Controllers\LoginController@postLogin')->name('shudanti.login.postLogin');

Route::get('test/user', 'Shudanti\Login\Controllers\LoginController@user')->name('shudanti.user');
