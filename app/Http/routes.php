
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
    return redirect('/index');
});

Route::auth();

/*
1. Excel Operation
	1.1 Import resources from excel
	1.2 Export selections to excel
2. User Manage
	2.1 User Register
	2.2 User Login
	2.3 Password Reset

 */
/////////////////////////////
Route::get('/index', 'HomeController@index');
Route::get('/aboutus', 'HomeController@aboutus');
Route::get('/stars', 'HomeController@stars');

// Test the data channel to detailhot page.
Route::get('/detailHot-{ResId}', 'HomeController@detailHot');
// Route::get('/classify', 'HomeController@classify');
Route::get('/res/collect-{ResId}', 'ResController@collect');

Route::get('/shop/select-{ResId}-{Option}', 'ResController@putInCart')->middleware('auth');
Route::get('/shop/list', 'ResController@listItemInCart')->middleware('auth');
Route::get('/shop/list/delete-{ResId}', 'ResController@deleteItemFromCart')->middleware('auth');

Route::get('/appointment/select-{id}-{option}', 'ResController@appoint')->middleware('auth');
Route::get('/appointment/list', 'ResController@listItemAppoint')->middleware('auth');
Route::get('/appointment/list/delete-{ResId}', 'ResController@deleteItemFromAppoint')->middleware('auth');

Route::get('/list', 'ResController@listIndex');

Route::post('/news/create', 'NewsController@createNews');
Route::get('/news/create', 'NewsController@createIndex');
Route::get('/news/index/{id}', 'NewsController@index');

Route::get('/res/create', 'ResController@createIndex');
Route::post('/res/create', 'ResController@createRes');

Route::get('/tag', 'ResController@createTag');
Route::get('/bind', 'ResController@bind');

// Excel Operation Test;
Route::get('/excel1', 'ResController@excelInput');

Route::get('/filterByFan', 'ResController@filterByFans');
// Route::get('/filterByTag', 'ResController@filterByTag');


Route::get('/select', 'UserController@select'); // Select Res by User
Route::get('/done', 'UserController@done'); // Delete Selection

Route::get('/filterByTags', 'ResController@filterByTags');
Route::get('/star','HomeController@test');
