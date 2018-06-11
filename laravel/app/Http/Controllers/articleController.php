<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articleModel as Articles;
use App\ajoutarticleModel as Article;

class articleController extends Controller
{
   
     public function articles(){ 
		$articles = Articles::get();       	
		return view('articles', ['articles' => $articles]);

	}

    public function ajoutarticle(Request $donnees) {
		$validateData = $donnees->validate([
			'contenu' => 'required|max:255',
			'type' => 'required',
			'nom_image' => 'dimensions:max_width=300,max_height=300',
			'zone_id_zone' => 'required',
			'publication_id_publication' => 'required',
		]);

		if ($donnees->hasFile('logo')) {
				$logoPath = time().'.'.$donnees->logo->getClientOriginalExtension();
				$donnees->logo->move(public_path('/assets/img/uploads/'), $logoPath);
			}
			$id = $donnees['id_contenu'];
			$article = new Article();
			$article->contenu = $donnees['contenu'];
			$article->type = $donnees['type'];
			$article->nom_image = $logoPath;
			$article->zone_id_zone = $donnees['zone_id_zone'];
			$article->publication_id_publication = $donnees['publication_id_publication'];
			$article->users_iduser = Auth::User()->iduser;
			$article->save();
			return redirect()->back()->with('message','Votre article est crée avec succès !');
		}
}
