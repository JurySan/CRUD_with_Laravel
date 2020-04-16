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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', function() {

// 	return view('admin.layouts.master');
// });

Route::group(['prefix'=>'admin' , 'namespace'=>'admin','middleware'=>'auth'], function(){

	Route::get('/post', 'PostController@index');
	Route::get('/post/create', 'PostController@create');
	Route::get('/post/create', 'PostController@store');
	Route::get('/post/{id}/edit', 'PostController@edit');
	Route::get('/post/{id}/edit', 'PostController@update');
	

});

Route::group(['prefix'=>'admin' , 'namespace'=>'admin','middleware'=>'auth'], function(){

	Route::get('/students','StudentController@index');
	Route::get('/students/create','StudentController@create');
	Route::post('/students/create','StudentController@store');
	Route::get('/students/{id}/edit', 'StudentController@edit');
	Route::post('/students/{id}/edit', 'StudentController@update');
	Route::get('/students/{id}' , 'StudentController@destroy');
});

Route::group(['prefix'=>'admin' , 'namespace'=>'admin','middleware'=>'auth'], function(){
	
	Route::get('/tickets','TicketController@index');
	Route::get('/tickets/create','TicketController@create');
	Route::post('/tickets/create','TicketController@store');
	Route::get('/tickets/{id}','TicketController@show');
	Route::get('/tickets/{id}/edit','TicketController@edit');
	Route::post('/tickets/{id}/edit', 'TicketController@update');
	Route::get('/tickets/{id}/delete' , 'TicketController@destroy');
});
