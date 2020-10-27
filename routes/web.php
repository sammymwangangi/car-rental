<?php

use RealRashid\SweetAlert\Facades\Alert;
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
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function () {
    Alert::success('Success Title', 'Success Message');
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('access-denied', function () {
    return view('errors.403');
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
Route::resource('bookings', 'BookingController')->middleware(['auth', 'verified']);

Auth::routes(['verify' => true]);

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::group(['prefix' => 'dashboard', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@index')->name('dashboard.index');
    Route::get('/cars', 'AdminController@getCars')->name('dashboard.cars');
    Route::get('/bookings', 'AdminController@getBookings')->name('dashboard.bookings');
    Route::get('/payments', 'AdminController@payments')->name('dashboard.payments');
    Route::get('/bookings/toggle-status/{id}', 'AdminController@toggle_status')->name('bookings.status');
    Route::get('/reports', 'AdminController@reports')->name('dashboard.reports');
});

// Route::group(['prefix' => 'dashboard', 'middleware' => ['role:admin']], function() {
//     Route::get('/', 'AdminController@welcome');
//     Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
// });

//**************Profiles Routes ****************************
Route::prefix('/profile')->middleware('auth')->group(function(){
    Route::get('/passwordChange','ProfileController@changePassword');
    Route::post('/passwordChange/{id}','ProfileController@postChangePassword');
    Route::get('/editProfile/{id}','ProfileController@editprofile');
    Route::post('/editprofile/{id}','ProfileController@posteditprofile');
});
