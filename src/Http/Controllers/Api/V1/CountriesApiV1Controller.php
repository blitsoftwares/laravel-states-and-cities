<?php

namespace Blit\StatesAndCities\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountriesApiV1Controller extends Controller {

    public function index()
    {
        $lifeTime = Carbon::now()->addDays(1);
        $data = Cache::remember('api::countries',$lifeTime,function (){
            return Country::all();
        });
        return $data;
    }

    public function show($code)
    {
        $coutnry = Country::code($code)->first();
        return $coutnry;
    }

    public function store(Request $request)
    {
        Cache::forget('api::countries');
        return Country::create($request->all());
    }

    public function update(Request $request, $id)
    {
        Cache::forget('api::countries');
        $country = Country::find($id);
        $country->update($request->all());
        return $country;
    }

    public function destroy($id)
    {
        Cache::forget('api::countries');
        return Country::destroy($id);
    }

}