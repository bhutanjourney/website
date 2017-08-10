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

<<<<<<< HEAD
Route::post('change-password', 'Auth\UpdatePasswordController@update');
=======

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
});

>>>>>>> 8ac24fe6a9aa657ff98b53d74028861213760d1a
