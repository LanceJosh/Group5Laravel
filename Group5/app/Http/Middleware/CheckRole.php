<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
{
   $roles = explode('|', $role);
   if (!Auth::user() || !in_array(Auth::user()->role, $roles)) {

    //return redirect('/dashboard');
       //abort(403, 'Unauthorized action.');
   }
   return $next($request);
}

  
    
}
