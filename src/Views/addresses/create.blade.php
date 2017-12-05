@extends('layouts.app')

@section('content')
    <a href="{{ route('addresses.index') }}"><button class="btn btn-default">{{ trans('StatesAndCities::addresses.route-back') }}</button></a>
    <hr/>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::addresses.addresses') }}</h3>
        </div>
        <div class="panel-body">
            <form class="form-group" method="POST" action="{{ route('addresses.store') }}">
                {{ csrf_field() }}

                <div class="form-group col-md-2">
                    <label for="name" class="control-label">{{ trans('StatesAndCities::addresses.fields.name') }}*</label>
                    <input id="name" name="name" type="text" class="form-control"  value="{{ old('name') }}" required>
                </div>

                <div class="form-group col-md-2">
                    <label for="postal_code" class="control-label">{{ trans('StatesAndCities::addresses.fields.postal_code') }}*</label>
                    <input id="postal_code" name="postal_code" data-mask="{{ config('states-and-cities.postal_code_mask') }}" type="text" class="form-control"  value="{{ old('postal_code') }}" required>
                </div>

                <div class="form-group col-md-2">
                    <label for="country_id" class="control-label">{{ trans('StatesAndCities::addresses.fields.country') }}*</label>
                    <select name="country_id" id="country"  class="form-control" data-default="{{ config('states-and-cities.default-country') }}" required></select>
                </div>
                <div class="form-group col-md-2">
                    <label for="state_id" class="control-label">{{ trans('StatesAndCities::addresses.fields.state') }}*</label>
                    <select name="state_id"  id="state" data-default="{{ config('states-and-cities.default-state') }}"  class="form-control state" required></select>
                </div>
                <div class="form-group col-md-2">
                    <label for="city_id" class="control-label">{{ trans('StatesAndCities::addresses.fields.city') }}*</label>
                    <select name="city_id"  id="city" data-default="{{ config('states-and-cities.default-city') }}"  class="form-control state" required></select>
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
