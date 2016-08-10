<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @param  string|null               $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest() || ! Auth::guard($guard)->user()->admin) {
            if ($request->ajax() || $request->wantsJson()) {
                return response(null, 404);
            } else {
                return abort(404);
            }
        }

        return $next($request);
    }
}
