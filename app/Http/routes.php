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

Route::get('/', function () {
    return view('welcome');
});

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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => ['web']], function(){

	Route::get('student/index',['uses' => 'StudentController@index']);
	//新增学生页
	Route::any('student/insert',['uses' => 'StudentController@create']);
	//保存添加的学生
	Route::any('student/save',['uses' => 'StudentController@save']);
	Route::any('student/update/{id}',['uses' => 'StudentController@update']);
	Route::any('student/delete/{id}',['uses' => 'StudentController@delete']);
});