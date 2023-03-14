<?php

namespace Budgetlens\LaravelBolRetailerApi;

use Budgetlens\BolRetailerApi\Client;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('bol.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'bol');

        // Register the main class to use with the facade
        $this->app->singleton('Bol', function () {
            return new WrapperClient(new ApiConfig());
        });
    }
}
