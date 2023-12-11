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
    public function handle(Request $request, Closure $next, $role)
    {
        if (! Auth::user() || ! Auth::user()->hasRole($role)) {
            if ($role == 'applicant') {
                return redirect('/alljobs');
            } else if($role == 'employer'){
                return redirect('/applicants');
            }else{
                return redirect('/dashboard');
            }
        }

        return $next($request);
    }
    
}
