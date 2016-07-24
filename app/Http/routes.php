<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', ['as' => 'main', 'uses' => 'MainController@index']);
Route::get('/catalog', ['as' => 'main', 'uses' => 'CatalogController@index']);
Route::get('/catalog/{url}', ['as' => 'main', 'uses' => 'CatalogController@products']);
Route::get('/products/{url}', ['as' => 'main', 'uses' => 'CatalogController@product']);
Route::get('/cart', ['as' => 'main', 'uses' => 'CartController@index']);
Route::get('/contact', ['as' => 'main', 'uses' => 'MainController@contact']);




//Route::group(['middleware' => ['web']], function () {
//Админка
    Route::auth();

    Route::get('/home', 'HomeController@index');
//Категории
    Route::get('/home/category', 'Admin\CategoryController@index');
    Route::get('/home/category/store', 'Admin\CategoryController@store');
    Route::get('/home/category/edit/{id}', 'Admin\CategoryController@edit');
    Route::post('/home/category/create', 'Admin\CategoryController@create');
    Route::post('/home/category/update', 'Admin\CategoryController@update');
    Route::get('/home/category/destroy/{id}', 'Admin\CategoryController@destroy');
    Route::get('/home/category/photo/{id}', 'Admin\CategoryController@destroy');
    Route::get('/home/category/background/{id}', 'Admin\CategoryController@destroy');


//Товары

Route::get('/home/products', 'Admin\ProductsController@index');
Route::get('/home/products/store', 'Admin\ProductsController@store');
Route::get('/home/products/edit/{id}', 'Admin\ProductsController@edit');
Route::post('/home/products/create', 'Admin\ProductsController@create');
Route::post('/home/products/update', 'Admin\ProductsController@update');
Route::get('/home/products/destroy/{id}', 'Admin\ProductsController@destroy');
Route::get('/home/products/edit/photos/{id}', 'Admin\ProductsController@updateImg');


//});