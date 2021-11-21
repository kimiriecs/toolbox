<?php

namespace Modules\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Users\Repositories\UserRepository;
use Modules\Users\Repositories\UserRepositoryInterface;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'users');


        $this->app->bind(
            UserRepositoryInterface::class, 
            UserRepository::class
        );

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
              __DIR__.'/../Config/config.php' => config_path('users.php'),
            ], 'config');
        
        }


        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->loadViewsFrom(__DIR__.'/../Views', 'users');

    }

}
