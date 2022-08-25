<?php

namespace App\Configurations;

use App\Models\SystemConfiguration;

class UiConfiguration extends Configuration
{
    public static function install()
    {
        if (Configuration::installed('UiConfiguration') == false) {
            SystemConfiguration::create(['key' => 'landing-page-headline', 'value' => 'Beautiful Pages to']);
            SystemConfiguration::create(['key' => 'landing-page-sub_headline', 'value' => 'Tell Your Story!']);
            SystemConfiguration::create(['key' => 'landing-page-tagline', 'value' => "Its never been easier to build beautiful websites that convey your message and tell your story."]);
            SystemConfiguration::create(['key' => 'blog-page-headline', 'value' => 'Beautiful Pages to']);
            SystemConfiguration::create(['key' => 'blog-page-sub_headline', 'value' => 'Tell Your Story!']);
            SystemConfiguration::create(['key' => 'blog-page-tagline', 'value' => "Its never been easier to build beautiful websites that convey your message and tell your story."]);
            SystemConfiguration::create(['key' => 'slogan', 'value' => 'Together we achieve more']);
            SystemConfiguration::create(['key' => 'UiConfiguration', 'value' => 'installed']);
            return true;
        } else {
            return true;
        }
    }
    public static function getConfigValue($key)
    {
        $conf = SystemConfiguration::where('key', $key)->first();
        if ($conf == null) {
            return false;
        } else {
            return $conf->value;
        }
    }
    public static function updateConfig($key, $value)
    {
        $conf = SystemConfiguration::where('key', $key)->first();
        if ($conf == null) {
            return false;
        } else {
            $conf->update(['key' => $value]);
            return true;
        }
    }

    public static function reset()
    {
        $keys = [
            'landing-page-headline',
            'landing-page-sub_headline',
            'landing-page-tagline',
            'blog-page-headline',
            'blog-page-sub_headline',
            'blog-page-tagline',
            'slogan',
            'UiConfiguration'
        ];

        foreach ($keys as $key) {
            $conf = SystemConfiguration::where('key', $key)->first();
            if ($conf) {
                $conf->delete();
            }
        }
        self::install();
        return true;
    }
}
