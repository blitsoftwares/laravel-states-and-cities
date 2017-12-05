@extends('layouts.app')

@section('content')
    <a href="{{ route('addresses.create') }}"><button class="btn btn-default">{{ trans('StatesAndCities::addresses.new-register') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('StatesAndCities::addresses.addresses') }}</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('StatesAndCities::addresses.table-header.street') }}</th>
                        <th>{{ trans('StatesAndCities::addresses.table-header.number') }}</th>
                        <th>{{ trans('StatesAndCities::addresses.table-header.district') }}</th>
                        <th>{{ trans('StatesAndCities::addresses.table-header.postal_code') }}</th>
                        <th>{{ trans('StatesAndCities::addresses.table-header.city') }}</th>
                        <th>{{ trans('StatesAndCities::addresses.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>
                                {{ $obj->street }}
                                @if($obj->name || $obj->complement)<br/>@endif
                                @if($obj->complement)<small>{{ $obj->complement }}</small>@endif
                                @if($obj->name)<small>*{{ $obj->name }}</small>@endif
                            </td>
                            <td>{{ $obj->number }}</td>
                            <td>{{ $obj->district }}</td>
                            <td>{{ $obj->postal_code }}</td>
                            <td>{{ $obj->city->name }}/{{ $obj->city->state->code }}</td>
                            <td>
                                <form action="{{ route('addresses.destroy',$obj->id) }}" method="POST">
                                    <div class="btn-group btn-group-sm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-default">{{ trans('StatesAndCities::addresses.delete') }}</button>
                                        <a href="{{ route('addresses.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-default">{{ trans('StatesAndCities::addresses.edit') }}</button></a>
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
