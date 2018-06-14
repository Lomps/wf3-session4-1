<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usersModel as User;
use App\themeModel as Theme;
use App\pageModel as Pages;

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

    // affiche la page accueil connecté
    public function index(){            
        return view('home');
    }

    // affiche les theme
    public function affichetheme(){
        $theme = Theme::get();
        return view('affichetheme', ['themes' => $theme]);
    }

    //affiche la vue du theme
    public function affichevue($id){
        $theme = Theme::where('id_theme', $id)->get();
        $page = Pages::where('theme_id_theme', $id)->get();
        return view('affichevue', ['page'=> $page, 'themes' => $theme]);
    }
}
