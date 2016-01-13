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
        Route::get('',          ['as'=>'index', 'uses'=> 'AdminCategoriesController@index']);
        Route::post('',         ['as'=>'store', 'uses'=> 'AdminCategoriesController@store']);
        Route::get('/{id}',     ['as'=>'update', 'uses'=> 'AdminCategoriesController@show']);
        Route::put('/{id}',     ['as'=>'update', 'uses'=> 'AdminCategoriesController@update']);
        Route::delete('/{id}',  ['as'=>'delete', 'uses'=> 'AdminCategoriesController@delete']);
    });

    Route::group(['prefix'=>'products', 'as'=>'products'], function(){
        Route::get('',          ['as'=>'index', 'uses'=> 'AdminProductsController@index']);
        Route::post('',         ['as'=>'store', 'uses'=> 'AdminProductsController@store']);
        Route::get('/{id}',     ['as'=>'update', 'uses'=> 'AdminProductsController@show']);
        Route::put('/{id}',     ['as'=>'update', 'uses'=> 'AdminProductsController@update']);
        Route::delete('/{id}',  ['as'=>'delete', 'uses'=> 'AdminProductsController@delete']);
    });

});
