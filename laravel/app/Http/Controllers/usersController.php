<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
	// Affiche le profil
	public function profil(){
		return view('profil');
	}

	// Affiche modifie le profil
	public function modifprofil(){
		return view('modifier-profil');
	}

	// Valide modifie profil
	// public function validemodifprofil(Request $donnees){
	// 	$ValideData = $donnees->validate([
	// 		'name' => 'required|string|max:255',
	// 		'firstname' => 'required|string|max:255',
	// 		'password' => 'required|string|min:6|confirmed',
	// 		'email' => 'required|string|email|max:255|unique:users'
	// 	]);
	// }
}