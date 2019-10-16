<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;
use App\Annonce;
use App\Categorie;
use App\SubCategorie;
use App\Http\Requests;
use App\Http\Requests\AnnonceRequest;
use DB;
use App\Photo;
class AnnonceController extends Controller
{
   
public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $states = State::all(['code', 'nom'])->pluck('nom', 'code');
		$categories = Categorie::all(['id', 'name'])->pluck( 'name','id');
		return view( 'product/addproduct',['categories'=>$categories ,'states'=>$states ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnonceRequest $request)
    {
	//check if is img_principale exist
		$custom_file_name ="";
		if ($request->hasFile('img_principale')) {
			$file = $request->file('img_principale');
			$custom_file_name = 'img_principale'.time().'-'.$request->file('img_principale')->getClientOriginalName(); // customer the name of img uploded 
			$file->move('Img_annonces/', $custom_file_name);  // save img ine the folder Public/Avatars
		   }	
		  if(auth()->guard('boutique')->user()){
	          $annonce=Annonce::create($request->except(['_token','img_principale','autre_image'])+ ['img_principale' => $custom_file_name,'boutique_id' => auth()->guard('boutique')->user()->id]);
	      }
		   if(auth()->guard('membre')->user()){
	          $annonce=Annonce::create($request->except(['_token','img_principale','autre_image'])+ ['img_principale' => $custom_file_name,'membre_id' => auth()->guard('membre')->user()->id]);
	      }
		  $cats =Categorie::find($request->categorie_id);
		  $subcats =SubCategorie::find($request->subcategorie_id);
		  $cats->nbr_annonces=	$cats->nbr_annonces+1;
		  $subcats->nbr_annonces=	$subcats->nbr_annonces+1;
		  
		  $cats->save();	
		  $subcats->save();	
		  
		// save all imgs of this products
		 $files = $request->file('autre_images');
		if ($request->hasFile('autre_images')) {
			   foreach ($files as $photo) {
					$custom_file_name2 = 'img_autres'.time().'-'.$photo->getClientOriginalName(); // customer the name of img uploded 
					$photo->move('Img_annonces/', $custom_file_name2);  // save img ine the folder Public/Avatars
					
					Photo::create([
						'url_photo' =>$custom_file_name2,
						'annonce_id' => $annonce->id
					]);
			}
		}
		
		
       //after save of new client is ok redirect to Clients index with msg success and the registered object
	   
	     if(auth()->guard('boutique')->user()){
		   return redirect()->route('boutique')->with('success','L\'annonce bien ajoutée, en attente d\'être approuvée par l\'administrateur');
		 }
		 if(auth()->guard('membre')->user()){
		   return redirect()->route('membre')->with('success','L\'annonce bien ajoutée, en attente d\'être approuvée par l\'administrateur');
		 }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        //
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
	
	 public function getSubcatList(Request $request)
    {
		 $categorie_id= $request->get("categorie_id");
        $subcategories =SubCategorie::where('categorie_id','=',$categorie_id)->get();
        return response()->json($subcategories);
		
    }
	
	 public static function getSubcatLists($id_categorie)
    {
        $subcategories =SubCategorie::where('categorie_id','=',$id_categorie)->get();
        return $subcategories;
		
		
    }
		 public static function categorie($cat)
    {
		$cat=str_replace("-"," ",$cat);
		$retour=$cat;
		
        $cats =Categorie::where('name',$cat)->first();
		$id_cat=$cats->id;
		$id_subcat=0;
    	$annonces=Annonce::where('categorie_id',$cats->id)->paginate(2);
     	return view('store')->with(compact('annonces','retour','id_cat','id_subcat')) ;

	  }
		 public static function subcategorie($cat,$subcat)
    {
		$cat=str_replace("-"," ",$cat);
		$subcat=str_replace("-"," ",$subcat);
		$retour=$subcat;
        $cats =Categorie::where('name',$cat)->first();
		$subcats =SubCategorie::where('name',$subcat)->first();
		$id_subcat=$subcats->id;
		$id_cat=0;
		$annonces=Annonce::where('categorie_id',$cats->id)->where('subcategorie_id',$subcats->id)->paginate(2);
	    return view('store')->with(compact('annonces','retour','id_cat','id_subcat')) ;
	  }
	  
	      public function filtre(Request $request)
    {
		if($request->categorie==0){
		$annonces =Annonce::
			when($request->state_id, function ($query) use ($request) {
				$query->where('state_id', '=', $request->state_id);
			})->
			when($request->subcategorie, function ($query) use ($request) {
				$query->where('subcategorie_id', '=', $request->subcategorie);
			})->
			when($request->type_annonce, function ($query) use ($request) {
				$query->where('type_annonce', '=', $request->type_annonce);
			})	->paginate(2);
		}else{
			$annonces =Annonce::
			when($request->state_id, function ($query) use ($request) {
				$query->where('state_id', '=', $request->state_id);
			})->
			when($request->subcategorie, function ($query) use ($request) {
				$query->where('categorie_id', '=', $request->categorie);
			})->
			when($request->type_annonce, function ($query) use ($request) {
				$query->where('type_annonce', '=', $request->type_annonce);
			})	->paginate(2);
		}
       $id_cat=$request->categorie;
	   $id_subcat=$request->subcategorie;
		 return view('store')->with(compact('annonces','id_cat','id_subcat')) ;
    }
}	



