<?php

namespace App\Http\Middleware;

use Closure;

class StudentMiddleware
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
        
        if ($request->user() && $request->user()->userRole != '4')
        {
            return new Response(view('unauthorized')->with('role', 'Student'));
        }
        return $next($request);
    }
}
