<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class AuthMembreLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
       
		$this->middleware('guest:membre')->except('logout');
           
    }
	 /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
	     public function showLoginForm() {
         return view( 'auth.membre.login', ['url' => 'membre'] );
        }
		
 public function membreLogin( Request $request ) {
    $this->validate( $request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if( Auth::guard( 'membre' )->attempt( [
      'email' => $request->input( 'email' ),
      'password' => $request->input( 'password' ),
    ])) {
     
	   return redirect()->intended( 'membre' ); 
    } else {
      return view( 'auth.membre.login' )->withErrors( [ 'email' => 'Authentication failed' ] );
    }
  }
     /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('index');
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
