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

Route::get('/', 'AuthController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('signup', 'SignupController');
Route::resource('signin', 'AuthController');
// Route::get('company', function () {
//     return view('pages.company');
// });


Route::group(['middleware' => 'IsLoggedIn'], function () {
    Route::resource('profile', 'ProfileController');
    Route::resource('company', 'CompanyController');
    Route::get('logout', 'AuthController@destroy');
    Route::get('/', 'HomeController@index');
    Route::resource('post', 'PostController');
    
});



