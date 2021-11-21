<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class DashboardRouteServiceProvider extends ServiceProvider
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

        // Route::bind('dashboard', function ($value) {
        //     return User::where('id', $value)->orWhere('slug', $value)->first();
        // });

        // Route::group(['prefix' => 'admin','middleware' => 'web',], function() {
        //     $this->loadRoutesFrom(__DIR__.'/../Routes/admin.php');
        // });

        $this->registerRoutes();

    }


    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Routes/dashboard.php');
        });

        // Route::bind('dashboard', function ($value) {
        //     return Dashboard::where('id', $value)->orWhere('slug', $value)->first();
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
