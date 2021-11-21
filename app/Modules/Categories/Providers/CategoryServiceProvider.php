<?php

namespace Modules\Categories\Providers;


use Illuminate\Support\ServiceProvider;



class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'category');
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
              __DIR__.'/../Config/config.php' => config_path('categories.php'),
            ], 'config');
        
        }


        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->loadViewsFrom(__DIR__.'/../Views', 'categories');

    }

}
