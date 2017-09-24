<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


// routes for the admin
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/change',function(){
	return view('auth.passwords.change');
})->name('change');

Route::post('change-password', 'Auth\UpdatePasswordController@update');

//route for the menu managements

// displays the view of menu managements
Route::get('/admin/menu/view',[
	'uses'=>'MenuController@getIndex',
	'as'=>'view_menu']);

//add menu to the database
Route::post('/admin/menu/add',[
		'uses' => 'MenuController@postAddMenu',
		'as'=> 'add_menu'
	]);

//edit menu
Route::post('/admin/menu/edit',[
		'uses'=>'MenuController@editMenu',
		'as'=>'edit_menu'
	]);

//delete menu
Route::get('/admin/menu/delete/{id}',[
		'uses'=>'MenuController@deleteMenu',
		'as'=>'delete_menu'
	]);


// routes for header image
Route::get('admin/header_image/view',[
	'uses'=>'HeaderImageController@getImage',
	'as'=>'view_header_image'
	]);

// routes to add header image
Route::post('admin/header_image/add',[
	'uses'=>'HeaderImageController@postAddImage',
	'as'=>'add_header_image'
	]);


// Routes for the general user
Route::get('/', function () {
	$header_image = App\HeaderImage::all();
    return view('layouts.website.layout',['header_images'=>$header_image]);
})->name('home');

Route::get('/about_us',function () {
    return view('layouts.website.about_us');
})->name('about_us');

// Route for page Managements

// Route for culture tour
Route::get('/tours/culture_tour',[
		'uses'=>'PageController@getCulture',
		'as'=>'culture_tour'
	]);
Route::get('/tours/culture_tour/experience_bhutan',function(){
	return view('layouts.website.tours.culture.experience_bhutan');
})->name('experience_bhutan');


// Route for festival tour
Route::get('/tours/festival_tour',[
		'uses'=>'PageController@getFestival',
		'as'=>'festival_tour'
	]);

// Route for Nature tour
Route::get('/tours/nature_tour',[
		'uses'=>'PageController@getNature',
		'as'=>'nature_tour'
	]);

// Route for Trekking tour
Route::get('/tours/trekking_tour',[
		'uses'=>'PageController@getTrekking',
		'as'=>'trekking_tour'
	]);

