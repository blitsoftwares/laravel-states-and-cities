<?php

namespace Blit\StatesAndCities\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\Country;
use Blit\StatesAndCities\Models\State;
use Illuminate\Http\Request;

class StatesApiV1Controller extends Controller
{
    public function index(Country $country = null)
    {
        if($country) {
            $data = State::byCountry($country->id)->get();
        } else {
            $data = State::all();
        }
        return $data;
    }

    public function show(State $state)
    {
        return $state;
    }

    public function store(Request $request)
    {
        return State::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $state = State::find($id);
        $state->update($request->all());
        return $state;
    }

    public function destroy($id)
    {
        return State::destroy($id);
    }
}