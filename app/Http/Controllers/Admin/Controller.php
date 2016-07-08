<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Base middleware admin controller.
     *
     * @var array
     */
    protected $middleware = ['employee' => []];

    /**
     * Remove middleware on the controller.
     *
     * @param  array|string  $middleware
     * @return void
     */
    protected function skipMiddleware($middleware)
    {
        foreach ((array) $middleware as $middlewareName) {
            unset($this->middleware[$middlewareName]);
        }
    }
}
