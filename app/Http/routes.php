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
    
    Route::pattern('id', '[1-5]');
    
    Route::group(['prefix'=>'categories'], function(){
        Route::get('',['as'=>'a.c.index', 'uses'=>'AdminCategoriesController@index']);
        Route::get('create',['as'=>'a.c.create', 'uses'=>'AdminCategoriesController@create']);
        Route::post('store',['as'=>'a.c.store', 'uses'=>'AdminCategoriesController@store']);   
        Route::get('edit/{id?}',['as'=>'a.c.edit', 'uses'=>'AdminCategoriesController@edit']);
        Route::put('update/{id?}',['as'=>'a.c.update', 'uses'=>'AdminCategoriesController@update']);
        Route::get('destroy/{id?}',['as'=>'a.c.destroy', 'uses'=>'AdminCategoriesController@destroy']);            
    });

    Route::group(['prefix'=>'products'], function(){
        Route::get('',['as'=>'a.p.index', 'uses'=>'AdminProductsController@index']);
        Route::get('create',['as'=>'a.p.create', 'uses'=>'AdminProductsController@create']);
        Route::post('store',['as'=>'a.p.store', 'uses'=>'AdminProductsController@store']);
        Route::get('edit/{id?}',['as'=>'a.p.edit', 'uses'=>'AdminProductsController@edit']);
        Route::put('update/{id?}',['as'=>'a.p.update', 'uses'=>'AdminProductsController@update']);
        Route::get('destroy/{id?}',['as'=>'a.p.destroy', 'uses'=>'AdminProductsController@destroy']);       
    });
    
});



