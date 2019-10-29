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

// Auth:routers();
Route::get('/book','BookController@index')->name('book');
Route::get('book_list' , function (){
	return view('bookstore_admin/book/book_list');
});
