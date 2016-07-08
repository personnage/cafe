<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class Impersonator
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
        $user = $this->impersonator($request);

        if (! is_null($user) && $user->admin) {
            return $next($request);
        }

        abort(404);
    }

    /**
     * Get impersonator user.
     *
     * @param  Illuminate\Http\Request  $request
     * @return User|null
     */
    protected function impersonator($request)
    {
        if ($request->session()->has('impersonator_id')) {
            return User::findOrFail($request->session()->get('impersonator_id'));
        }
    }
}
