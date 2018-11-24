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

Route::get('/smarteate/home','ProductController@latest');

// Route::get('smarteate/home', 'ProductController@latest');

// Route::get('smarteate/home', 'accesorieController@latestacc');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('welcome');


Route::get('/allproducts', 'ProductController@index');

Route::get('/carrito', 'OrderController@show');

Route::post('/producto/search', 'ProductController@search');

Route::get('/productos/{id}', 'ProductController@show');

Route::get('order/{id}', 'OrderController@add');

Route::get('smarteate/admin', 'AdminController@index');

Route::get('/products/create', 'ProductController@creationForm');

Route::post('/product/new/add', 'ProductController@create');

Route::get('smarteate/accesory/create', 'accesorieController@creationForm');

Route::post('accesory/new/add', 'accesorieController@create');
