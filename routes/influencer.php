<?php
/*
|--------------------------------------------------------------------------
| influencer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::namespace('Influencer')->group(function () {

	Route::get('login/dev', 'Auth\LoginController@Devlogin');

	Route::redirect('/', 'influencer/login');
	Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('influencer.login');
	Route::post('login', 'Auth\LoginController@InfluencerLogin');
	Route::post('logout', 'Auth\LoginController@logout')->name('influencer.logout');

	Route::group(['middleware' => ['auth:influencer']], function () {
		
		/* HOME */
		Route::redirect('/', 'influencer/home');
		Route::get('home', 'HomeController@index')->name('influencer.home');

		/* PROFILE */
		Route::get('dashboard', 'DashboardController@index')->name('influencer.dashboard');

		/* SHOP */
		Route::get('shop', 'ShopController@index')->name('influencer.shop');

		/* PRODUCT */
		Route::get('product/supplier/{uid}', 'ProductController@supplier')->name('influencer.products.supplier');
		Route::get('product/show/{pid}', 'ProductController@show')->name('influencer.products.show');
		Route::get('product/list', 'ProductController@list')->name('influencer.products.list');

		/* WISHLIST */
		Route::get('favorite/list', 'FavoriteController@index')->name('influencer.favorite');
		Route::post('favorite/add', 'FavoriteController@add');

		/* CATEGORIES */
		Route::get('categories/{id}', 'CategoriesController@show')->name('influencer.categories.show');

		/* REQUEST SAMPLE*/
		Route::post('request/sample', 'RequestsController@send');

		/* COPPY LINK */
		Route::post('link/save', 'CoppyLinkController@save');
	});
	
});