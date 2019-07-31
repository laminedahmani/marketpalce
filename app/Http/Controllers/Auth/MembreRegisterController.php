<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Membre;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
         return view( 'auth.membre.register' );
        }
	
 /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


  protected function register(Request $data)
    {
		 $this->validate( $data, [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:membres',
			'password' => 'required|string|min:6|confirmed',
		]);
	
       $membre=Membre::create([
            'nom' => $data['name'],
            'email' =>  $data['email'],
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
