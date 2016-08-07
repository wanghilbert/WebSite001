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

Route::post('/user/edit/permission/{user}', 'UserController@permission');

Route::post('/user/edit/pwd/{user}', 'UserController@password');
/**
 * Resource Management
 */
Route::get('/res/index', 'ResController@index');

Route::get('/res/edit', 'ResController@editIndex');

Route::get('/res/show', 'ResController@show');

Route::post('/res/add', 'ResController@add');

Route::delete('/res/delete/{res}', 'ResController@delete');

Route::get('/res/edit/{res}', 'ResController@editPage');

Route::post('/res/edit/update/{res}', 'ResController@update');

// Excel Data
Route::get('/excel/index', 'ExcelController@index');

Route::post('/excel/export', 'ExcelController@export');

Route::get('/index', 'ResController@test');

// Test
Route::get('/test', 'ResController@testLogin');

//yw test
Route::get('/yw_test',  function () {
    return view('basicStruct');
});

