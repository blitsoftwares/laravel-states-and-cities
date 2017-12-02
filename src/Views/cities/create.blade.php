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
                        <select name="country_id" id="country_id"  class="form-control country" required>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->code_iso2 }} - {{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="state_id" class="col-md-4 control-label">{{ trans('StatesAndCities::cities.fields.state') }}*</label>
                    <div class="col-md-2">
                        <select name="state_id" default="5" id="state_id"  class="form-control state" required>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->code }} - {{ $state->name }}</option>
                            @endforeach
                        </select>
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
    <script>
        $(document).ready(function(){

            var country_default = parseInt('{{ config('states-and-cities.default-country') }}');
            if(country_default) {
                $('.country').val(country_default);
            }

            $('.country').on('change',function(){

            });

            var state_default = parseInt('{{ config('states-and-cities.default-state') }}');
            if(state_default) {
                $('.state').val(state_default);
            }

        })
    </script>
@endsection
