@extends('layouts.app')

@section('content')
    <a href="{{ route('cities.index') }}"><button class="btn btn-default">{{ trans('StatesAndCities::cities.route-back') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::cities.cities') }}</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('cities.update',$city->id) }}">

                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="country_id" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.country') }}*</label>
                    <div class="col-md-2">
                        <select name="country_id" id="country"  class="form-control" data-default="{{ $city->state->country->id }}" required></select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="state_id" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.state') }}*</label>
                    <div class="col-md-2">
                        <select name="state_id"  id="state" data-default="{{ $city->state->id }}"  class="form-control state" required></select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city_id" class="col-md-4 control-label">{{ trans('StatesAndCities::addresses.fields.city') }}*</label>
                    <div class="col-md-2">
                        <select name="city_id"  id="city" data-default="{{ $city->state->id }}"  class="form-control state" required></select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.code') }}*</label>
                    <div class="col-md-2">
                        <input id="code" name="code" type="text" class="form-control"  value="{{ $city->code }}" maxlength="2" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.name') }}*</label>
                    <div class="col-md-2">
                        <input id="name" name="name" type="text" class="form-control"  value="{{ $city->name }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('StatesAndCities::cities.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
