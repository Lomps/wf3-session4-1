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
	Route::get('/liste-mairie', 'adminController@listemairie')->middleware('auth')->name('listemairie');
// Route affiche administartion mairie
	Route::get('/mairie-administration', 'adminController@mairieadministration')->middleware('auth')->name('mairieadministration');
//  Route modification mairie
	Route::get('/modification-mairie/{id}', 'adminController@modifimairie')->middleware('auth')->name('modifiicationmairie');
// Route validation des modification de mairie
	Route::post('validemodif_mairie', 'adminController@validemodif_mairie')->middleware('auth')->name('validemodif_mairie');
// Route suppression mairie
	Route::get('/mairiesupprime/{id}', 'adminController@delmairie')->middleware('auth')->name('delmairie');
// Route Affiche inscrire une mairie
	Route::get('/inscription-mairie', 'adminController@inscription_mairie')->middleware('auth')->name('inscription_mairie');
// Route ajout mairie
	Route::post('/postinscription_mairie', 'adminController@postinscription_mairie')->middleware('auth')->name('postinscription_mairie');
// Route affiche utilisateurs
	Route::get('/utilisateurs', 'adminController@utilisateurs')->middleware('auth')->name('utilisateurs');
// Route active utilisateur
	Route::get('/utilisateurs/active/{id}', 'adminController@useractive')->middleware('auth')->name('activeuser');
// Route modifier utilisateur
	Route::get('/utilisateurs/modif/{id}', 'adminController@modifuser')->middleware('auth')->name('modifuser');
// Route validation modification utilisateur
	Route::post('/utilisateurs/modifuser','adminController@postuser')->middleware('auth')->name('postuser');
// Route supprimer un utilisateur
	route::get('/utilisateurs/delete/{id}', 'adminController@deleteuser')->middleware('auth')->name('deleteuser');
});
// fin de route admin

// Route articles
	Route::get('/article','articleController@article')->middleware('auth')->name('article');
	Route::post('/ajoutarticle', 'articleController@ajoutarticle')->middleware('auth')->name('ajoutarticle');

Auth::routes();

Route::get('/register', 'afficheinscmairieController@affichemaire')->name('register');
Route::get('/home', 'HomeController@index')->name('home');
