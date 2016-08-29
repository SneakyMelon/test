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

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');


/**
* Task Controllers
*
*/
Route::get('/tasks', 'TaskController@index');

Route::post('/task', 'TaskController@store');

Route::delete('/task/{task}', 'TaskController@destroy');
