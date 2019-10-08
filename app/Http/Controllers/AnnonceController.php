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
	    $annonce=Annonce::create($request->except(['_token','img_principale','autre_image']));
       //after save of new client is ok redirect to Clients index with msg success and the registered object
		return redirect()->route('boutique')->with('success','L\'annonce bien ajoutée, en attente d\'être approuvée par l\'administrateur');
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
	
	
	
}	



