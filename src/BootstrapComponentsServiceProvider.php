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
        $this->loadViewsFrom(__DIR__.'/../resources/views/bs'.config('bootstrap-components.version'), 'bootstrap-components');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/bootstrap-components.php' => config_path('bootstrap-components.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/bootstrap-components'),
            ], 'views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/bootstrap-components.php', 'bootstrap-components');

        $this->app->register(BladeDirectivesServiceProvider::class);
    }
}
