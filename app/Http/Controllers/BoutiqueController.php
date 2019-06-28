<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boutique;
class BoutiqueController extends Controller
{
    public function newBoutique(Request $Request){
    	$newBoutique = new Boutique();


    	$newBoutique->email = $Request->input('email');
    	$newBoutique->nom = $Request->input('nom');
    	$newBoutique->type_magasin = $Request->input('type_magasin');
    	$newBoutique->prenom = $Request->input('prenom');
    	$newBoutique->password = $Request->input('pwd');
    	$newBoutique->ville = $Request->input('wilaya');
    	$newBoutique->tel = $Request->input('tel');
    	$newBoutique->address = $Request->input('address');
    	$newBoutique->secteur_activite = $Request->input('categorie');
    	$newBoutique->presentation= $Request->input('description');
    
    	$newBoutique->url_photo= $Request->input('logourl');
    	$newBoutique->nbr_vue = 0;
    	$newBoutique->pack = $Request->input('typepack');
    	$newBoutique->nbr_annonce_autorise = 1;
        
    	$newBoutique->save();

            

    }
   public function allBoutique(){
   		$mesboutique = Boutique::all();

        return view("boutique", ['bouti'=>$mesboutique]);
   }
   public function inscription() {

     return view("inscriptionB");   
    }

    
     public function esitinsc(){


    }
    public function updateinsc(){


    }
    
 public function deletins(){


    }
    


}
