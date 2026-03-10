<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            $settings = \App\Models\SiteSetting::all()->pluck('value', 'key')->toArray();
            view()->share('siteSettings', $settings);
        } catch (\Exception $e) {
            view()->share('siteSettings', []);
        }
    }
}
