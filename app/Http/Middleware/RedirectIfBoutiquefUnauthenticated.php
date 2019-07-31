<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfBoutiquefUnauthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
   
/*
            if ($guard == "boutique" && Auth::guard($guard)->check()) {
                return redirect('/boutique');
				
            }else  return redirect()->route( 'boutique.login' ); 

    return $next( $request );*/
  }
}
