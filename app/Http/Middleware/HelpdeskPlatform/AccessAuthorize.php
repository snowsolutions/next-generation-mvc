<?php

namespace App\Http\Middleware\HelpdeskPlatform;

class AccessAuthorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        /**
         * Logic to check if vendor account can access to this platform
         */
        return $next($request);
    }
}
