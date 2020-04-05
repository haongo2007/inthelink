<?php

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

Route::namespace('Admin')->group(function () {

	Route::redirect('/', 'admin/login');

	Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('admin.login');
	Route::post('login', 'Auth\LoginController@adminLogin');
	Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');

	Route::group(['middleware' => ['auth:admin']], function () {
		Route::get('home', 'HomeController@index')->name('admin.home');
		Route::redirect('/', 'admin/home');
	});
	
});