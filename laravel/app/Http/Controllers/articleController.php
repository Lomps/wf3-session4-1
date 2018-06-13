<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articleModel as Articles;
use App\ajoutarticleModel as Article;
use App\zoneModel as Zone;
use App\pageModel as Page;

class articleController extends Controller
{
   
     public function articles(){ 
     	$page = Page::paginate(1);
		$articles = Articles::get();
		$zone = Zone::orderBy('id_zone', 'asc')->get();       	
		return view('articles', ['articles' => $articles,'zone'=> $zone]);

	}





// valide l'ajout d'un article

    public function ajoutarticle(Request $donnees) {
		$validateData = $donnees->validate([
			'contenu' => 'required',
			'type' => 'required',			
			'zone_id_zone' => 'required',			
			'publication_id_publication' => 'required',
		]);			  

			$id = $donnees['id_contenu'];
			$article = new Article();						
		switch($donnees['type'])
        {    
           //choix titre    
           case 1:
           $article->contenu = $donnees['contenu'];
          
           break;
           //ckeditor pour inserer un texte
           case 2:
             $article->contenu = $donnees['contenu'];
           break;
           //inserer une image
           case 3:	           
           $article->contenu = $donnees['contenu'];          
             if ($donnees->hasFile('contenu')) {
				$logoPath = time().'.'.$donnees->contenu->getClientOriginalExtension();
				$donnees->contenu->move(public_path('/assets/img/uploads/'), $logoPath);
			}
           break;
                    
        }
     		$article->contenu = $donnees['contenu'];
			$article->type = $donnees['type'];		
			$article->zone_id_zone = $donnees['zone_id_zone'];
			$article->publication_id_publication = $donnees['publication_id_publication'];			
			$article->save();
			return redirect()->back()->with('message','Votre article est crée avec succès !');
		}

}
