<?php

namespace Blit\StatesAndCities\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\City;
use Blit\StatesAndCities\Models\Country;
use Blit\StatesAndCities\Models\State;
use Illuminate\Http\Request;

class CitiesApiV1Controller extends Controller
{
    public function index(State $state = null)
    {
        if($state) {
            $data = City::byState($state->id)->get();
        } else {
            $data = City::all();
        }
        return $data;
    }

    public function show(City $city)
    {
        return $city;
    }

    public function store(Request $request)
    {
        return City::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->update( $request->all());
        return $city;
    }

    public function destroy($id)
    {
        return City::destroy($id);
    }
}