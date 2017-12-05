<?php

Route::resource('countries','CountriesController');
Route::get('countries-list','CountriesController@getList');

Route::resource('states','StatesController');
Route::get('states-list/{country_id}','StatesController@getList');

Route::resource('cities','CitiesController');
Route::get('cities-list/{state_id}','CitiesController@getList');

Route::resource('addresses','AddressesController');
