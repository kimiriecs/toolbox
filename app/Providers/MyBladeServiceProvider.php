<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MyBladeServiceProvider extends ServiceProvider
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
        Blade::directive('routeIs', function ($routeName) { 
        
            $res = "<?php if (Route::is($routeName)) { ?>";

            return $res;
            
        });

        Blade::directive('endRouteIs', function () { 
        
            $res = "<?php } ?>";

            return $res;

        });
    }
}
