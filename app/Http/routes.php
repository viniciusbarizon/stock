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

Route::get ( '/', function ()
{
    return '<h1>First Logic with Laravel</h1>';
});

Route::get ( '/other', function ()
{
    return '<h1>Other logic with Laravel</h1>';
});

Route::get ( '/products', [
	'as' => 'products.index',
	'uses' => 'ProductController@list'
] );

Route::get ( '/products/view/{id}', 'ProductController@view' )
	->where ( 'id', '[0-9]+' );

Route::get ( '/products/new', [
	'as' => 'products.new',
	'uses' => 'ProductController@new'
] );

Route::post ( '/products/create', [
	'as' => 'products.create',
	'uses' => 'ProductController@create'
] );

Route::get ( '/products/json', [
	'as' => 'products.json',
	'uses' => 'ProductController@listJSON'
] );

Route::get ( '/products/edit/{id}', 'ProductController@edit' )
	->where ( 'id', '[0-9]+' );

Route::get ( '/products/delete/{id}', 'ProductController@delete' )
	->where ( 'id', '[0-9]+' );

Route::post ( '/products/update/{id}', 'ProductController@update' )
	->where ( 'id', '[0-9]+' );

Route::get('/home', 'HomeController@index');

Route::controllers ( [
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
] );

Route::get('/login', 'LoginController@login');
Route::auth();
