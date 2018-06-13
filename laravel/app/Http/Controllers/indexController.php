<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    // affiche la page accueil
    public function  accueil(){
	    return view('welcome');
    }

    // affiche la page crédit
    public function credit(){
        return view('credit');
    }

    // affiche la page mentions legales
    public function mentionslegales(){
        return view('mentions-legales');
    }

    // affiche la page contactez nous
    public function contacteznous(){
        return view('contactez-nous');
    }
}
