<?php

namespace Blit\StatesAndCities\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\City;
use Blit\StatesAndCities\Models\Country;
use Blit\StatesAndCities\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CitiesApiV1Controller extends Controller
{
    public function index($state = null)
    {
        $lifeTime = Carbon::now()->addDay(1);
        $data = [];
        if($state) {
            $state = State::code($state)->first();
            if($state) {
                $data = Cache::remember('api::cities_'.$state->ibge, $lifeTime, function () use ($state) {
                    return City::byState($state->id)->get();
                });
            }
        } else {
            $data = Cache::remember('api::cities',$lifeTime,function (){
                return City::all();
            });
        }

        return $data;
    }

    public function show($code)
    {
        $city = City::find($code);
        if(!$city)
        {
            $city = City::byCode($code)->first();
        }
        return $city;
    }

    public function store(Request $request)
    {
        Cache::forget('api::cities');
        return City::create($request->all());
    }

    public function update(Request $request, $id)
    {
        Cache::forget('api::cities');
        $city = City::find($id);
        $city->update( $request->all());
        return $city;
    }

    public function destroy($id)
    {
        Cache::forget('api::cities');
        return City::destroy($id);
    }
}