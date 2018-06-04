<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mairieModel as Mairie;
class afficheinscmairieController extends Controller
{
    public function affichemaire(){ 
		$affichemaire = Mairie::get();       	
		return view('auth.register', ['affichemaire' => $affichemaire]);

	}
}
