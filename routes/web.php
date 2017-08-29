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
})->name('home');

Route::get('/user', 'User@index')->name('UserIndex') ;
Route::get('/categories', 'Category@index')->name('CatIndex') ;
Route::get('/category/add', 'Category@add') ->name('NewCat');
Route::post('/category/create','Category@create')->name('SaveNewCat');