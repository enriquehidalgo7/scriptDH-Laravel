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

Route::get('/smarteate/home','SearchController@latest');

// Route::get('smarteate/home', 'ProductController@latest');

// Route::get('smarteate/home', 'accesorieController@latestacc');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('welcome');


Route::get('/allproducts', 'ProductController@index');

// hacer lo mismo para accesorios

Route::get('/carrito', 'OrderController@show');

Route::post('/producto/search', 'ProductController@search');

Route::get('/productos/{id}', 'ProductController@show');

Route::get('/accesorio/{id}', 'AccesorieController@show');

Route::get('/order/{id}', 'OrderController@add')->middleware('auth');






// Rutas Admin

Route::get('/smarteate/admin', 'AdminController@index')->middleware('IsAdmin');

Route::post('/admin/search/items/', 'AdminController@seeker');

// creacción

Route::get('/products/create', 'ProductController@creationForm');

Route::post('/product/new/add', 'ProductController@create');

Route::get('/accesories/create', 'accesorieController@creationForm');

Route::post('/accesory/new/add', 'accesorieController@create');

// Edición

Route::get('/products/modify/{id}', 'ProductController@editionForm');

Route::put('/product/edit/{product}', 'ProductController@edit');

Route::get('/accesory/modify/{id}', 'AccesorieController@editionForm');

Route::put('/accesory/edit/{accesorie}', 'AccesorieController@edit');

// Borrado

Route::delete('/products/delete/{product}', 'ProductController@destroy');

Route::delete('/accesory/delete/{accesorie}', 'AccesorieController@destroy');

// Buscador de Productos y Accesorios

Route::post('/search/items/', 'SearchController@seeker');
