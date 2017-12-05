@extends('layouts.app')

@section('content')
    <a href="{{ route('cities.index') }}"><button class="btn btn-default">{{ trans('StatesAndCities::cities.route-back') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::cities.cities') }}</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('cities.store') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="country_id" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.country') }}*</label>
                    <div class="col-md-2">
                        <select name="country_id" id="country"  class="form-control" data-default="{{ config('states-and-cities.default-country') }}" required></select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="state_id" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.state') }}*</label>
                    <div class="col-md-2">
                        <select name="state_id"  id="state" data-default="{{ config('states-and-cities.default-state') }}"  class="form-control state" required></select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.code') }}*</label>
                    <div class="col-md-2">
                        <input id="code" name="code" type="number" class="form-control"  value="{{ old('code') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.name') }}*</label>
                    <div class="col-md-2">
                        <input id="name" name="name" type="text" class="form-control"  value="{{ old('name') }}" required>
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
