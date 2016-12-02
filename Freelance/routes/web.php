<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'auth'], function(){

	Route::get('/home',['as'=>'home.index', 'uses'=>'HomeController@index']);
	Route::get('projects/claimed', ['as'=>'projects.index2', 'uses'=>'ProjectsController@index2']);


	Route::resource('users','UsersController');
	Route::resource('projects','ProjectsController');
	Route::put('projects/update/{id}', ['as'=>'projects.update_claimer', 'uses'=>'ProjectsController@update_claimer']);
	Route::put('projects/index2/unclaim/{id}', ['as'=>'projects.unclaim_project', 'uses'=>'ProjectsController@unclaim_project']);



	Route::get('logout', function(){
		Auth::logout();
		return redirect()->route('landing.landing');
	})->name('logout');

});

Auth::routes();

Route::get('/',['as'=>'landing.landing', 'uses'=>'LandingController@landing']);


