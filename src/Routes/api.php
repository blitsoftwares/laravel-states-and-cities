<?php
/*
 *  API V1 ROUTES
 */
Route::prefix('api/v1')->group(function (){

    Route::resources([
        'countries'=>'CountriesApiV1Controller',
        'states'=>'StatesApiV1Controller',
        'cities'=>'CitiesApiV1Controller'
    ]);

    Route::get('countries/{country}/states','StatesApiV1Controller@index');
    Route::get('states/{state}/cities','CitiesApiV1Controller@index');

});
