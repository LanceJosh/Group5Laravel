<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Applicant
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
   if ($request->user() && $request->user()->role != 'applicant') {
       return redirect('applicant/jobs');
   }

   return $next($request);
}

}