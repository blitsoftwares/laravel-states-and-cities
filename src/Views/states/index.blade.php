@extends('layouts.app')

@section('content')
    <a href="{{ route('states.create') }}"><button class="btn btn-default">{{ trans('StatesAndCities::states.new-register') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::states.states') }}</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('StatesAndCities::states.table-header.code') }}</th>
                        <th>{{ trans('StatesAndCities::states.table-header.name') }}</th>
                        <th>{{ trans('StatesAndCities::states.table-header.ibge') }}</th>
                        <th>{{ trans('StatesAndCities::states.table-header.cities') }}</th>
                        <th>{{ trans('StatesAndCities::states.table-header.country') }}</th>
                        <th>{{ trans('StatesAndCities::states.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>{{ $obj->code }}</td>
                            <td>{{ $obj->name }}</td>
                            <td>{{ $obj->ibge }}</td>
                            <td>{{ $obj->cities()->count() }}</td>
                            <td>{{ $obj->country->code_iso2 }}</td>
                            <td>
                                <form action="{{ route('states.destroy',$obj->id) }}" method="POST">
                                    <div class="btn-group btn-group-sm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-default">{{ trans('StatesAndCities::states.delete') }}</button>
                                        <a href="{{ route('states.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-default">{{ trans('StatesAndCities::states.edit') }}</button></a>
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
