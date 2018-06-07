<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\mairieModel as Mairie;

class adminController extends Controller
{
    // Affiche la page admin
	public function accueil(){
		if(Auth::user()->role ==4){
			$mairie = Mairie::count();
			return view('admin.accueil', ['mairie' => $mairie]);
		}else{
			return abort('404');
		}
	}

    // Affiche la liste des mairies
	public function listemairie(){ 
		if(Auth::user()->role ==4){
			$listmairie = Mairie::get();       	
			return view('admin.liste-mairie', ['listemairie' => $listmairie]);
		}else{
			return abort('404');
		}
	}

	// affiche page inscrition mairie
	public function inscription_mairie(){
		if(Auth::user()->role ==4){
			return view('admin.inscription-mairie');
		}else{
			return abort('404');
		}
	}

	// Valide l'inscription de la mairie
	public function postinscription_mairie(Request $donnees){
		if(Auth::user()->role ==4){
			$valideData = $donnees->validate([
				'mairie' => 'required|max:255',
				'adresse' => 'required|max:255',
				'code_postal' => 'required|max:5',
				'ville' => 'required|max:255',
				'telephone' => 'required|max:14',
				'email_mairie' => 'required|max:255',
				'site' => 'max:255'
			]);
			$mairie = new Mairie();
			$mairie->mairie = $donnees['mairie'];
			$mairie->adresse = $donnees['adresse'];
			$mairie->code_postal = $donnees['code_postal'];
			$mairie->ville = $donnees['ville'];
			$mairie->telephone = $donnees['telephone'];
			$mairie->email_mairie = $donnees['email_mairie'];
			$mairie->site = $donnees['site'];
			$mairie->save();
			return redirect()->back()->with('message', 'La mairie à été crée avec succès !');
		}else{
			return abort('404');
		}
	}


}
