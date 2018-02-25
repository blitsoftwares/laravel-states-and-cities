<?php

namespace Blit\StatesAndCities\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Blit\StatesAndCities\Models\Country;
use Blit\StatesAndCities\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StatesApiV1Controller extends Controller
{
    public function index($country = null)
    {
        $lifeTime = Carbon::now()->addDay(1);
        $data = [];
        if($country) {
            $country = Country::code($country)->first();
            if($country) {
                $data = Cache::remember('api::states_'.$country->code_iso2, $lifeTime, function () use ($country) {
                    return State::byCountry($country->id)->get();
                });
            }
        } else {
            $data = Cache::remember('api::states',$lifeTime,function (){
                return State::all();
            });
        }

        return $data;
    }

    public function show($code)
    {
        return State::code($code)->first();
    }

    public function store(Request $request)
    {
        Cache::forget('api::states');
        return State::create($request->all());
    }

    public function update(Request $request, $id)
    {
        Cache::forget('api::states');
        $state = State::find($id);
        $state->update($request->all());
        return $state;
    }

    public function destroy($state)
    {
        Cache::forget('api::states');
        $state = State::find($state);
        return $state->destroy();
    }
}