<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\usersModel as Users;
use App\mairieModel as Mairie;
use App\nbr_utilisateurs_mairieModel as Num;
use App\User as User;

class adminController extends Controller
{
	// Affiche la page admin
	public function accueil(){
		if(Auth::user()->role ==4){
			$mairie = Mairie::count();
			$users = Users::count();
			$activeuser = Users::where('activeuser', 1)->count();
			return view('admin.accueil', ['mairie' => $mairie, 'users' => $users, 'activeuser' => $activeuser]);
		}else{
			return abort('404');
		}
	}

	// Affiche la liste des mairies
	public function listemairie(){ 
		if(Auth::user()->role ==4){
			$listmairie = Mairie::get();
			$listmairie = Mairie::paginate(5);       	
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

	

	// affiche la page administration des mairies
	public function mairieadministration(){
		if(Auth::user()->role ==4){
		$listmairie = Num::get();
		$listmairie = Num::paginate(5);        	
			return view('admin.mairie-administration', ['listemairie' => $listmairie]);
		}else{
			return abort('404');
		}
	}

	// afficge la page modification de la mairie
	public function modificationmairie() {
		if(Auth::user()->role ==4){
			$listmairie = Mairie::get();       	
			return view('admin.modification-mairie', ['listemairie' => $listmairie]);
		}else{
			return abort('404');
		}
	}

	// Affichage de la page des utilisateurs
	public function utilisateurs() {
		if(Auth::user()->role ==4){
			$user = Users::get();
			$user = Users::paginate(5);      	
			return view('admin.utilisateurs', ['users' => $user]);
		}else{
			return abort('404');
		}
	}

	// activation de l'utilisateur
	public function useractive($id) {
		if(Auth::user()->role ==4){
			User::where('id', $id)->update(["activeuser" => 1]);
			return redirect()->back()->with('message', 'L\'utilisateur à été activer !');
		}else{
			return abort('404');
		}
	}
	
	// affiche la page de modification de l'utilisateur
	public function modifuser($id) {
		if(Auth::user()->role ==4){
			$user = User::where('id', $id)->first();
			$affichelistemaire = Mairie::get();
			return view('admin.modifuser', ['user' => $user,'affichelistemaire'=>$affichelistemaire]);
		}else{
			return arbot('404');
		}
	}

	// valide la modification de l'utilistateur
	public function postuser(Request $donnees){
    	if(Auth::User()->role == 4){
			$validatedData = $donnees->validate([
				'name' => 'required|max:255',
				'firstname' => 'required|max:255',
				'email' => 'required|email',
				'role' => 'required',
				'activeuser' => 'required',
				'mairie'=> 'required'
				]);
			User::where('id', $donnees["id"])->update([
				"name"=> $donnees['name'],
				"firstname"=> $donnees['firstname'],
				"email"=> $donnees['email'],
				"role"=> $donnees['role'],
				"activeuser"=> $donnees['activeuser'],
				"mairie_id_mairie"=> $donnees['mairie']
			]);
	    	return redirect()->route('utilisateurs')->with('message', 'Utilisateur modifié !');
    	}else{
    		return abort('404');
    	}
	}

	// supprimer un utilisteur
	public function deleteuser($id){
    	if(Auth::User()->role == 4){
			User::destroy($id);
			return redirect()->back()->with('message', 'Utilisateur supprimé avec succès !');
    	}else{
    		return abort('404');
    	}
	}
	//supprimer une mairie
	public function delmairie($id){
    	if(Auth::user()->role == 4){
			Mairie::destroy($id);
			return redirect()->back()->with('message', 'Mairie supprimé avec succès !');
    	}else{
    		return abort('404');
    	}
	}
	//Modification mairie
	public function modifimairie($id)
	{
		if (Auth::user()->role == 4) {
			$afficheinfomairie = Mairie::where('id_mairie',$id)->first();
			return view('admin.modification-mairie', ['afficheinfomairie'=>$afficheinfomairie]);
		}
	}
	public function validemodif_mairie(Request $donnees){
		if(Auth::User()->role == 4){
			$validatedData = $donnees->validate([
				'id_mairie'=> 'required',
				'mairie' => 'required|max:255',
				'adresse' => 'required|max:255',
				'code_postal' => 'required|max:5',
				'ville' => 'required|max:255',
				'telephone' => 'required|max:14',
				'email_mairie' => 'required|max:255',
				'site' => 'max:255'
				]);
				
			Mairie::where('id_mairie', $donnees["id_mairie"])->update([
				"id_mairie"=>$donnees['id_mairie'],
				"mairie"=> $donnees['mairie'],
				"adresse"=> $donnees['adresse'],
				"code_postal"=> $donnees['code_postal'],
				"ville"=> $donnees['ville'],
				"telephone"=> $donnees['telephone'],
				"email_mairie"=> $donnees['email_mairie'],
				"site"=> $donnees['site']
			]);
	    	return redirect()->back()->with('message', 'Modification terminée avec succé');
    	}else{
    		return abort('404');
    	}
	}

}
