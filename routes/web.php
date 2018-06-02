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



	// Admin routes
	Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
	{
	   	// Route for forum to registe a user 
		

		// route for registering a user
		Route::post('/create/users', 'UserController@store');

		// route fo rshoing a forum to add a role
		Route::get('/role', 'RoleController@index')->name('role');

		//route to add a role
		Route::post('/role', 'RoleController@role');

		// Route for changing a role
		Route::post('/change/role/{id}', 'RoleController@change');

		//Route for reseting a users's password
		Route::get('/reset/password/{id}', 'AuthController@reset_password');

		// Route for reseting the user's password
		Route::post('/reset/password/{id}', 'AuthController@reset');


		//route for showing users
		Route::get('/show/users', 'UserController@show')->name('show_users');

		// route for user activation
		Route::get('/activation/user/{id}', 'UserController@activation');

		//route for updating the user
		Route::get('/update/user/{id}', 'UserController@show_update_user');


		// route for showing a form to add a new category
		Route::get('/create/category', 'CategoryController@create')->name('add_category');
		Route::post('/create/category', 'CategoryController@store');

		// Route for showing the categories 
		Route::get('/show/category', 'CategoryController@show')->name('show_category');

		// route to show the categories' items 
		Route::get('/show/category/item/{id}', 'CategoryController@show_items');

		// Route for updating the category
		Route::get('/update/category/{id}', 'CategoryController@edit')->name('edit_category');
		Route::post('/update/category/{id}', 'CategoryController@update');

		// route for category activation
		Route::get('/activation/category/{id}', 'CategoryController@activation');

		// route for showing a form to add items
		Route::get('/add/items', 'ItemController@create')->name('add_items');

		Route::post('/add/items', 'ItemController@store');

		//route for showing items
		Route::get('/show/items', 'ItemController@show')->name('show_items');

		//route for searching for an item
		Route::post('/find/item', 'ItemController@find');

		// route for item activation
		Route::get('/activation/item/{id}', 'ItemController@activation');


		// route for showing item's details
		Route::get('/item/info/{id}', 'ItemController@show_info');

		// route for editing an item
		Route::get('/edit/item/{id}', 'ItemController@edit');
		
		Route::post('/update/item/{id}', 'ItemController@update');


		// route for adding size type 
		Route::get('/add/size', 'SizeController@create')->name('add_size');

		Route::post('/add/size', 'SizeController@store');	


		// route for adding color type
		Route::get('/add/color', 'ColorController@create')->name('add_color');

		Route::post('/add/color', 'ColorController@store');

		// route for adding material type
		Route::get('/add/material', 'MaterialController@create')->name('add_material');

		Route::post('/add/material', 'MaterialController@store');


		// routes for sizes
		Route::get('/show/size', 'SizeController@show')->name('show_size');

		Route::get('/update/size/{id}', 'SizeController@edit');

		Route::post('/update/size/{id}', 'SizeController@update');


		// routes for colors
		Route::get('/show/color', 'ColorController@show')->name('show_color');

		Route::get('/update/color/{id}', 'ColorController@edit');

		Route::post('/update/color/{id}', 'ColorController@update');


		// routes for material
		Route::get('/show/material', 'MaterialController@show')->name('show_material');

		Route::get('/update/material/{id}', 'MaterialController@edit');

		Route::post('/update/material/{id}', 'MaterialController@update');

		Route::get('/return/confirmation', 'ReturnedController@confirmation')->name('return_confirmation');

		Route::get('/return/confirm/all', 'ReturnedController@confirm_all');



	});


	// Route for dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

	// route for logging out a user
	Route::get('/logout', 'AuthController@logout')->name('logout');

	// route for profile
	Route::get('/profile', 'UserController@index')->name('profile');

	// Route for showing a forum to update a user
	Route::get('/update/profile', 'UserController@edit')->name('update_profile');

	// Route for updating a user
	Route::post('/update/profile/{id}', 'UserController@update');

	// Route for a forum to change the password
	Route::get('/password', 'UserController@show_password')->name('show_password');

	// route for changing the password
	Route::post('/password/{id}' ,'UserController@change_password');


	Route::get('/create/buyers', 'BuyerController@create')->name('add_buyer');

	Route::post('/store/buyers', 'BuyerController@store');

	Route::get('/show/buyers', 'BuyerController@show')->name('show_buyers');

	Route::post('/find/buyer', 'BuyerController@find');

	Route::get('/activation/buyer/{id}', 'BuyerController@activation');

	Route::get('/update/buyer/{id}', 'BuyerController@edit');

	Route::post('/update/buyer/{id}', 'BuyerController@update');

	// route for showing sale page
	Route::get('/sale', 'BasketController@show')->name('sale');

	// route for adding items to the basket
	Route::get('/add/basket/{id}', 'BasketController@add');

	// route for candelling the current order
	Route::get('/cancel/basket', 'BasketController@cancel')->name('cancel_order');

	// delete an item from the basket
	Route::get('/delete/basket/{id}', 'BasketController@delete');

	// route fotr item discount
	Route::get('/discount/basket/{id}', 'BasketController@discount');


	// route for item quantity update
	Route::post('/update/quantity/{id}', 'BasketController@update');


	// route for sale search engien
	Route::post('/search/item', 'BasketController@find');


	// route for ordering 
	Route::get('/confirm/order', 'BasketController@order')->name('order_confirm');

	// route for identifying a buyer with payment type
	Route::post('/buyer/order', 'BasketController@type');

	//route for finding orders 
	Route::get('/show/orders', 'OrderController@show')->name('show_orders');

	Route::post('/find/order', 'OrderController@find');

	Route::get('/return/item/{id}', 'ReturnedController@create');

	Route::post('/return/item', 'ReturnedController@store');

	Route::get('/return/all/{id}', 'ReturnedController@return_all')->name('return_all');

	Route::get('/show/returns', 'ReturnedController@show')->name('show_returns');

		// route for reporting
	Route::get('/pick/date', 'ReportController@show')->name('date_picker');

	Route::post('/show/report', 'ReportController@report');

	// route for showing all the loans
	Route::get('/show/loans', 'BuyerController@show_loans')->name('show_loans');

	// route for confirming the loans
	Route::get('/confirm/loan/{id}', 'BuyerController@confirm_loan');


	Route::get('/print/invoice', 'BasketController@print');
});



// route to show login page
Route::get('/login', 'AuthController@show')->name('login');

//route for logging a user
Route::post('/login', 'AuthController@login');


Route::get('/users', 'UserController@create')->name('add_user');

