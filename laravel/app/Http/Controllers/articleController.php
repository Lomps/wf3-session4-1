<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articleModel as Articles;

class articleController extends Controller
{
   
     public function articles(){ 
		$articles = Articles::get();       	
		return view('articles', ['articles' => $articles]);

	}

    public function ajoutarticle(Request $donnees) {
		$validateData = $donnees->validate([
			'titre' => 'required|max:255',
			'contenu' => 'required',
			'nom_image' => 'dimensions:max_width=300,max_height=300'

		]);

		if ($donnees->hasFile('logo')) {
				$logoPath = time().'.'.$donnees->logo->getClientOriginalExtension();
				$donnees->logo->move(public_path('/assets/img/uploads/'), $logoPath);
			}
			$id = $donnees['id_contenu'];
			$article = new Article();
			$article->titrearticle = $donnees['titre'];
			$article->contenu = $donnees['contenu'];
			$article->zoneidzone = $donnees['zone_id_zone'];
			$article->users_iduser = Auth::User()->iduser;
			$article->nom_image = $logoPath;
			$article->save();
			return redirect()->back()->with('message','Votre article est crée avec succès !');
		}
}
