<?php

namespace Modules\KanbanBoard\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class KanbanRouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        // Route::bind('category', function ($value) {
        //     return Category::where('id', $value)->orWhere('slug', $value)->first();
        // });

        // Route::group(['prefix' => 'admin','middleware' => 'web',], function() {
        //     $this->loadRoutesFrom(__DIR__.'/../Routes/admin.php');
        // });

        $this->registerRoutes();

    }


    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Routes/kanban.php');
        });

        // Route::bind('category', function ($value) {
        //     return Category::where('id', $value)->orWhere('slug', $value)->first();
        // });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => 'admin',
            'middleware' => 'web',
        ];
    }
}
