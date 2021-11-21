<?php

namespace App\Providers;

use Modules\Users\Models\Role;
use Modules\Users\Models\User;
// use \Modules\Categories\Models\Category;
// use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

        Route::bind('user', function ($value) {
            return User::where('id', $value)->orWhere('name', $value)->first();
        });
        Route::bind('role', function ($value) {
            return Role::where('id', $value)->orWhere('name', $value)->first();
        });
        // Route::bind('category', function ($value) {
        //     return Category::where('id', $value)->orWhere('slug', $value)->first();
        // });

        $this->configureRateLimiting();

        $this->routes(function () {
            
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web/web.php'));

            // Route::middleware('web')
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/web/users.php'));

            // Route::middleware('web')
            // ->namespace($this->namespace)
            // ->group(base_path('routes/web/relationships.php'));
            
            // Route::middleware('web')
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/web/components.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
