<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Boutique;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Requests\BoutiqueRequest;
class BoutiqueRegisterController extends Controller
{
	   use RegistersUsers;
	
    
		
		


 /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/boutique';


	
	
	    /**
     * Create a new controller instance.
     *
     * @return void
     */

  public function __construct()
    {
       
		$this->middleware('guest:boutique');
           
    }

	   public function showRegistrationForm() {
         return view( 'auth.boutique.register' );
        }
	
 /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


  protected function register(BoutiqueRequest $data)
    {
		//check if is Avatar img exist
		$custom_file_name ="";
		if ($data->hasFile('logo')) {
			$file = $data->file('logo');
			$custom_file_name = time().'-'.$data->file('logo')->getClientOriginalName(); // customer the name of img uploded 
			$file->move('avatar_boutique/', $custom_file_name);  // save img ine the folder Public/Avatars
		   }
	
       $boutique=Boutique::create([
             'nom' => $data['nom'],
            'email' => $data['email'],
			'prenom' => $data['prenom'],
			'tel' => $data['tel'],
			'state_id' => $data['state_id'],
			'address' => $data['address'],
			'nbr_annonce_autorise' => 5,
			'secteur_activite' => $data['secteur_activite'],
			'pack' => $data['pack'],
			'nom_magasin' => $data['nom_magasin'],
			'type_magasin' => $data['type_magasin'],
			'presentation' => $data['presentation'],		
			'url_photo' => $custom_file_name,	
            'password' => Hash::make($data['password']),
        ]);
		
		$this->guard()->login($boutique);
		return redirect()->intended( 'boutique' ); 
    }
	/**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('boutique');
    }
}
