<?php

namespace App\Providers;

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
    public const HOME = '/';

    /**
     * The path to the "home" route for super administrator domain
	  * this is used by laravel authentication to redirect super admin users after login
	  *
	  * @var string
	  */
    public const SUPER_ADMIN_HOME="/";

	/**
	 * the path to the "home" route for administrateur domain
	 */
    public const ADMIN_HOME = "/";

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
        $this->configureRateLimiting();

        $this->routes(function () {

            // routes pour mes api
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            // routes pour mon domaine administrateurs
            Route::domain(adminUrl())
                ->middleware(["web"])
                ->namespace($this->namespace)
                ->group(base_path("routes/admin/administrateur.php"));
            //route pour le domaines des supers administrateurs
            Route::domain(superAdminUrl())
                ->middleware(["web"])
                ->namespace($this->namespace)
                ->group(base_path("routes/superAdmin/superadministrateur.php"));

            //route pour les utilisateurs courants
            Route::middleware(["web"])
                ->namespace($this->namespace)
                ->group(base_path('routes/web/web.php'));



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
