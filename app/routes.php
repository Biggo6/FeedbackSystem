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
	return View::make('takeSurvey');
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
	Route::get('configure/roles',['as'=>'configure.roles', 'uses'=>'ConfigureController@roles']);
	Route::get('configure/permissions',['as'=>'configure.permissions', 'uses'=>'ConfigureController@permissions']);
	Route::get('configure/possibleSolns',['as'=>'configure.possibleSolns', 'uses'=>'ConfigureController@possibleSolns']);
	Route::get('configure/departments',['as'=>'configure.departments', 'uses'=>'ConfigureController@departments']);
	Route::get('configure/subDepartments',['as'=>'configure.subDepartments', 'uses'=>'ConfigureController@subDepartments']);
	Route::post('system/store', ['as'=>'system.store', 'uses'=>'ConfigureController@systemStore']);
	Route::get('system/refreshWith', ['as'=>'system.refreshWith', 'uses'=>'ConfigureController@refreshWith']);
	Route::post('system/removeLogo', ['as'=>'system.removeLogo', 'uses'=>'ConfigureController@removeLogo']);
	Route::post('dept/store', ['as'=>'dept.store', 'uses'=>'ConfigureController@deptStore']);
	Route::get('dept/refreshWith', ['as'=>'dept.refreshWith', 'uses'=>'ConfigureController@deptDeptRefreshWith']);
	Route::post('subdept/store', ['as'=>'subdept.store', 'uses'=>'ConfigureController@subdeptStore']);
	Route::get('subdept/refreshWith', ['as'=>'subdept.refreshWith', 'uses'=>'ConfigureController@subdeptDeptRefreshWith']);
	Route::post('psolns/store', ['as'=>'psolns.store', 'uses'=>'ConfigureController@psolnsStore']);
	Route::get('psolns/refreshWith', ['as'=>'psolns.refreshWith', 'uses'=>'ConfigureController@psolnsWith']);
	Route::post('roles/store', ['as'=>'roles.store', 'uses'=>'ConfigureController@rolesStore']);
	Route::get('roles/refreshWith', ['as'=>'roles.refreshWith', 'uses'=>'ConfigureController@rolesWith']);
	//Questions code
	Route::get('question/create',['as'=>'question.create', 'uses'=>'QuestionController@create']);
	Route::get('question/destroy/{id}',['as'=>'question.destroy', 'uses'=>'QuestionController@destroy']);
	Route::post('question/store',['as'=>'question.store', 'uses'=>'QuestionController@store']);
	Route::get('question/refreshWith', ['as'=>'question.refreshWith', 'uses'=>'QuestionController@refreshWith']);
	Route::get('question/index', ['as'=>'question.index', 'uses'=>'QuestionController@index']);
	Route::get('question/preview', ['as'=>'question.preview', 'uses'=>'QuestionController@preview']);
	
});

Route::post('question/preview', ['as'=>'question.getpreview', 'uses'=>'QuestionController@getpreview']);
Route::post('app/getSubDepart', ['as'=>'app.getSubDepart', 'uses'=>'QuestionController@getSubDepart']);
Route::post('app/takeSurvey', ['as'=>'app.takeSurvey', 'uses'=>'QuestionController@takeSurvey']);
Route::post('app/storeSurvey', ['as'=>'app.storeSurvey', 'uses'=>'QuestionController@storeSurvey']);
