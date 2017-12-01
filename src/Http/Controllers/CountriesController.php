<?php

namespace Blit\StatesAndCities\Http\Controllers;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller {

    public function index()
    {
        $data = Country::all();
        return view('StatesAndCities::countries.index',['data'=>$data]);
    }

    public function create()
    {
        return view('StatesAndCities::countries.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Country::create($input);

        return redirect(route('countries.index'));
    }

    public function edit($id)
    {
        $country = Country::find($id);

        return view('StatesAndCities::countries.edit',['country'=>$country]);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $country = Country::find($id);

        $country->update($input);

        return redirect(route('countries.index'));
    }

    public function destroy($id)
    {
        Country::destroy($id);
        return redirect(route('countries.index'));
    }

}