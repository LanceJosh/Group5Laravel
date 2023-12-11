<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Employer
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
{
   if ($request->user() && $request->user()->role != 'employer') {
       return redirect('jobs');
   }

   return $next($request);
}

}