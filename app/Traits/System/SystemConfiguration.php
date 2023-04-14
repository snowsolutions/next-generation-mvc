<?php

namespace App\Traits\System;

trait SystemConfiguration
{
    public function getConfig($path = '', $useEloquent = true)
    {
        /**
         * Logic to retrieve the configuration value from database
         */
        if ($useEloquent) {
            $value = 'value_when_use_eloquent';
        } else {
            $value = 'value_when_use_db_helper';
        }

        return $value;
    }
}
