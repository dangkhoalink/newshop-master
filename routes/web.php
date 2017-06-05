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

Route::get('/','ProductController@index' );
Route::get('checkout','PagesController@checkout' );
Route::get('blog','PagesController@blog' );
Route::get('blogsingle','PagesController@blogsingle' );
Route::get('contact','PagesController@contact' );


Route::get('product_details/{id}','ProductController@product_details' );
Route::get('shop', 'ProductController@shop');
Route::get('checkout', 'CheckoutController@index');
Route::get('form-validate', 'CheckoutController@formvalidate');
Route::post('form-validate', 'CheckoutController@formvalidatepost');


Route::post('search', 'ProductController@search');
Route::post('search/addItem/{id}', 'CartController@addItem');

//Route::get('/admin', 'AdminController@index');
//Route::post('admin/add_product', 'AdminController@add_product');

Route::get('cart','CartController@index' );
Route::get('addItem/{id}','CartController@addItem' );
Route::get('removeItem/{id}','CartController@removeItem' );
Route::post('update/{id}','CartController@update' );

Auth::routes();
Route::get('/home', 'HomeController@index');

//Route::get('admin','AdminController@category')->middleware('admin','auth');
Route::get('admin', 'AdminController@category');