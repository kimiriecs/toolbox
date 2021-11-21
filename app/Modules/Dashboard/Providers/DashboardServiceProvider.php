<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;




class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'dashboard');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {

            $this->publishes([
              __DIR__.'/../Config/config.php' => config_path('dashboard.php'),
            ], 'config');
        
        }


        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->loadViewsFrom(__DIR__.'/../Views', 'dashboard');

    }

}
