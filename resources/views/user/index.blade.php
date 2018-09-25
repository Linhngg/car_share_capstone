@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/history.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/userdashboard.js') }}"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPWvU7gcEWfLVo5nFPBbM9AL3KfYHqTaU&callback=initMap">
    </script>
@endsection

@section('content')
    <div class="container-fluid">
        @if ($booking != null)
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
                            <th>Book Date</th>
                            <th>Book Time</th>
                            <th>Pickup Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="font-weight-bold"> {{ $booking->car->model }}  </td>
                            <td class="font-weight-bold"> {{ date("d / m / y",strtotime($booking->start)) }}</td>
                            <td class="font-weight-bold"> {{ date("H:i",strtotime($booking->start)) }}</td>
                            <td class="font-weight-bold"> {{ $carpark->name }} - {{ $carpark->address }}</td>
                            <td class="font-weight-bold">
                                {!! Form::open(['method' => 'POST', 'route' => 'return']) !!}
                                <button type="submit" class="btn btn-lg d-block font-weight-bold" id="bookBtn">Finish</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="map" data-carpark='{{ Session::get('carpark') }}'></div>
                </div>
            </div>
        @else
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title">
                        You have no active booking.              </div>
                </div>
            </div>
        @endif
    </div>
@endsection