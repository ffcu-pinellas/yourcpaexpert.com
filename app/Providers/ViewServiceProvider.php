<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['layouts.app', 'admin.layout'], function ($view) {
            try {
                $settings = SiteSetting::all()->pluck('value', 'key');
            } catch (\Exception $e) {
                $settings = collect();
            }
            $view->with('siteSettings', $settings);
        });
    }
}
