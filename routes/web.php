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

use App\Http\Controllers\AdminController;
use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', 'ContactController@show');

Route::resource('cars', 'CarController');
// Route::get('cars', 'CarController@index')->name('cars.index');
Route::get('/', 'CarController@getCars')->name('cars.getCars');
// Route::get('cars/{car}', 'CarController@show')->name('cars.show');
// Route::get('cars/{car}', 'CarController@edit')->name('cars.edit');
Route::patch('cars/{car}', 'CarController@updateLikes')->name('cars.updateLikes');
// Route::patch('cars/{car}', 'CarController@update')->name('cars.update');
// Route::post('cars', 'CarController@store')->name('cars.store');
Route::resource('brands', 'BrandController');
Route::resource('categories', 'CategoryController');
Route::resource('bookings', 'BookingController');
// Route::resource('dashboard', 'AdminController');
Route::get('dashboard', 'AdminController@index')->name('dashboard.index');

Route::get('dashboard/cars', 'AdminController@getCars')->name('dashboard.cars');
Route::get('dashboard/bookings', 'AdminController@getBookings')->name('dashboard.bookings');
Route::get('dashboard/reports', 'AdminController@reports')->name('dashboard.reports');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
