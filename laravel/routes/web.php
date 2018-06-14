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
	Route::get('/', 'indexController@accueil')->name('accueil');
// Route crédits
	Route::get('/credit', 'indexController@credit')->name('credit');
// Route mentions légales
	Route::get('/mentions-legales', 'indexController@mentionslegales')->name('mentionslegales');
// Route Contactez-nous
	Route::get('/contactez-nous', 'indexController@contacteznous')->name('contacteznous');
//  affiche la page connécté
	Route::get('/accueil', 'HomeController@index')->middleware('auth')->name('home');
// Route profil
	Route::get('/utilisateur', 'usersController@profil')->middleware('auth')->name('profil');
// Route affiche modif profil
Route::get('/modifier-profil', 'usersController@profilaffichemaire')->middleware('auth')->name('modifprofil');
// Route modif profil validation
Route::post('/validemodifprofil', 'usersController@validemodifprofil')->middleware('auth')->name('validemodifprofil');
// Route affichage theme
Route::get('affiche-theme', 'indexController@affichetheme')->middleware('auth')->name('affichetheme');
// Route affiche vue du theme
Route::get('vue-theme/{id}', 'indexController@affichevue')->middleware('auth')->name('affichevue');

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
//	Route validation des modification de mairie
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
// Route affiche theme
	Route::get('/theme', 'adminController@theme')->middleware('auth')->name('theme');
// Route voir images du theme
	Route::get('/theme-vue/{id}', 'adminController@themevue')->middleware('auth')->name('themevue');
// Route modifier images

// Afficger les coordonées
	Route::get('/theme-coordonées/{id}', 'adminController@themecoord')->middleware('auth')->name('themecoord');
// Modif coordonées

//  Affiche la page ajout theme
	//Route::get('/ajout-theme', 'adminControllerajoutheme')->middleware('auth')->name('ajoutheme');
// valide l'ajout de thème

});
// fin de route admin

// Route articles
	Route::get('/article','articleController@article')->middleware('auth')->name('article');
	Route::post('/ajoutarticle', 'articleController@ajoutarticle')->middleware('auth')->name('ajoutarticle');

Auth::routes();
//  affiche la page connécté
Route::get('/accueil', 'HomeController@index')->name('home');
Route::get('/register', 'afficheinscmairieController@affichemaire')->name('register');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser'); 

