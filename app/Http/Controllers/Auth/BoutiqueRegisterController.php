<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Boutique;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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


  protected function register(Request $data)
    {
		 $this->validate( $data, [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:boutiques',
			'password' => 'required|string|min:6|confirmed',
		]);
	
       $boutique=Boutique::create([
            'nom' => $data['name'],
            'email' =>  $data['email'],
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
