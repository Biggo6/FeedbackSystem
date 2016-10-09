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

Route::get('/auth/', function()
{
	return View::make('login');
});

Route::get('/', function()
{
	return Redirect::to('/auth');
});

Route::post('app/login', ['as'=>'app.login', 'uses'=>'AppController@login']);

Route::group(['before'=>'auth'], function(){
	Route::get('dashboard', ['as'=>'app.dashboard', 'uses'=>'AppController@dashboard']);
	Route::get('app/logout',['as'=>'app.logout', 'uses'=>'AppController@logout']);
	//Users Codes
	Route::get('app/users', ['as'=>'app.users', 'uses'=>'UserController@manage']);
	Route::post('users/store', ['as'=>'users.store', 'uses'=>'UserController@store']);
	Route::get('users/refresh', ['as'=>'users.refresh', 'uses'=>'UserController@refresh']);
	Route::get('users/refreshWith',['as'=>'users.refreshWith', 'uses'=>'UserController@refreshWith']);
	//Configure Codes
	Route::get('configure/system',['as'=>'configure.system', 'uses'=>'ConfigureController@system']);
	Route::get('configure/possibleSolns',['as'=>'configure.possibleSolns', 'uses'=>'ConfigureController@possibleSolns']);
	Route::get('configure/departments',['as'=>'configure.departments', 'uses'=>'ConfigureController@departments']);
	Route::get('configure/subDepartments',['as'=>'configure.subDepartments', 'uses'=>'ConfigureController@subDepartments']);
	//Questions code
	Route::get('question/create',['as'=>'question.create', 'uses'=>'QuestionController@create']);
});


