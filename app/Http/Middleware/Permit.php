<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Permit
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach ($roles as $role)
        {
            if (auth()->user()->hasRole($role))
                return $next($request);
        }

        return back()->with('error', 'You are authorized to perform this action');
    }
}
