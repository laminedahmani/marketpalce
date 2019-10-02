<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Membre;
use App\State;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\MembreRequest;
class MembreRegisterController extends Controller
{
	   use RegistersUsers;
	
   	
 /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/membre';


	
	
	    /**
     * Create a new controller instance.
     *
     * @return void
     */

  public function __construct()
    {
       
		$this->middleware('guest:membre');
           
    }

	   public function showRegistrationForm() {
			// get array of all state code, name of state
			$states = State::all(['code', 'nom'])->pluck('nom', 'code');
			return view( 'inscriptionB',['states'=>$states] );
			  
        }
	
 /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


  
  protected function register(MembreRequest $data)
    {
			//check if is Avatar img exist
		$custom_file_name ="";
		/*if ($request->hasFile('image')) {
			$file = $request->file('image');
			$custom_file_name = time().'-'.$request->file('image')->getClientOriginalName(); // customer the name of img uploded 
			$file->move('avatar_membre/', $custom_file_name);  // save img ine the folder Public/Avatars
			
		}*/	
	    $membre=Membre::create([
            'nom' => $data['nom'],
            'email' => $data['email'],
			'prenom' => $data['prenom'],
			'tel' => $data['tel'],
			'state_id' => $data['state_id'],
			'address' => $data['address'],
			'nbr_annonce_autorise' => 5,
            'password' => Hash::make($data['password']),
        ]);
		
	  
		$this->guard()->login($membre);
		return redirect()->intended( 'membre' ); 
    }
	/**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('membre');
    }
}
