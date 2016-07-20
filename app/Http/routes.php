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
Route::get('/catalog/{category}', ['as' => 'main', 'uses' => 'CatalogController@products']);
Route::get('/products/{product}', ['as' => 'main', 'uses' => 'CatalogController@product']);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::auth();

Route::get('/home', 'HomeController@index');
