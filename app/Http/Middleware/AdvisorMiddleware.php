<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class AdvisorMiddleware
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
        if ($request->user() && $request->user()->userRole != '5')
        {
            return new Response(view('unauthorized')->with('role', 'Advisor'));
        }
       
        return $next($request);
    }
}
