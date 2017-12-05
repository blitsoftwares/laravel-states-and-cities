@extends('layouts.app')

@section('content')
    <a href="{{ route('addresses.index') }}"><button class="btn btn-default">{{ trans('StatesAndCities::addresses.route-back') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::addresses.addresses') }}</h3>
        </div>
        <div class="panel-body">
            <form class="" method="POST" action="{{ route('addresses.update',$address->id) }}">

                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group col-md-2">
                    <label for="postal_code" class="control-label">{{ trans('StatesAndCities::addresses.fields.postal_code') }}</label>
                    <input id="postal_code" name="postal_code" data-autocomplete="true" data-mask="{{ config('states-and-cities.postal_code_mask') }}" type="text" class="form-control"  value="{{ $address->postal_code }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="street" class="control-label">{{ trans('StatesAndCities::addresses.fields.street') }}</label>
                    <input id="street" name="street"  type="text" class="form-control"  value="{{ $address->street }}">
                </div>

                <div class="form-group col-md-1">
                    <label for="number" class="control-label">{{ trans('StatesAndCities::addresses.fields.number') }}</label>
                    <input id="number" name="number"  type="text" class="form-control"  value="{{$address->number }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="district" class="control-label">{{ trans('StatesAndCities::addresses.fields.district') }}</label>
                    <input id="district" name="district"  type="text" class="form-control"  value="{{ $address->district }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="complement" class="control-label">{{ trans('StatesAndCities::addresses.fields.complement') }}</label>
                    <input id="complement" name="complement"  type="text" class="form-control"  value="{{ $address->complement }}">
                </div>


                <div class="form-group col-md-2">
                    <label for="name" class="control-label">{{ trans('StatesAndCities::addresses.fields.name') }}</label>
                    <input id="name" name="name" type="text" class="form-control"  value="{{ $address->name }}">
                </div>

                <div class="form-group col-md-2">
                    <label for="country_id" class="control-label">{{ trans('StatesAndCities::addresses.fields.country') }}*</label>
                    <select name="country_id" id="country"  class="form-control" data-default="{{ $address->city->state->country->id }}" required></select>
                </div>
                <div class="form-group col-md-2">
                    <label for="state_id" class="control-label">{{ trans('StatesAndCities::addresses.fields.state') }}*</label>
                    <select name="state_id"  id="state" data-default="{{ $address->city->state->id }}"  class="form-control state" required></select>
                </div>
                <div class="form-group col-md-2">
                    <label for="city_id" class="control-label">{{ trans('StatesAndCities::addresses.fields.city') }}*</label>
                    <select name="city_id"  id="city" data-default="{{ $address->city->id }}"  class="form-control state" required></select>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('StatesAndCities::addresses.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
