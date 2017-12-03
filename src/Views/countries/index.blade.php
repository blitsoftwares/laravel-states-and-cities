@extends('layouts.app')

@section('content')
    <a href="{{ route('countries.create') }}"><button class="btn btn-default">{{ trans('StatesAndCities::countries.new-register') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::countries.countries') }}</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('StatesAndCities::countries.table-header.name') }}</th>
                        <th>{{ trans('StatesAndCities::countries.table-header.code_iso2') }}</th>
                        <th>{{ trans('StatesAndCities::countries.table-header.code_iso3') }}</th>
                        <th>{{ trans('StatesAndCities::countries.table-header.code_phone') }}</th>
                        <th>{{ trans('StatesAndCities::countries.table-header.lang') }}</th>
                        <th>{{ trans('StatesAndCities::countries.states') }}</th>
                        <th>{{ trans('StatesAndCities::countries.cities') }}</th>
                        <th>{{ trans('StatesAndCities::countries.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>{{ trans('StatesAndCities::countries.country.'.$obj->name) }}</td>
                            <td>{{ $obj->code_iso2 }}</td>
                            <td>{{ $obj->code_iso3 }}</td>
                            <td>{{ $obj->code_phone }}</td>
                            <td>{{ $obj->lang }}</td>
                            <td>{{ $obj->states()->count() }}</td>
                            <td>{{ $obj->cities()->count() }}</td>
                            <td>
                                <form action="{{ route('countries.destroy',$obj->id) }}" method="POST">
                                    <div class="btn-group btn-group-sm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-default">{{ trans('StatesAndCities::countries.delete') }}</button>
                                        <a href="{{ route('countries.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-default">{{ trans('StatesAndCities::countries.edit') }}</button></a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
