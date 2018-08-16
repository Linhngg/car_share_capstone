@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="text-muted"><h3>{{'Find cars near you'}}</h3></div>
                <div class="form-group">
                    <form>
                        <input id="location" type="text" placeholder="Enter City or Address" class="form-control" required autofocus>
                        &nbsp; OR <a class="lead " href="{{ route("home") }}">Find Me</a><br>

                        <div class="card">

                                <input id="searchBtn" class="collapsed" type="button" value="Advanced search" data-toggle="collapse" data-target="#advSearchBox" aria-expanded="false"
                                       aria-haspopup="false" aria-controls="advSearchBox">
                                <div id="advSearchBox" class="form-control border-white" aria-expanded="false" aria-hidden="true">
                                    <div class="btn-group dropright form-control border-white">
                                        <button class="btn btn-secondary dropdown-toggle form-control " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false"
                                                aria-expanded="false">
                                            <span class="text-md-left"> Number of seats </span>
                                        </button>
                                        <br>
                                        <div class="form-row dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">2</a>
                                            <a class="dropdown-item" href="#">5</a>
                                            <a class="dropdown-item" href="#">8</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="btn-group dropright form-control border-white">
                                        <button class="btn btn-secondary dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false"
                                                aria-expanded="false">
                                            <span class="text-md-left"> Car type </span>
                                        </button>
                                        <div class="form-row dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Car 1 </a>
                                            <a class="dropdown-item" href="#">Car 2 </a>
                                            <a class="dropdown-item" href="#">Car 3 </a>
                                            <a class="dropdown-item" href="#">Car 4 </a>
                                            <a class="dropdown-item" href="#">Car 5 </a>
                                        </div>
                                    </div>
                                  <div class="form-control border-white form-check">
                                        <input type="checkbox" id="checkboxChild" class="form-check-input" aria-label="Checkbox for Child seat" value="child seat">
                                        <label class="form-check-label" for="checkboxChild">Child seat</label><br>
                                        <input type="checkbox" class="form-check-input" id="checkboxNav" aria-label="Checkbox for Navigation system" value="navigation system">
                                        <label class="form-check-label"  for="checkboxNav">Navigation system</label><br>
                                        <input type="checkbox" class="form-check-input" id="checkboxBike" aria-label="Checkbox for Bike rack" value="bike rack">
                                        <label class="form-check-label" for="checkboxBike">Bike rack</label><br>
                                        <input type="checkbox" class="form-check-input" id="checkboxChair" aria-label="Checkbox for Wheelchair accessible" value="wheelchair accessible">
                                        <label class="form-check-label" for="checkboxChair">Wheelchair accessible</label><br>
                                        <input type="checkbox" class="form-check-input" id="checkboxCruise" aria-label="Checkbox for Cruise control" value="cruise control">
                                        <label class="form-check-label" for="checkboxCruise">Cruise control</label><br>
                                        <input type="checkbox" class="form-check-input" id="checkboxRack" aria-label="Checkbox for Roof rack" value="roof rack">
                                        <label class="form-check-label" for="checkboxRack">Roof rack</label><br>
                                 </div>
                                </div>
                        </div>
                        <div class="form-control  border-white">
                            <button type="submit" onclick="toggleResultBox()" class="btn-dark form-control">
                                {{ __('FIND CARS') }}
                            </button>
                        </div>

                    {{--    <div class="form-control " id="resultBox">
                            <h3 class="text-muted">AVAILABLE CARS</h3>
                                <br>
                            <table>

                                 <tr>
                                    <td  rowspan="2">  <img src="{{url('/images/c1.png')}}" width="190" height="100"/></td>
                                    <td >Car One</td>
                                </tr>
                                <tr>
                                    <td >$6.85 per/hour </td>
                                </tr>

                                <tr>
                                    <td  rowspan="2">  <img src="{{url('/images/c2.png')}}" width="190" height="100"/></td>
                                    <td >Car One</td>
                                </tr>
                                <tr>
                                    <td >$6.85 per/hour </td>
                                </tr>
                                <tr>
                                    <td  rowspan="2">  <img src="{{url('/images/c3.png')}}" width="190" height="100"/></td>
                                    <td >Car One</td>
                                </tr>
                                <tr>
                                    <td >$6.85 per/hour </td>
                                </tr>

                            </table>
                        </div>--}}

                    </form>
                </div>
            </div>


            <div class="col-md-9 mapBox">
                {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                {{--@if (session('status'))--}}
                {{--<div class="alert alert-success" role="alert">--}}
                {{--{{ session('status') }}--}}
                {{--</div>--}}
                {{--@endif--}}

                {{--You are logged in!--}}
                {{--</div>--}}
                {{--</div>--}}

                <div id="map"></div>
            </div>
        </div>
    </div>
@endsection