<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Categorie;
use App\Boutique;
class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('boutique.homeboutique');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            
        $boutiques=Boutique::where('id','=',$id)->get();
         $states = State::all(['code', 'nom'])->pluck('nom', 'code');
    $categories = Categorie::all(['id', 'name']);
        return view('boutique/boutiqueinfo',['categories'=>$categories ,'states'=>$states ,'boutiques'=>$boutiques]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}	
/*	
=======
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
    


>>>>>>> 2849f0efbef649f2fd55843089cc122eee408790
}*/
