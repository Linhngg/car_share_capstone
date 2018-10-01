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
                <th>Book Date</th>
                <th>Start Time</th>
                <th>Return Date</th>
                <th>Return Time</th>
                <th>Total Time</th>
                <th>Total Fee</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td class="font-weight-bold"> {{ $booking->id }}</td>
                        <td class="font-weight-bold"> {{ $booking->car->model }}</td>
                        <td class="font-weight-bold"> {{ date("d / m / y",strtotime($booking->start)) }}</td>
                        <td class="font-weight-bold"> {{ date("H:i",strtotime($booking->start)) }}</td>
                        <td class="font-weight-bold"> {{ date("d / m / y",strtotime($booking->end)) }}</td>
                        <td class="font-weight-bold"> {{ date("H:i",strtotime($booking->end)) }}</td>
                        <td class="font-weight-bold"> {{ date_diff(new DateTime($booking->start), new DateTime($booking->end))->format('%hh %im %ss') }}</td>
                        <td class="font-weight-bold"> AUD {{ round( abs((new \DateTime($booking->start))->getTimestamp() - (new \DateTime($booking->end))->getTimestamp()) / 60 * 0.5, 2)}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
    </div>
@endsection