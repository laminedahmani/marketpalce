<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;
use App\Categorie;
use App\SubCategorie;
use App\Http\Requests;

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
    public function show()
    {
    $states = State::all(['code', 'nom'])->pluck('nom', 'code');
    $categories = Categorie::all(['id', 'name']);

    //$subcategories = SubCategorie::all(['id','Categorie_id', 'name']);
    
			return view( 'product/addproduct',['categories'=>$categories ,'states'=>$states ]);
			     
    }

    public function getSubcatList(Request $request)
    {
    
            
            $subcategories =SubCategorie::where('categorie_id','=',$request->cat_id)->get();
        return response()->json($subcategories);

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
}	



