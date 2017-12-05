<?php

namespace Blit\StatesAndCities\Http\Controllers;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function index()
    {
        $data = Address::paginate(100);
        return view('StatesAndCities::addresses.index',['data'=>$data]);
    }

    public function create()
    {
        return view('StatesAndCities::addresses.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Address::create($input);

        return redirect(route('addresses.index'));
    }

    public function edit($id)
    {
        $city      = Address::find($id);

        return view('StatesAndCities::addresses.edit',['city'=>$city]);
    }

    public function update(Request $request, $id)
    {
        $input   = $request->all();
        $country = Address::find($id);
        $country->update($input);

        return redirect(route('addresses.index'));
    }

    public function destroy($id)
    {
        Address::destroy($id);
        return redirect(route('addresses.index'));
    }
}