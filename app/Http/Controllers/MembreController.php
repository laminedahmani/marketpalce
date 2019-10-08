<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Membre;
use App\State;
use App\Categorie;
class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	 
    public function index()
    {
		// espace membre 
        return view('membre.homemembre');
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
        $membres=Membre::find($id);

         $states = State::all(['code', 'nom'])->pluck('nom', 'code');
          $value_state = State::find($membres->state_id);
        
    $categories = Categorie::all(['id', 'name']);
        return view('membre/membreinfou',['categories'=>$categories ,'states'=>$states ,'membres'=>$membres,'value_state'=>$value_state]);
    
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
        $membres=Membre::find($id);
        $membres->nom=$request->input('nom');
        $membres->prenom=$request->input('prenom');
        $membres->tel=$request->input('tel');
         if(!empty($request->input('password'))){
        $membres->password=Hash::make($request->input('password'));}
        $membres->state_id=$request->input('state_id');
        $membres->address=$request->input('address');

        $membres->save();
        return redirect('membre');


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
