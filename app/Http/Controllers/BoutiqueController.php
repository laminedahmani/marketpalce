<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
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
     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $boutiques=Boutique::find($id);
        $value_state = State::find($boutiques->state_id);
        $value_cat= Categorie::find($boutiques->secteur_activite);

        $states = State::all(['code', 'nom'])->pluck('nom', 'code');
        $categories = Categorie::all(['id', 'name'])->pluck('name', 'id');;
        return view('boutique/boutiqueinfo',['categories'=>$categories ,'states'=>$states ,'boutiques'=>$boutiques,'value_state'=>$value_state , 'value_cat'=>$value_cat->id]);
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

       $boutique=Boutique::find($id);
        $boutique->nom=$request->input('nom');
        $boutique->prenom=$request->input('prenom');
        $boutique->tel=$request->input('tel');
        if(!empty($request->input('password'))){
        $boutique->password=Hash::make($request->input('password'));}
        $boutique->state_id=$request->input('state_id');
        $boutique->nom_magasin=$request->input('nom_magasin');
        $boutique->type_magasin=$request->input('type_magasin');
        $boutique->secteur_activite=$request->input('secteur_activite');
        $boutique->presentation=$request->input('presentation');
        if(!empty($request->input('logo'))){
        $boutique->url_photo=$request->input('logo');}
        if($boutique->pack!==$request->input('pack')){
         $boutique->pack=$request->input('pack');
        $boutique->Activated=0;
        }

                                
        $boutique->save();
        return redirect('boutique');
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
