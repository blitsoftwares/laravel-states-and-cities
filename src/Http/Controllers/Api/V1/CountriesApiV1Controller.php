<?php

namespace Blit\StatesAndCities\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\Country;
use Illuminate\Http\Request;

class CountriesApiV1Controller extends Controller {

    public function index()
    {
        return Country::all();
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function store(Request $request)
    {
        return Country::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        $country->update($request->all());
        return $country;
    }

    public function destroy($id)
    {
        return Country::destroy($id);
    }

}