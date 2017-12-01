<?php

namespace Blit\StatesAndCities\Http\Controllers;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\Country;
use Blit\StatesAndCities\Models\State;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function index()
    {
        $data = State::all();
        return view('StatesAndCities::states.index',['data'=>$data]);
    }

    public function create()
    {
        $countries = Country::all();
        return view('StatesAndCities::states.create',['countries'=>$countries]);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        State::create($input);

        return redirect(route('states.index'));
    }

    public function edit($id)
    {
        $state = State::find($id);
        $countries = Country::all();

        return view('StatesAndCities::states.edit',['state'=>$state,'countries'=>$countries]);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $country = State::find($id);

        $country->update($input);

        return redirect(route('states.index'));
    }

    public function destroy($id)
    {
        State::destroy($id);
        return redirect(route('states.index'));
    }
}