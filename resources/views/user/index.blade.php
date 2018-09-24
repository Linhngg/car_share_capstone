@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/history.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
       {{-- {{ $user->name }}<br>
        {{ $user->id }}<br>--}}
        {{--{{ $currentBookin }}}--}}
        <div class="row">
            <div class="col-md-11 titlePage">
                <h1>My active booking</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover rounded table-bordered ">
                    <thead class="thead">
                    <tr>
                        <th>Car</th>
                        <th>Book Time</th>
                        <th>Pickup Address</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Land Rover Range Rover Sport TDV6	</td>
                            <td class="font-weight-bold">2018-09-22 23:19:35  </td>
                            <td class="font-weight-bold">Secure Parking - QV Car park </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection