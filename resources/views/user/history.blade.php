@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/history.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 titlePage">
                <h1>My past bookings</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
        <table class="table table-hover rounded table-bordered ">
            <thead class="thead">
            <tr>
                <th>Id</th>
                <th>Car</th>
                <th>Book Time</th>
                <th>Return Time</th>
                <th>Fee</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td class="font-weight-bold"> {{ $booking->id }}</td>
                        <td class="font-weight-bold"> {{ $booking->car->model }}</td>
                        <td class="font-weight-bold"> {{ $booking->start }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
    </div>
@endsection