@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/return.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/return.js') }}"></script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPWvU7gcEWfLVo5nFPBbM9AL3KfYHqTaU&callback=initMap">
    </script>

@endsection

@section('content')
    <div class="container-fluid home">
        <div class="row">
            <div class="col-md-11 titlePage">
                <h1>Choose car park to return car</h1>
            </div>
        </div>
        <div class="row returnDisplay">
            <div class="col-md-6">
                <table class="table table-hover rounded table-bordered table-responsive" id="content" data-carparks='{{ Session::get('car_parks') }}'>
                    <thead class="thead rounded">
                    <tr>
                        <th scope="col">Car Park</th>
                        <th scope="col">Address</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="font-weight-bold">
                    @foreach ($car_parks as $car_park)
                        <tr id='table-row-{{$car_park->id}}' onclick="setActive(this.id); recenterMap({{$car_park->lat}},{{$car_park->long}} ) ">
                            <td class="font-weight-bold links">{{ $car_park->name }}</td>
                            <td  class="font-weight-bold btn-link links">{{ $car_park->address }} {{ $car_park->id }}</td>
                            <td>
                                {!! Form::open(['method' => 'POST', 'route' => 'post_return']) !!}
                                {{ Form::hidden('carpark_id', $car_park->id) }}
                                <button stype="submit" class="btn btns font-weight-bold">Return</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6"style="padding:0!important;">
                <div id="map"></div>
            </div>

        </div>
    </div>
@endsection
@section('assets')
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
@endsection