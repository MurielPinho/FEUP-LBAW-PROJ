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


// Home
Route::get('/', 'MainPageController@home');
Route::get('/loginreg', 'MainPageController@login');
Route::get('/viewcart', 'MainPageController@viewcart');
Route::get('/productsearch', 'MainPageController@productsearch');
Route::get('/contactsfaqs', 'MainPageController@contactsfaqs');
Route::get('/viewproduct', 'MainPageController@viewproduct');

Route::get('loginreg-edit/{id}', 'BuyerController@loginregedit');

//Buyers
Route::get('buyers/{id}', 'BuyerController@show');
Route::get('buyers', 'BuyerController@list');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::get('register', 'MainPageController@login');
Route::get('login', 'MainPageController@login');
Route::post('login', 'Auth\LoginController@authLogin');

Route::post('editaddress', 'BuyerController@editaddress')->name('editaddress');
Route::post('editcinfo', 'BuyerController@editcinfo')->name('editcinfo');



//Products
Route::get('products', 'ProductController@list');
Route::get('products/{id}', 'ProductController@show');
Route::get('product-edit/{id}', 'ProductController@editPage');
Route::put('product-edit/{id}', 'ProductController@edit');

//Cart
Route::get('carts', 'CartController@list');
Route::put('addcart/{id}', 'CartController@add');
Route::get('cart/{id}', 'CartController@show');



//Backoffice
Route::get('/backoffice', 'BackOfficeController@home');
Route::get('/backoffice/index.php', 'BackOfficeController@home');
Route::get('/backoffice/users', 'BackOfficeController@users');
Route::get('/backoffice/settings', 'BackOfficeController@settings');
Route::get('/backoffice/products', 'BackOfficeController@products');
Route::get('/backoffice/newproduct', 'BackOfficeController@newproduct');

Route::get('/reviews', 'ReviewController@list');
Route::get('reviews/{id}', 'ProductController@show');

// Cards
/*// Authentication
Route::get('cards', 'CardController@list');
Route::get('cards/{id}', 'CardController@show');

// API
Route::put('api/cards', 'CardController@create');
Route::delete('api/cards/{card_id}', 'CardController@delete');
Route::put('api/cards/{card_id}/', 'ItemController@create');
Route::post('api/item/{id}', 'ItemController@update');
Route::delete('api/item/{id}', 'ItemController@delete');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
*/

