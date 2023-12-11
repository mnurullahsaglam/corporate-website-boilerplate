<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait Cacheable
{
    protected static function bootCacheable(): void
    {
        static::creating(function () {
            Cache::forget('settings');
        });

        static::updating(function () {
            Cache::forget('settings');
        });
    }
}
