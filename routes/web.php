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
Route::get('/loginreg.html', 'MainPageController@login');
Route::get('/viewcart.html', 'MainPageController@viewcart');
Route::get('/productsearch.html', 'MainPageController@productsearch');
Route::get('/contactsfaqs.html', 'MainPageController@contactsfaqs');
Route::get('/viewproduct.html', 'MainPageController@viewproduct');
Route::get('/backoffice/', 'BackOfficeController@home');
Route::get('/backoffice/index.html', 'BackOfficeController@home');

// Cards
Route::get('cards', 'CardController@list');
Route::get('cards/{id}', 'CardController@show');

// API
Route::put('api/cards', 'CardController@create');
Route::delete('api/cards/{card_id}', 'CardController@delete');
Route::put('api/cards/{card_id}/', 'ItemController@create');
Route::post('api/item/{id}', 'ItemController@update');
Route::delete('api/item/{id}', 'ItemController@delete');

// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
