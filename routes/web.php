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
Route::get('/home', 'HomeController@index');
Route::post('/mypost', 'UserController@create');
Route::get('/del/{iUserId}/{iTodoId}', 'UserController@deleteTodo');
Route::get('/list/{iUserId}/{iTodoId}/{sTodoList}/', 'UserController@todoList');
Route::post('/add', 'UserController@addToList');
Route::get('/deleteList/{iTodoId}/{iId}', 'UserController@deleteList');
Route::post('/update', 'UserController@update');
Route::get('/logout', 'UserController@logout');
Route::get('/mylist', 'UserController@myList');
Route::get('/excel/{iTodoId}', 'FileController@excel');
