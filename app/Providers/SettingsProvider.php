<?php

namespace App\Providers;


use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class SettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $setting  = Setting::findOrFail(1);
        View::share('setting',$setting);
    }
}
