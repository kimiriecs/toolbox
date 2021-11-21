<?php

namespace Modules\KanbanBoard\Providers;

use Illuminate\Support\ServiceProvider;




class KanbanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'kanban');
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
              __DIR__.'/../Config/config.php' => config_path('kanban.php'),
            ], 'config');
        
        }


        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->loadViewsFrom(__DIR__.'/../Views', 'kanban-board');

    }

}
