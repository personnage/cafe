<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class AddProtectedHeaders
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
     * Add the XSS protected header to the given response.
     *
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @return \Illuminate\Http\Response
     */
    protected function addHeaders(Response $response)
    {
        $headers = [
            'X-UA-Compatible' => 'IE=edge',
            'X-Frame-Options' => 'DENY',
            'X-XSS-Protection' => '1; mode=block',
            'X-Content-Type-Options' => 'nosniff',
        ];

        // if ssl
        //   $headers['Strict-Transport-Security'] = 'max-age=31536000';
        // end

        $response->headers->add($headers);

        return $response;
    }
}
