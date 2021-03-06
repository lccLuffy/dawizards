<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/about', 'HomeController@about');
    Route::get('/join', 'HomeController@join');
    Route::get('/impress', 'HomeController@impress');
    Route::post('/choose/store', 'JoinController@store');
    Route::post('/send/email', 'JoinController@sendEmail');
    Route::delete('/choose/{join}', 'JoinController@destroy');
    Route::get('admin', 'AdminController@index');
    Route::get('admin/users', 'AdminController@users');
    Route::get('admin/logs', 'AdminController@logs');
});



