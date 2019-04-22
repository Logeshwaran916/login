<?php
Route::get('shudanti/login', 'Shudanti\Login\Controllers\LoginController@index')->name('shudanti.login.index');
Route::post('shudanti/login', 'Shudanti\Login\Controllers\LoginController@postLogin')->name('shudanti.login.postLogin');
