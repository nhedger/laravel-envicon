<?php

namespace Hedger\Envicon;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the package.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/envicon.php' => config_path('envicon.php')
            ], 'config');
        }
    }

    /**
     * Register the package
     */
    public function register()
    {
        $this->app->bind('envicon', function () {
            return new Envicon(config('envicon'));
        });
    }
}
