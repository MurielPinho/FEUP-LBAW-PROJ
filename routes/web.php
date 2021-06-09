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

//Tests

use App\Http\Controllers\ReviewController;

Route::post('/toggleadmin', 'BuyerController@toggleAdmin');


// Home
Route::get('/', 'MainPageController@home');
Route::get('/loginreg', 'MainPageController@login');
Route::get('/viewcart', 'MainPageController@viewcart');
Route::get('/productsearch', 'MainPageController@productsearch');
Route::get('/contactsfaqs', 'MainPageController@contactsfaqs');
Route::get('/viewproduct', 'MainPageController@viewproduct');
Route::get('/checkout', 'MainPageController@checkout');
Route::get('/delivery', 'MainPageController@delivery');
Route::get('/payment', 'MainPageController@payment');
Route::get('/review', 'MainPageController@review');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('loginreg-edit/{id}', 'BuyerController@loginregedit');

//Buyers
Route::get('buyers/{id}', 'BuyerController@show');
Route::get('buyers', 'BuyerController@list');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::get('register', 'MainPageController@login');
Route::get('login', 'MainPageController@login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::delete('buyers/{id}', 'BuyerController@destroy');
Route::post('editaddress', 'BuyerController@editaddress')->name('editaddress');
Route::post('editcinfo', 'BuyerController@editcinfo')->name('editcinfo');



//Products
Route::get('products', 'ProductController@list');
Route::get('products/{id}', 'ProductController@show');
Route::get('product-edit/{id}', 'ProductController@editPage');
Route::put('product-edit/{id}', 'ProductController@edit');
Route::delete('products/{id}', 'ProductController@destroy');
Route::patch('products/{id}/', 'ProductController@update');
Route::post('uploadproduct', 'ProductController@upload')->name('uploadproduct');

//Cart
Route::get('carts', 'CartController@list');
Route::post('addcart', 'CartController@add');
Route::post('decrease', 'CartController@decrease');
Route::post('increase', 'CartController@increase');
Route::post('update', 'CartController@update');
Route::get('cart', 'CartController@show');



//Backoffice
Route::get('/backoffice', 'BackOfficeController@home');
Route::get('/backoffice/index.php', 'BackOfficeController@home');
Route::get('/backoffice/users', 'BackOfficeController@users');
Route::get('/backoffice/settings', 'BackOfficeController@settings');
Route::get('/backoffice/products', 'BackOfficeController@products');
Route::get('/backoffice/newproduct', 'BackOfficeController@newproduct');

Route::get('/reviews', 'ReviewController@list');
Route::get('reviews/{id}', 'ProductController@show');

//Questions
Route::post('questions', 'QuestionController@create');

//Answers
Route::post('answers', 'AnswerController@create');

//Reviews
Route::post('reviews', 'ReviewController@create');
