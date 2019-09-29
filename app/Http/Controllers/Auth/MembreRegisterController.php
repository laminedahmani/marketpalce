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
		 /*$this->validate( $data, [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:membres',
			'password' => 'required|string|min:6|confirmed',
		]);*/
	 
			//check if is Avatar img exist
		$custom_file_name ="";
		/*if ($request->hasFile('image')) {
			$file = $request->file('image');
			$custom_file_name = time().'-'.$request->file('image')->getClientOriginalName(); // customer the name of img uploded 
			$file->move('avatar_membre/', $custom_file_name);  // save img ine the folder Public/Avatars
			
		}*/	
	   $membre=Membre::create($request->except('_method','_token','image')+ ['image' => $custom_file_name]);	
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
