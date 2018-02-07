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

use Illuminate\Support\Facades\Route;

Route::get('/', 'BooksController@index')->name('home');

Route::get('/bookcreate', 'BooksController@create')->name('bookCreate');

Route::get('/bookstore', 'BooksController@store');
Route::post('/bookstore', 'BooksController@store')->name('bookStore');

Route::get('/bookedit/{id}', 'BooksController@edit')->name('bookEdit');

Route::get('/bookupdate/{id}', 'BooksController@update');
Route::put('/bookupdate/{id}', 'BooksController@update')->name('bookUpdate');

Route::delete('/bookdelete/{id}', 'BooksController@destroy')->name('bookDelete');

