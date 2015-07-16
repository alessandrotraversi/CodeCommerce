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


Route::get('/', 'WelcomeController@index' );


Route::group(['prefix'=>'admin'], function(){
    Route::get('/categories', ['as'=>'admin.categories', 'uses'=>'AdminCategoriesController@index']);
    Route::get('/products', ['as'=>'admin.products', 'uses'=>'AdminProductsController@index']);
});



