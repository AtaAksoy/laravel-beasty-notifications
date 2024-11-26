<?php

namespace Ataaaksoy\LaravelBeastyNotifications\Providers;

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

        // Register Blade components
        Blade::component('notification-container', \Ataaaksoy\LaravelBeastyNotifications\Components\NotificationContainer::class);
    }

}
