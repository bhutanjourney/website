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
Route::get('/admin/menu/view',function(){
	return view('layouts.master.menu.view');
})->name('view_menu');
