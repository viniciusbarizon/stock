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

Route::get ( '/products', 'ProductController@list' );