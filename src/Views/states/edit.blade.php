@extends('layouts.app')

@section('content')
    <a href="{{ route('states.index') }}"><button class="btn btn-default">{{ trans('StatesAndCities::states.route-back') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::states.states') }}</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('states.update',$state->id) }}">

                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="code_iso2" class="col-md-4 control-label">{{ trans('StatesAndCities::states.fields.country') }}*</label>
                    <div class="col-md-2">
                        <select name="country_id" id="country"  class="form-control" data-default="{{ $state->country->id }}" required></select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::states.fields.ibge') }}*</label>
                    <div class="col-md-2">
                        <input id="ibge" name="ibge" type="number" class="form-control"  value="{{ $state->ibge }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::states.fields.code') }}*</label>
                    <div class="col-md-2">
                        <input id="code" name="code" type="text" class="form-control"  value="{{ $state->code }}" maxlength="2" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::states.fields.name') }}*</label>
                    <div class="col-md-2">
                        <input id="name" name="name" type="text" class="form-control"  value="{{ $state->name }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('StatesAndCities::states.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
