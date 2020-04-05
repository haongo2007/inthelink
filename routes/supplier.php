<?php

/*
|--------------------------------------------------------------------------
| supplier Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::namespace('Supplier')->group(function () {

	
	Route::get('login/dev', 'Auth\LoginController@Devlogin');
	
	Route::redirect('/', 'supplier/login');
	Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('supplier.login');
	Route::post('login', 'Auth\LoginController@SupplierLogin');
	Route::post('logout', 'Auth\LoginController@logout')->name('supplier.logout');

	Route::group(['middleware' => ['auth:supplier']], function () {

		/* PRODUCT */
		Route::resource('products', 'ProductsController', ['except' => ['show']]);
		Route::delete('/products/destroy/{id}','ProductsController@destroy')->name('products.destroy');
		Route::put('/products/update/status','ProductsController@updateStatus')->name('products.update.status');

		/* BRANDS */
		Route::resource('brands', 'BrandsController', ['except' => ['show']]);

		/* CATEGORIES */
		Route::resource('categories', 'CategoriesController', ['except' => ['show']]);

		/* SETTINGS */
		Route::get('settings', 'SettingController@index')->name('supplier.settings');
		Route::get('profile/{id?}', 'SettingController@edit')->name('supplier.profile.edit');
		Route::put('profile/update', 'SettingController@update')->name('supplier.profile.update');

		/* PROFILE */
		Route::get('home', 'DashboardController@index')->name('supplier.home');
		Route::get('dashboard', 'DashboardController@index')->name('supplier.dashboard');

		/* INVOICE */
		Route::get('invoice', 'InvoiceController@index')->name('supplier.invoice');

		/* ORDERS */
		Route::get('orders', 'OrdersController@index')->name('supplier.orders');

		/* REQUESTS SAMPLE*/
		Route::get('requests/sample', 'RequestSampleController@index')->name('supplier.requests.sample');
		Route::get('requests/sample/update/{id}/{stt}', 'RequestSampleController@updateStatus')->name('supplier.requests.sample.update');
		
		/* REQUESTS SELL*/
		Route::get('requests/sell', 'RequestSellController@index')->name('supplier.requests.sell');
		Route::get('requests/sell/update/{id}/{stt}', 'RequestSellController@updateStatus')->name('supplier.requests.sell.update');
		
	});
	
});