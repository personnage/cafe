<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @param  string                    $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        return $next($request);
    }
}
