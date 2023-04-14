<?php

namespace App\Http\Middleware\CommercePlatform;

use App\Traits\System\Platform\HasAccess;

class AccessAuthorize
{
    use HasAccess;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        /**
         * Check if vendor account can access to this platform
         */
        if (! $this->canAccessPlatform($request->get('platform'))) {
            /**
             * Handle when user does not have access to platform
             */
        }

        return $next($request);
    }
}
