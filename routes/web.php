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

// Route::resource('cars', 'CarController');
Route::get('cars', 'CarController@index')->name('cars.index');
Route::patch('cars/{car}', 'CarController@updateLikes')->name('cars.updateLikes');
Route::resource('brands', 'BrandController');
Route::resource('categories', 'CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
