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
        // Publish assets
        $this->publishes([
            __DIR__.'/../../resources/js' => public_path('vendor/my-package/js'),
            __DIR__.'/../../resources/css' => public_path('vendor/my-package/css'),
        ], 'my-package-assets');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'my-package');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        // Register Blade components
        Blade::component('my-package::components.my-component', 'my-component');
    }

}
