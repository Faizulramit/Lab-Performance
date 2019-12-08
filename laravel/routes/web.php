<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', 'loginController@index')->name('login.index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/registration', 'registrationController@index')->name('registration.index');
	Route::get('/registration/employeelist', 'registrationController@index')->name('registration.index');
	Route::get('/registration/details/{id}', 'registrationController@show')->name('registration.details');
