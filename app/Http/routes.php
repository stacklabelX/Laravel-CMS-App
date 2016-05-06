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
 

Route::resource('admin/members', 'MembersController'); 

/*
==================================================
| Custom Listing of Modules
==================================================
*/
Route::get('admin/list/members/', function(){
	//return view();
});
Route::get('admin/list/members/{type}', function ($type) {
		//				Module, type
		$meta =  array('Members', ucfirst($type));
		$columns =  array('username', 'email',  'phone' , 'Address');
		$users;
		if ($type=='ban') {
				$users= App\members::where('active',2)->get(); 
		}else if ($type=='inactive') {
				$users= App\members::where('active',0)->get(); 
		}else if ($type=='active') {
				$users= App\members::where('active',1)->get(); 
		}
		return View::make('admin.sitepages.list', compact('columns', 'users','meta'));

});
Route::get('admin/home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
