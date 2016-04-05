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

Route::get('/', 'WelcomeController@index');
// Route::get('members', 'MembersController@index');
// Route::get('members/add', 'MembersController@create');
// Route::get('members/listAll', 'MembersController@listAll');
// Route::get('members/profile/{id}', 'MembersController@show');
// Route::get('members/update/{id}', 'MembersController@edit');
// Route::post('members', 'MembersController@store');

Route::resource('/admin/members', 'MembersController');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
