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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/utilisateur', 'usersController@profil')->middleware('auth')->name('profil');


// Route admin
Route::get('/admin', 'adminController@admin')->middleware('auth')->name('admin');

// Route  utilisateur profil
Route::get('/utilisateur', 'usersController@profil')->middleware('auth')->name('profil');