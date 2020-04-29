<?php

/**
 * Application routes.
 */
Route::any('/', 'ShopController@index');

Route::any('/shop', 'ShopController@archive');
Route::any('/product_category', 'ShopController@archive');
Route::any('/product_tag', 'ShopController@archive');
Route::any('/product', 'ShopController@single');



Route::fallback('ErrorController@index');