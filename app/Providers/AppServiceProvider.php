<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Model::shouldBeStrict();

        $this->app->bind('settings', function () {
            return Cache::rememberForever('settings', function () {
                return Setting::pluck('value', 'key');
            });
        });
    }
}
