<?php
Route::get('shudanti/login', 'Shudanti\Login\Controllers\LoginController@index')->name('shudanti.login.index');
Route::post('shudanti/login', 'Shudanti\Login\Controllers\LoginController@postLogin')->name('shudanti.login.postLogin');

Route::get('shudanti/admin', 'Shudanti\Login\Controllers\LoginController@admin')->name('shudanti.admin');
Route::get('shudanti/user', 'Shudanti\Login\Controllers\LoginController@user')->name('shudanti.user');
