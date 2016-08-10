<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class StaffRoom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->accessDenied($guard)) {
            if ($request->ajax() || $request->wantsJson()) {
                return response(null, 404);
            } else {
                abort(404);
            }
        }

        return $next($request);
    }

    /**
     * Determine if the user's has access.
     *
     * @param  string|null  $guard
     * @return bool
     */
    protected function accessDenied($guard)
    {
        return Auth::guard($guard)->guest() || ! Auth::guard($guard)->user()->admin || ! 'has not role for access to admin';
    }
}
