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

// route accueil
Route::get('/', function (){
	return view('welcome');
});
// Route crédits
Route::get('/credit', function(){
	return view('credit');
});
// Route mentions légales
Route::get('/mentions-legales', function(){
	return view('mentions-legales');
});
// Route Contactez-nous
Route::get('/contactez-nous', function(){
	return view('contactez-nous');
});
// Route Utilisateur
// Route profil
Route::get('/utilisateur', 'usersController@profil')->middleware('auth')->name('profil');
// Route affiche modif profil
Route::get('/modifier-profil', 'usersController@profilaffichemaire')->middleware('auth')->name('modifprofil');
// Route modif profil validation
Route::post('/validemodifprofil', 'usersController@validemodifprofil')->middleware('auth')->name('validemodifprofil');
// Fin de route Utilisateur


// Route Admin
Route::prefix('admin')->group(function() {
// Route accueil admin 
	Route::get('/', 'adminController@accueil')->middleware('auth')->name('admin');
// Route liste des mairies
	Route::get('/listemairie', 'adminController@listemairie')->middleware('auth')->name('listemairie');
// Route admin mairie

// Route Affiche inscrire une mairie
	Route::get('/inscription_mairie', 'adminController@inscription_mairie')->middleware('auth')->name('inscription_mairie');
// Route ajout mairie
	Route::post('/postinscription_mairie', 'adminController@postinscription_mairie')->middleware('auth')->name('postinscription_mairie');
});
// fin de route admin

// Route articles
	Route::get('/article','articleController@article')->middlware('auth')->name('article');

Auth::routes();

Route::get('/register', 'afficheinscmairieController@affichemaire')->name('register');
Route::get('/home', 'HomeController@index')->name('home');