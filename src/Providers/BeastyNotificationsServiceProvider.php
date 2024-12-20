<?php

namespace Ataaaksoy\LaravelBeastyNotifications\Providers;

use Ataaaksoy\LaravelBeastyNotifications\Facades\Notification;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BeastyNotificationsServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravel-beasty-notifications');
        
        // Publish assets
        $this->publishes([
            __DIR__.'/../../resources/js' => public_path('ataaaksoy/laravel-beasty-notifications/js'),
            __DIR__.'/../../resources/css' => public_path('ataaaksoy/laravel-beasty-notifications/css'),
        ], 'laravel-beasty-notifications-assets');

        $this->app->bind('notification', function($app) {
            return new Notification();
        });
        // Register Blade components
        Blade::componentNamespace('Laravel\\Views\\Components', 'nightshade');
    }

}
