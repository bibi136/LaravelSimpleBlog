<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/articles', [
	'as' => 'article.index',
	'uses' => 'ArticlesController@index'
]);

Route::get('/articles/xxx', [
	'as' => 'article.xxx',
	'uses' => 'ArticlesController@xxx'
]);

Route::get('articles/{id}/edit', [
	'as' => 'article.edit',
	'uses' => 'ArticlesController@edit'
]);

Route::get('/articles/create', [
	'as' => 'article.create',
	'uses' => 'ArticlesController@create'
]);

Route::post('articles' ,[ 
	'as' => 'article.store',
	'uses' => 'ArticlesController@store'
]);

Route::put('articles/{id}', [
	'as' => 'article.update',
	'uses' => 'ArticlesController@update'
]);

Route::get('/articles/{id}', [
	'as'   => 'article.show',
	'uses' => 'ArticlesController@show'
]);

Route::delete('/articles/{id}', [
	'as'   => 'article.destroy',
	'uses' => 'ArticlesController@destroy'
]);
	 
Auth::routes();

Route::get('/home', 'HomeController@index');
