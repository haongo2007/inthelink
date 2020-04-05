<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register User routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "User" middleware group. Now create something great!
|
*/

/* LOGIN FACEBOOK */
Route::get('/auth/{provider}/{position}', 'Socialite\LoginController@Redirect')->name('loginSocialite');
Route::get('/callback/{provider}', 'Socialite\LoginController@SocalCallback');

Route::namespace('User')->group(function(){

	// Authentication Routes override...
	Route::get('login', [
	  'as' => 'login',
	  'uses' => 'Auth\LoginController@showLoginForm'
	]);
	Route::post('login', [
	  'as' => '',
	  'uses' => 'Auth\LoginController@login'
	]);
	Route::post('logout', [
	  'as' => 'logout',
	  'uses' => 'Auth\LoginController@logout'
	]);

	// Password Reset Routes...
	Route::post('password/email', [
	  'as' => 'password.email',
	  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
	]);
	Route::get('password/reset', [
	  'as' => 'password.request',
	  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
	]);
	Route::post('password/reset', [
	  'as' => 'password.update',
	  'uses' => 'Auth\ResetPasswordController@reset'
	]);
	Route::get('password/reset/{token}', [
	  'as' => 'password.reset',
	  'uses' => 'Auth\ResetPasswordController@showResetForm'
	]);

	// Registration Routes...
	Route::get('register', [
	  'as' => 'register',
	  'uses' => 'Auth\RegisterController@showRegistrationForm'
	]);
	Route::post('register', [
	  'as' => '',
	  'uses' => 'Auth\RegisterController@register'
	]);

	Route::get('/', 'HomeController@index')->name('user');
	Route::get('/home', 'HomeController@index')->name('user.home');
	Route::get('/choose', 'HomeController@choose')->name('user.choose');

	/* PRODUCT */
	Route::get('/product/{pid}/{fid?}', 'ProductController@show')->name('user.products.show');

	/* CATEGORIES */
	Route::get('categories/{id}', 'CategoriesController@show')->name('user.categories.show');

	/* CART */
	Route::get('/cart', 'CartController@index')->name('user.cart');
	Route::post('/cart/add', 'CartController@add');

});
