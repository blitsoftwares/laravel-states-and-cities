@extends('layouts.app')

@section('content')
    <a href="{{ route('countries.index') }}"><button class="btn btn-default">{{ trans('StatesAndCities::countries.route-back') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::countries.countries') }}</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('countries.update',$country->id) }}">

                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="code_iso2" class="col-md-4 control-label">{{ trans('StatesAndCities::countries.fields.code_iso2') }}*</label>
                    <div class="col-md-2">
                        <input id="code_iso2" name="code_iso2" type="text" class="form-control" value="{{ $country->code_iso2 }}" maxlength="2" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">{{ trans('StatesAndCities::countries.fields.name') }}*</label>
                    <div class="col-md-2">
                        <input id="name" name="name" type="text" class="form-control"  value="{{ $country->name }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="code_iso3" class="col-md-4 control-label">{{ trans('StatesAndCities::countries.fields.code_iso3') }}</label>
                    <div class="col-md-2">
                        <input id="code_iso3" name="code_iso3" type="text" class="form-control" maxlength="3"  value="{{ $country->code_iso3 }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="code_phome" class="col-md-4 control-label">{{ trans('StatesAndCities::countries.fields.code_phone') }}</label>
                    <div class="col-md-2">
                        <input id="code_phone" name="code_phone" type="text" class="form-control"  value="{{ $country->code_phone }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lang" class="col-md-4 control-label">{{ trans('StatesAndCities::countries.fields.lang') }}</label>
                    <div class="col-md-2">
                        <input id="lang" name="lang" type="text" class="form-control"  value="{{ $country->lang }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('StatesAndCities::countries.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
