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


// middleware route to prevent unauthorized users from logging in 
Route::group(['middleware' => 'auth'], function () {

    // All my routes that needs a logged in user

	// Route for dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

	// Route for forum to registe a user 
	Route::get('/users', 'UserController@create')->name('add_user');

	// route for registering a user
	Route::post('/create/users', 'UserController@store');

	// route for logging out a user
	Route::get('/logout', 'AuthController@logout')->name('logout');

	// route for profile
	Route::get('/profile', 'UserController@index')->name('profile');

	// Route for showing a forum to update a user
	Route::get('/update/profile', 'UserController@edit')->name('update_profile');

	// ROute for updating a user
	Route::post('/update/profile/{id}', 'UserController@update');

	// Route for a forum to change the password
	Route::get('/password', 'UserController@show_password')->name('show_password');

	// route for changing the password
	Route::post('/password/{id}' ,'UserController@change_password');

	// route fo rshoing a forum to add a role
	Route::get('/role', 'RoleController@index')->name('role');

	//route to add a role
	Route::post('/role', 'RoleController@role');

	//route for showing users
	Route::get('/show/users', 'UserController@show')->name('show_users');

	// route for user activation
	Route::get('/activation/user/{id}', 'UserController@activation');

	//route for updating the user
	Route::get('/update/user/{id}', 'UserController@show_update_user');

	//Route for reseting a users's password
	Route::get('/reset/password/{id}', 'AuthController@reset_password');

	// Route for reseting the user's password
	Route::post('/reset/password/{id}', 'AuthController@reset');

});



// route to show login page
Route::get('/login', 'AuthController@show')->name('login');

//route for logging a user
Route::post('/login', 'AuthController@login');

