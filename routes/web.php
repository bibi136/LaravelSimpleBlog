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

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/xxx', [
	'as' => 'article.xxx',
	'uses' => 'ArticlesController@xxx'
]);

Route::get('/articles/{id}', [
	'as'   => 'article.show',
	'uses' => 'ArticlesController@show'
	]);

