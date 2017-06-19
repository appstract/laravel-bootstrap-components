<?php

namespace Appstract\BootstrapComponents;

use Illuminate\Support\ServiceProvider;
use Appstract\BladeDirectives\BladeDirectivesServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bootstrap');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/bootstrap'),
            ], 'views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(BladeDirectivesServiceProvider::class);
    }
}
