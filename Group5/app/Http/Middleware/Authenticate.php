<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as BaseAuthenticate;

class Authenticate extends BaseAuthenticate
{
   /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\Request $request
    * @param \Closure $next
    * @param string[] ...$guards
    * @return mixed
    */
    public function handle($request, Closure $next, ...$guards)
{
  if (Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('employer') || Auth::user()->hasRole('applicant'))) {
      return $next($request);
  }

  return redirect('login');
}

    
}
