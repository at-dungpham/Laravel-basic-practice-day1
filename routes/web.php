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

Route::get('/', function () {
    return view('welcome');
});

Route::get('product', 'ProductController@index')->name('product');

Route::delete('product/{id}', 'ProductController@destroy')->name('deleteProduct');

Route::get('product/create', 'ProductController@create')->name('createProduct');

Route::post('product/store', 'ProductController@store')->name('storeProduct');

Route::get('product/{id}', 'ProductController@show')->name('showProduct');

Route::get('product/edit/{id}', 'ProductController@edit')->name('editProduct');

Route::post('product/update/{id}', 'ProductController@update')->name('updateProduct');

Route::get('category', 'CategoryController@index')->name('category');

Route::get('category/product/{id}', 'CategoryController@showCategoryProduct')->name('productCategory');

Route::delete('category/{id}' , 'CategoryController@destroy')->name('deleteCategory');

