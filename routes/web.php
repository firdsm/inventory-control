<?php

Route::get('/', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::middleware('auth')->group(function ()
{
	Route::resources([
	    'supplier' => 'SupplierController',
	    'customer' => 'CustomerController',
	    'product'  => 'ProductController',
	    'purchase' => 'PurchaseController',
	    'order'    => 'OrderController'
	]);

	Route::get('stock', 'ProductController@stock');

});
