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

       if ($request->session()->has('login') != 1) {
            return redirect('/login')->with('roleError','To access that page you need to be logged in');     
       } else{
           echo ($request->session()->get('login'));
       }
        return $next($request);
    }
}
