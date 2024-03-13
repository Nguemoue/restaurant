<?php

namespace App\Providers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
			\Illuminate\Support\Facades\View::share("devise",config("misc.devise"));
			Paginator::useBootstrap();
    }
}
