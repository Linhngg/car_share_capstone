@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    {{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>--}}
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPWvU7gcEWfLVo5nFPBbM9AL3KfYHqTaU&callback=initMap">
    </script>
@endsection

@section('content')
    <div class="container-fluid home" id="content" data-cars='{{ Session::get('cars') }}'>
        <div class="row">
            {{--<div class="col-md-4 search-col">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="row">--}}
                            {{--<div class="text-muted"><h3>Find cars near you</h3></div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-8">--}}
                                        {{--<input id="location" type="text" placeholder="Enter City or Address" class="form-control" required>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--OR <a class="lead">Find Me</a><br>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="card">--}}
                                    {{--<a class="btn btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">--}}
                                        {{--Advance Options--}}
                                    {{--</a>--}}
                                    {{--<div class="collapse" id="collapseExample">--}}
                                        {{--<div class="card card-body">--}}
                                            {{--<div class="form-control border-white">--}}
                                                {{--<div class="btn-group dropright form-control border-white">--}}
                                                    {{--<button class="btn btn-secondary dropdown-toggle form-control " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false"--}}
                                                            {{--aria-expanded="false">--}}
                                                        {{--<span class="text-md-left"> Number of seats </span>--}}
                                                    {{--</button>--}}
                                                    {{--<br>--}}
                                                    {{--<div class="form-row dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
                                                        {{--<a class="dropdown-item" href="#">2</a>--}}
                                                        {{--<a class="dropdown-item" href="#">5</a>--}}
                                                        {{--<a class="dropdown-item" href="#">8</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<br>--}}
                                                {{--<div class="btn-group dropright form-control border-white">--}}
                                                    {{--<button class="btn btn-secondary dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false"--}}
                                                            {{--aria-expanded="false">--}}
                                                        {{--<span class="text-md-left"> Car type </span>--}}
                                                    {{--</button>--}}
                                                    {{--<div class="form-row dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
                                                        {{--<a class="dropdown-item" href="#">Car 1 </a>--}}
                                                        {{--<a class="dropdown-item" href="#">Car 2 </a>--}}
                                                        {{--<a class="dropdown-item" href="#">Car 3 </a>--}}
                                                        {{--<a class="dropdown-item" href="#">Car 4 </a>--}}
                                                        {{--<a class="dropdown-item" href="#">Car 5 </a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-control border-white form-check">--}}
                                                    {{--<input type="checkbox" id="checkboxChild" class="form-check-input" aria-label="Checkbox for Child seat" value="child seat">--}}
                                                    {{--<label class="form-check-label" for="checkboxChild">Child seat</label><br>--}}
                                                    {{--<input type="checkbox" class="form-check-input" id="checkboxNav" aria-label="Checkbox for Navigation system" value="navigation system">--}}
                                                    {{--<label class="form-check-label"  for="checkboxNav">Navigation system</label><br>--}}
                                                    {{--<input type="checkbox" class="form-check-input" id="checkboxBike" aria-label="Checkbox for Bike rack" value="bike rack">--}}
                                                    {{--<label class="form-check-label" for="checkboxBike">Bike rack</label><br>--}}
                                                    {{--<input type="checkbox" class="form-check-input" id="checkboxChair" aria-label="Checkbox for Wheelchair accessible" value="wheelchair accessible">--}}
                                                    {{--<label class="form-check-label" for="checkboxChair">Wheelchair accessible</label><br>--}}
                                                    {{--<input type="checkbox" class="form-check-input" id="checkboxCruise" aria-label="Checkbox for Cruise control" value="cruise control">--}}
                                                    {{--<label class="form-check-label" for="checkboxCruise">Cruise control</label><br>--}}
                                                    {{--<input type="checkbox" class="form-check-input" id="checkboxRack" aria-label="Checkbox for Roof rack" value="roof rack">--}}
                                                    {{--<label class="form-check-label" for="checkboxRack">Roof rack</label><br>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="row justify-content-center" >--}}
                            {{--<div class="col-md-4">--}}
                                {{--<button type="button" class="btn btn-dark" onclick="toggleResultBox()">Search</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<hr>--}}
                        {{--<div class="row">--}}
                            {{--<div id="resultBox" >--}}
                                {{--<h3 class="text-muted">AVAILABLE CARS</h3>--}}
                                {{--<br>--}}
                                {{--<table>--}}
                                    {{--@foreach ($cars as $car)--}}
                                        {{--<tr>--}}
                                            {{--<td  rowspan="2"> <img src="{{url('/images/c1.png')}}" width="190" height="100"/></td>--}}
                                            {{--<td ><a href="{{ route('book', $car->id) }}">{{ $car->model }}</a></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td >$6.85 per/hour </td>--}}
                                        {{--</tr>--}}
                                    {{--@endforeach--}}
                                {{--</table>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-md-12"style="padding:0!important;">
                <div id="map"></div>

                <div class="row">
                    <div class=" col-md-3 col-sm-2 col-2 card float-left divFind">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold">Search cars</h4>

                            <a class="btn btn-block btn-link btn-adv text-center" data-toggle="collapse" href="#collapseAdv" role="button" aria-expanded="false" aria-controls="collapseAdv">
                                Advance Options
                            </a>
                            <div class="collapse" id="collapseAdv">
                                <div class="dropdown card-text">
                                    <button class="btn dropdown-toggle form-control text-left" type="button" id="dropCartype" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Car Type
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropCartype">
                                        <button class="dropdown-item" type="button">Nissan</button>
                                        <button class="dropdown-item" type="button">Ford</button>
                                        <button class="dropdown-item" type="button">Toyota</button>
                                        <button class="dropdown-item" type="button">Mercedes</button>
                                        <button class="dropdown-item" type="button">Hyundai</button>
                                        <button class="dropdown-item" type="button">Mazda</button>
                                        <button class="dropdown-item" type="button">Holden</button>
                                        <button class="dropdown-item" type="button">Jeep</button>
                                        <button class="dropdown-item" type="button">BMW</button>

                                    </div>
                                </div>

                                <div class="dropdown card-text">
                                    <button class="btn dropdown-toggle form-control text-left" type="button" id="dropSeats" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Number of seats
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropSeats">
                                        <button class="dropdown-item" type="button">2</button>
                                        <button class="dropdown-item" type="button">5</button>
                                        <button class="dropdown-item" type="button">7</button>

                                    </div>
                                </div>

                                <div class="form-control border-0 form-check check">
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
                            <a href="#" class="btn btnFind btn-block font-weight-bold text-uppercase">Find cars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection