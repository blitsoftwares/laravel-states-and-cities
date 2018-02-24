<?php
/*
 *  API V1 ROUTES
 */
Route::prefix('api/v1')->group(function (){
    Route::resource('countries','CountriesApiV1Controller');
    Route::get('countries/{country}/states','StatesApiV1Controller@index');

    Route::resource('states','StatesApiV1Controller');
    Route::get('states/{state}/cities','CitiesApiV1Controller@index');

    Route::resource('cities','CitiesApiV1Controller');
});
