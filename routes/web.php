<?php

/**
 * Application routes.
 */

//Route::any('/', 'ShopController@archive');
Route::any('/', 'ShopController@index');

Route::any('/shop', 'ShopController@archive');
Route::any('/product_category', 'ShopController@archive');
Route::any('/product_tag', 'ShopController@archive');
Route::any('/product', 'ShopController@single');
Route::any('/cart', 'ShopController@cart');
Route::any('/checkout', 'ShopController@checkout');



Route::fallback('ErrorController@index');