@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/return.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/return.js') }}"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPWvU7gcEWfLVo5nFPBbM9AL3KfYHqTaU&callback=initMap">
    </script>
@endsection

@section('content')
    <div class="container-fluid home">
        <div class="row">
            <div class="col-md-12"style="padding:0!important;">
                <div id="map"></div>

                <div class="row">
                    <div class=" col-md-8 card float-left divFind">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
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
                                            <tr>
                                                <td>{{ $car_park->name }}</td>
                                                <td>{{ $car_park->address }} {{ $car_park->id }}</td>
                                                <td>
                                                    {!! Form::open(['method' => 'POST', 'route' => 'post_return']) !!}
                                                    {{ Form::hidden('carpark_id', $car_park->id) }}
                                                    <button stype="submit" class="btn btns font-weight-bold">return</button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{--<div class="col-md-6 map">--}}
                                {{--<iframe src="https://maps.google.com/maps?q=Parking%20Garage%20%C2%B7%20The%20Strand%20Melbourne%20323%20Lonsdale%20St+(Secure%20Parking%20-%20The%20Strand%20Car%20Park)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed"--}}
                                {{--frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>--}}
                                {{--<br/>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container-fluid">--}}

        {{--<div id="map"></div>--}}

    {{--</div>--}}
@endsection