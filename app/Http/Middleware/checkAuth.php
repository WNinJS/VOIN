<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class checkAuth 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if (!$request->session()->has('user')) {

            return redirect('/login')->with('roleError','To access that page you need to be logged in');     
       } else{
          if($request->session()->get('user')->role !=='admin'){
			return redirect('/');     
          }
       }
        return $next($request);
    }
}
