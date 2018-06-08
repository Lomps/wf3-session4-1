<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articleModel as Articles;

class articleController extends Controller
{
    public function article() {
    	return view ('articles');
    }

    public function ajoutarticle(Request $donnees) {
		$validateData = $donnees->validate([
			'titre' => 'required|max:255',
			'contenu' => 'required',
			'image' => 'dimensions:max_width=300,max_height=300',
			'signature'=> 'max:255'

		]);

		if ($donnees->hasFile('logo')) {
				$logoPath = time().'.'.$donnees->logo->getClientOriginalExtension();
				$donnees->logo->move(public_path('/assets/img/uploads/'), $logoPath);
			}

			$article = new Article();
			$article->titrearticle = $donnees['titre'];
			$article->contenu = $donnees['contenu'];
			$article->zone_idzone = $donnees['id_zone'];
			$article->users_iduser = Auth::User()->iduser;
			$article->publication =$donnees['publication_id_publication'];
			$article->nom_image = $logoPath;
			$article->save();
			return redirect()->back()->with('message','Votre article est crée avec succès !');
		}
}
