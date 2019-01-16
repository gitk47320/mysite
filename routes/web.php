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

Route::get('top','MysiteController@top');
Route::get('books','MysiteController@books');
Route::get('add','MysiteController@booksadd');
Route::get('editlist','MysiteController@bookseditlist');
Route::get('edit','MysiteController@bookspostforedit')->name('foredit');
Route::get('products','MysiteController@products');

Route::post('books/add','MysiteController@bookspostadd');
Route::post('books/delete','MysiteController@bookspostdelete')->name('delete');
Route::post('books/edit','MysiteController@bookspostedit');
Route::post('books/bulkadd','MysiteController@bookspostbulkadd');