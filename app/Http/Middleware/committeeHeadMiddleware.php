<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class committeeHeadMiddleware
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
        if ($request->user() && $request->user()->userRole != '2')
        {
            return new Response(view('unauthorized')->with('role', 'committeeHead'));
        }
        return $next($request);
    }
        
    
}
