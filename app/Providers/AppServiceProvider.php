<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings')) {
            $setting = DB::table('settings')->first();
            View::share('setting', $setting);
        }

        if (Schema::hasTable('services')) {
            $services = DB::table('services')
                ->where('status', 1)
                ->orderBy('order', 'ASC')
                ->get();;

            View::share('services', $services);
        }

        if (Schema::hasTable('tech_logos')) {
            $techLogos = DB::table('tech_logos')
                ->select('logo')
                ->orderBy('order', 'ASC')
                ->where('status', 1)
                ->get();
            View::share('techLogos', $techLogos);
        }

        view()->composer('*', function ($view) {
            $routeName = Route::currentRouteName();
            $view->with('routeName', $routeName);

            $controllerName = explode('@', str_replace('App\\Http\\Controllers\\Admin\\', '', Route::currentRouteAction()))[0];
            $view->with('controllerName', $controllerName);
        });
    }
}
