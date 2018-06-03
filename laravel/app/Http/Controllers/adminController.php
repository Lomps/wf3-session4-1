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
		return view('admin.listemairie');
		
	}

	


}
