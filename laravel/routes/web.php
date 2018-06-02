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
Route::get('/credit', function() {
	return view('credit');
});
// Route crédits
//Route::get('/credit', 'Controller@credit')->name('credit');
// Routes utilisateur
Route::get('/utilisateur', 'usersController@profil')->middleware('auth')->name('profil');


// Route Admin
Route::prefix('admin')->group(function() {
	Route::get('/', 'adminController@accueil')->middleware('auth')->name('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');