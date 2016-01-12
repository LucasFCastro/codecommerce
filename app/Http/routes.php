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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'as' => 'admin'], function(){

    Route::group(['prefix'=>'categories', 'as'=>'categories'], function(){
        Route::get('',          'AdminCategoriesController@index');
        Route::post('',         'AdminCategoriesController@store');
        Route::get('/{id}',     'AdminCategoriesController@show');
        Route::put('/{id}',     'AdminCategoriesController@update');
        Route::delete('/{id}',  'AdminCategoriesController@destroy');
    });

    Route::group(['prefix'=>'products', 'as'=>'products'], function(){
        Route::get('',          'AdminProductsController@index');
        Route::post('',         'AdminProductsController@store');
        Route::get('/{id}',     'AdminProductsController@show');
        Route::put('/{id}',     'AdminProductsController@update');
        Route::delete('/{id}',  'AdminProductsController@destroy');
    });

});
