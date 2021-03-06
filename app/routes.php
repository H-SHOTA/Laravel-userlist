<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::filter('edit', 'EditFilter');
Route::get('/', 'UserController@getIndex');

Route::controller('top/', 'UserController');

Route::group(array('before' => 'edit'), function()
{
	Route::controller('edit', 'EditController');
});

