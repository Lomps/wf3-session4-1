<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mairieModel as Mairie;
use App\User as User;
use Illuminate\Support\Facades\Hash;
use Auth;

class usersController extends Controller
{

	// Affiche le profil
 	public function profil(){
	$mairie = Mairie::where('id_mairie', Auth::user()->mairie_id_mairie)->first();
	return view('profil', ['mairie' => $mairie]);
	}
	// Affiche le select de la page modifcation du profil
	public function profilaffichemaire(){ 
		$profilaffichemaire = Mairie::get();       	
		return view('modifier-profil', ['profilaffichemaire' => $profilaffichemaire]);
	}

	// Affiche modifie le profil
	public function modifprofil(){
		return view('modifier-profil');
	}

	// Valide modifie profil
	 public function validemodifprofil(Request $donnees){
	 	$ValideData = $donnees->validate([
	 		'id' => 'required',
	 		'name' => 'required|string|max:255',
	 		'firstname' => 'required|string|max:255',
	 		'password' => 'string|min:6|confirmed',
	 		'email' => 'string|email|max:255|unique:users',
	 		'mairie'=> 'required|string|max:60',
	 	]);

	 	 User::where('id', $donnees['id'])->update([
	 		'name' =>$donnees['name'],
	 		'firstname' =>$donnees['firstname'],
	 		'password' =>Hash::make($donnees['password']),
	 		'email' =>$donnees['email'],
	 		'mairie_id_mairie' => $donnees['mairie'],
	 		'id'=>$donnees['id'],
	 	]);
	 	return redirect()->back()->with('message','Le profile a été modifié avec succès');
	 }
}