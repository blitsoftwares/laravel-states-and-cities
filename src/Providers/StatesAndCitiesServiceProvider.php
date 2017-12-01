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
        $langDir        = __DIR__ . '/../Lang';
        $routeDir       = __DIR__ . '/../Routes/web.php';
        $configDir      = __DIR__ . '/../Config/states-and-cities.php';
        $migrationsDir  = __DIR__ . '/../Migrations';
        $viewsDir       = __DIR__ . '/../Views';

        Route::namespace("Blit\\StatesAndCities\\Http\\Controllers")
        ->middleware(['web'])
        ->group($routeDir);

        $this->loadMigrationsFrom($migrationsDir);
        $this->loadTranslationsFrom($langDir,'StatesAndCities');
        $this->loadViewsFrom($viewsDir,'StatesAndCities');

        $this->publishes([$langDir => resource_path('lang/vendor/StatesAndCities')],'laravel-states-and-cities-lang');
        $this->publishes([$viewsDir => resource_path('views/vendor/StatesAndCities')],'laravel-states-and-cities-views');
        $this->publishes([$configDir => config_path('states-and-cities.php')],'laravel-states-and-cities-config');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/states-and-cities.php','states-and-cities');
    }
}