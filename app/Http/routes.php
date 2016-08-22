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

// Route::get('/home', 'HomeController@index');


// /**
//  * User Management
//  */
// // Route::get('/user/userInfo', 'UserController@userInfo');

// Route::post('/user/registerUser', 'UserController@registerUser');
// Route::get('/user/registerUser', 'UserController@registerUser');

// Route::get('/user/show', 'UserController@show');

// Route::delete('/user/delete/{user}', 'UserController@delete');

// Route::post('/user/edit/permission/{user}', 'UserController@permission');

// Route::post('/user/edit/pwd/{user}', 'UserController@password');
// /**
//  * Resource Management
//  */
// Route::get('/res/index', 'ResController@index');

// Route::get('/res/edit', 'ResController@editIndex');

// Route::get('/res/show', 'ResController@show');

// Route::post('/res/add', 'ResController@add');

// Route::delete('/res/delete/{res}', 'ResController@delete');

// Route::get('/res/edit/{res}', 'ResController@editPage');

// Route::post('/res/edit/update/{res}', 'ResController@update');

// // Excel Data
// Route::get('/excel/index', 'ExcelController@index');

// Route::post('/excel/export', 'ExcelController@export');


// // Test
// Route::get('/test', 'ResController@testLogin');

// //yw test
// Route::get('/yw_test',  function () {
//     return view('layouts.basicStruct');
// });

// Route::get('/detailHot',  function () {
//     return view('detailHot');
// });

// Route::get('/news/create', function() {
// 	return view('news.create');
// });

/////////////////////////////
Route::get('/index', 'HomeController@index');

// Route::post('/user/registerUser', 'UserController@registerUser');
// Route::get('/register', 'UserController@registerIndex');

Route::post('/news/create', 'NewsController@createNews');
Route::get('/news/create', 'NewsController@createIndex');
Route::get('/news/index/{id}', 'NewsController@index');

Route::get('/res/create', 'ResController@createIndex');
Route::post('/res/create', 'ResController@createRes');

Route::get('/tag', 'ResController@createTag');
Route::get('/bind', 'ResController@bind');

// Excel Operation Test;
Route::get('/excel', 'ResController@excelInput');

Route::get('/filterByFan', 'ResController@filterByFans');
// Route::get('/filterByTag', 'ResController@filterByTag');


Route::get('/select', 'UserController@select'); // Select Res by User
Route::get('/done', 'UserController@done'); // Delete Selection

Route::get('/filterByTags', 'ResController@filterByTags');
