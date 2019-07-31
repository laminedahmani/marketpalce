<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfMembrefUnauthenticated
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
            if ($guard == "membre" && Auth::guard($guard)->check()) {
               return redirect('/membre');
				
            }else  return redirect()->route( 'membre.login' ); 

    return $next( $request );*/
  }
}
