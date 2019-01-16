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

Route::get('/', 'DashboardController@index')->name('dashboards.index');

Route::group(['prefix' => 'author'], function(){
    Route::get('/', 'AuthorController@list')->name('authors.list');
    Route::get('/add', 'AuthorController@create')->name('authors.create');
    Route::post('/store', 'AuthorController@store')->name('authors.store');
    Route::get('/edit/{id}', 'AuthorController@edit')->name('authors.edit');
    Route::get('/show/{id}', 'AuthorController@show')->name('authors.show');
    Route::put('/update/{id}', 'AuthorController@update')->name('authors.update');
    Route::delete('/destroy/{id}', 'AuthorController@destroy')->name('authors.destroy');
});

Route::group(['prefix' => 'bookmaker'], function(){
    Route::get('/', 'BookmakerController@list')->name('bookmakers.list');
    Route::get('/add', 'BookmakerController@create')->name('bookmakers.create');
    Route::post('/store', 'BookmakerController@store')->name('bookmakers.store');
    Route::get('/edit/{id}', 'BookmakerController@edit')->name('bookmakers.edit');
    Route::get('/show/{id}', 'BookmakerController@show')->name('bookmakers.show');
    Route::put('/update/{id}', 'BookmakerController@update')->name('bookmakers.update');
    Route::delete('/destroy/{id}', 'BookmakerController@destroy')->name('bookmakers.destroy');
});

Route::group(['prefix' => 'book'], function(){
    Route::get('/', 'BookController@list')->name('books.list');
    Route::get('/add', 'BookController@create')->name('books.create');
    Route::post('/store', 'BookController@store')->name('books.store');
    Route::get('/edit/{id}', 'BookController@edit')->name('books.edit');
     Route::get('/show/{id}', 'BookController@show')->name('books.show');
    Route::put('/update/{id}', 'BookController@update')->name('books.update');
    Route::delete('/destroy/{id}', 'BookController@destroy')->name('books.destroy');
});