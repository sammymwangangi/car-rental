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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::resource('cars', 'CarController');
Route::post('import', 'CarController@import')->name('car.import');
Route::get('export', 'CarController@export')->name('car.export');
Route::get('/', 'CarController@getCars')->name('cars.getCars');
Route::patch('cars/{car}', 'CarController@updateLikes')->name('cars.updateLikes');
Route::resource('brands', 'BrandController');
Route::resource('categories', 'CategoryController');
Route::resource('bookings', 'BookingController');
Route::get('dashboard', 'AdminController@index')->name('dashboard.index');

Route::get('dashboard/cars', 'AdminController@getCars')->name('dashboard.cars');
Route::get('dashboard/bookings', 'AdminController@getBookings')->name('dashboard.bookings');
Route::get('dashboard/reports', 'AdminController@reports')->name('dashboard.reports');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
