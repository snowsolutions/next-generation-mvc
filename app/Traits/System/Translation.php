<?php

namespace App\Traits\System;

trait Translation
{
    use Locale;

    public function __($key = '')
    {
        /**
         * Logic to retrieve the $translated value text
         */
        $translated = '';

        return $translated;
    }
}
