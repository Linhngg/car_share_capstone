@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    {{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>--}}
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPWvU7gcEWfLVo5nFPBbM9AL3KfYHqTaU&callback=initMap">
    </script>
@endsection

@section('content')
    <div class="container-fluid home" id="content" data-cars='{{ Session::get('cars') }}'>
        <div class="row">
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
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="carType">
                                        <option value="default" selected>Car Type...</option>
                                        <option value="nissan">Nissan</option>
                                        <option value="ford">Ford</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="hyundai">Hyundai</option>
                                        <option value="mazda">Mazda</option>
                                        <option value="holden">Holden</option>
                                        <option value="jeep">Jeep</option>
                                        <option value="bwm">BMW</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <select class="custom-select" id="numberOfSeat">
                                        <option value="default" selected>Number of seats...</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>

                                <div class="form-control border-0 form-check check">
                                    <input type="checkbox" class="form-check-input" name="carFeatures" value="child-seat">
                                    <label class="form-check-label" for="checkboxChild">Child seat</label><br>
                                    <input type="checkbox" class="form-check-input" name="carFeatures" value="gps">
                                    <label class="form-check-label"  for="checkboxNav">GPS system</label><br>
                                    <input type="checkbox" class="form-check-input" name="carFeatures" value="bike-rack">
                                    <label class="form-check-label" for="checkboxBike">Bike rack</label><br>
                                    <input type="checkbox" class="form-check-input" name="carFeatures" value="wheelchair">
                                    <label class="form-check-label" for="checkboxChair">Wheelchair accessible</label><br>
                                    <input type="checkbox" class="form-check-input" name="carFeatures" value="cruise-control">
                                    <label class="form-check-label" for="checkboxCruise">Cruise control</label><br>
                                    <input type="checkbox" class="form-check-input" name="carFeatures" value="roof-rack">
                                    <label class="form-check-label" for="checkboxRack">Roof rack</label><br>
                                </div>

                            </div>
                            <button class="btn btnFind btn-block font-weight-bold text-uppercase my-button" onclick="filterCars()">Find cars</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection