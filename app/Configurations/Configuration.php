<?php

namespace App\Configurations;

use App\Models\SystemConfiguration;

class Configuration
{
    /**
     * Display the login view.
     *
     * @return bool
     */
    public static function installed($key): bool
    {
        $key = SystemConfiguration::where('key', $key)->first();
        if ($key == null) {
            return false;
        } else {
            return true;
        }
    }
}
