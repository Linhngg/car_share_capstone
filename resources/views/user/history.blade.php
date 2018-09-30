@extends('layouts.app')

@section('assets')
    {{--<link href="{{ asset('css/return.css') }}" rel="stylesheet">--}}
@endsection

@section('content')
    <div class="container-fluid">
        <table class="table table-dark table-hover">
            <thead>
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
                        <td> {{ $booking->id }}</td>
                        <td> {{ $booking->car->model }}</td>
                        <td> {{ $booking->start }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection