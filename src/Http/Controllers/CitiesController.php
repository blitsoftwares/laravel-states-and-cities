<?php

namespace Blit\StatesAndCities\Http\Controllers;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\City;
use Blit\StatesAndCities\Models\Country;
use Blit\StatesAndCities\Models\State;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $data = City::paginate(100);
        return view('StatesAndCities::cities.index',['data'=>$data]);
    }

    public function create()
    {
        return view('StatesAndCities::cities.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        City::create($input);

        return redirect(route('cities.index'));
    }

    public function edit($id)
    {
        $city      = City::find($id);

        return view('StatesAndCities::cities.edit',['city'=>$city]);
    }

    public function update(Request $request, $id)
    {
        $input   = $request->all();
        $country = City::find($id);
        $country->update($input);

        return redirect(route('cities.index'));
    }

    public function destroy($id)
    {
        City::destroy($id);
        return redirect(route('cities.index'));
    }
}