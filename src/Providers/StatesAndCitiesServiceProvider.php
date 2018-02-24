<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 01/12/17
 * Time: 07:40
 */

namespace Blit\StatesAndCities\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class StatesAndCitiesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /*
         *  VARS
         */
        $langDir        = __DIR__ . '/../Lang';
        $routeDir       = __DIR__ . '/../Routes/web.php';
        $routeApiDir    = __DIR__ . '/../Routes/api.php';
        $configDir      = __DIR__ . '/../Config/states-and-cities.php';
        $migrationsDir  = __DIR__ . '/../Migrations';
        $viewsDir       = __DIR__ . '/../Views';
        $publicDir      = __DIR__ . '/../assets';

        /*
         *  ROUTES WEB
         */
        Route::namespace("Blit\\StatesAndCities\\Http\\Controllers")
        ->middleware(config('states-and-cities.route_middleware'))
        ->group($routeDir);

        /*
         *  ROUTES API
         */
        Route::namespace("Blit\\StatesAndCities\\Http\\Controllers\Api\V1")
            ->middleware(config('states-and-cities.route_middleware_api'))
            ->group($routeApiDir);

        /*
         * LOAD RESOURCES
         */
        $this->loadMigrationsFrom($migrationsDir);
        $this->loadTranslationsFrom($langDir,'StatesAndCities');
        $this->loadViewsFrom($viewsDir,'StatesAndCities');

        /*
         * PUBLISHER DATA
         */
        $this->publishes([$langDir => resource_path('lang/vendor/StatesAndCities')],'laravel-states-and-cities-lang');
        $this->publishes([$viewsDir => resource_path('views/vendor/StatesAndCities')],'laravel-states-and-cities-views');
        $this->publishes([$publicDir => public_path('vendor/StatesAndCities')],'laravel-states-and-cities-assets');
        $this->publishes([$configDir => config_path('states-and-cities.php')],'laravel-states-and-cities-config');

    }

    public function register()
    {
        /*
         *  MERGE CONFIG
         */
        $this->mergeConfigFrom(__DIR__ . '/../Config/states-and-cities.php','states-and-cities');
    }
}