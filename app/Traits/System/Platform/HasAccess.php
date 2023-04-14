<?php

namespace App\Traits\System\Platform;

trait HasAccess
{
    public function canAccessPlatform($platformCode)
    {
        /**
         * Logic to determine if a user can access to a platform
         */
        return true;
    }
}
