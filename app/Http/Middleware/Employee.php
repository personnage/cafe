<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Employee
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
        $user = Auth::guard($guard)->user();

        // If user is auth and user is admin or user have a role.
        if (! is_null($user) && ($user->admin || $user->roles()->count() > 0)) {
            return $next($request);
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response(null, 404);
        } else {
            return abort(404);
        }
    }
}
