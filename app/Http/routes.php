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

Route::auth();

Route::get('/home', 'HomeController@index');


/**
 * User Management
 */
// Route::get('/user/userInfo', 'UserController@userInfo');

Route::get('/user/registerUser', 'UserController@registerUser');

Route::get('/user/show', 'UserController@show');

Route::delete('/user/delete/{user}', 'UserController@delete');

Route::get('/user/edit/permission/{user}', 'UserController@permission');

Route::get('/user/edit/pwd/{user}', 'UserController@password');
/**
 * Resource Management
 */
Route::get('/res/show', 'ResController@show');

Route::delete('/res/delete/{res}', 'ResController@delete');

Route::post('/res/edit/{res}', 'ResController@edit');