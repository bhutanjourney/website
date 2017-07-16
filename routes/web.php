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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/change',function(){
	return view('auth.passwords.change');
})->name('change');


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

