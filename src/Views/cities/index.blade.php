@extends('layouts.app')

@section('content')
    <a href="{{ route('cities.create') }}"><button class="btn btn-default">{{ trans('StatesAndCities::cities.new-register') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::cities.cities') }}</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('StatesAndCities::cities.table-header.code') }}</th>
                        <th>{{ trans('StatesAndCities::cities.table-header.name') }}</th>
                        <th>{{ trans('StatesAndCities::cities.table-header.state') }}</th>
                        <th>{{ trans('StatesAndCities::cities.table-header.country') }}</th>
                        <th>{{ trans('StatesAndCities::cities.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>{{ $obj->code }}</td>
                            <td>{{ $obj->name }}</td>
                            <td>{{ $obj->state->code }}</td>
                            <td>{{ $obj->state->country->code_iso2 }}</td>
                            <td>
                                <form action="{{ route('cities.destroy',$obj->id) }}" method="POST">
                                    <div class="btn-group btn-group-sm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-default">{{ trans('StatesAndCities::cities.delete') }}</button>
                                        <a href="{{ route('cities.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-default">{{ trans('StatesAndCities::cities.edit') }}</button></a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $data->render() !!}
        </div>
    </div>
@endsection
