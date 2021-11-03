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

        Blade::directive('eachRecursive', function ($collection) { 
            $res = '<?php
                        function recursive($collection) {
                            if ($collection && $collection->count()) {
                                foreach ($collection as $item) {
                                echo "<li>{$item->name}";
                                    echo "<ul>";
                                    if ($item->children->count()) {
                                        recursive($item->children);
                                    }
                                    else {
                                        echo "<li>No chlildren</li>";
                                    }    
                                }
                                echo "</ul>";
                                echo "</li>";
                            }
                            else {
                                echo "<li>No chlildren</li>";
                            }
                        }

                    ?>';

            $res .= "<?php recursive($collection) ?>";

            return $res;

        });
    }
}
