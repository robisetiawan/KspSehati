<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class roles_bm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            abort(403);
        }

        if (auth()->user()->roles !== 'BM') {
            abort(403);
        }

        return $next($request);
    }
}