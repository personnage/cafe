<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class AddNoCacheHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $this->addHeaders($response);
    }

    /**
     * Add the disable cache header to the given response.
     *
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @return \Illuminate\Http\Response
     */
    protected function addHeaders(Response $response)
    {
        $headers = [
            'Pragma' => 'no-cache',
            'Expires' => 'Fri, 01 Jan 1990 00:00:00 GMT',
            'Cache-Control' => 'no-cache, no-store, max-age=0, must-revalidate',
        ];

        $response->headers->add($headers);

        return $response;
    }
}
