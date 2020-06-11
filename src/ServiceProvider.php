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
            ], ['envicon-config']);

            $this->publishes([
                __DIR__ . '/../resources/favicons/' => public_path('favicons')
            ], ['envicon-favicons']);
        }
    }

    /**
     * Register the package
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/envicon.php',
            'envicon'
        );

        $this->app->bind('envicon', function () {
            return new Envicon(config('envicon'));
        });
    }
}
