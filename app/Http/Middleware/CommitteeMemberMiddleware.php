<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CommitteeMemberMiddleware
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
        if ($request->user() && $request->user()->userRole != '3')
        {
           return new Response(view('unauthorized')->with('role', 'CommitteeMember'));
        }
        return $next($request);
    }
}
