@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">


@section('content')
    <div class="container">
        <div class="formBox col-md-4">
            <div class="card-header" >{{('Find cars near you') }}</div>
            <div class="form-group">
                    <input id="location" type="text" placeholder="Enter City or Address"
                           class="form-control" required autofocus>
                OR  <a href="{{ route("home") }}">Find Me</a>
                <div class="card">
                <input id="searchBtn" class="collapsed" type="button" value="Advanced search" data-toggle="collapse" data-target="#advSearchBox" aria-expanded="false" aria-controls="advSearchBox">
                <div id="advSearchBox" aria-expanded="false">
                    <button class="btn btn-secondary dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        Number of seats
                    </button> <br>
                    <div class="form-row  dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">2</a>
                        <a class="dropdown-item" href="#">5</a>
                        <a class="dropdown-item" href="#">8</a>
                    </div><br>
                        <button class="btn btn-secondary dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Car type
                        </button>
                        <div class="form-row dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Car 1 </a>
                            <a class="dropdown-item" href="#">Car 2 </a>
                            <a class="dropdown-item" href="#">Car 3 </a>
                            <a class="dropdown-item" href="#">Car 4 </a>
                            <a class="dropdown-item" href="#">Car 5 </a>
                        </div>
                    <div class="form-check" >
                        <input type="checkbox" class="form-check-input" aria-label="Checkbox for Child seat" value="child seat">
                        <label class="form-check-label" for="child seat">Child seat</label><br>
                        <input type="checkbox" class="form-check-input" aria-label="Checkbox for Navigation system"value="navigation system">
                        <label class="form-check-label" for="navigation system">Navigation system</label><br>
                        <input type="checkbox" class="form-check-input" a aria-label="Checkbox for Bike rack" value="bike rack">
                        <label class="form-check-label" for="bike rack">Bike rack</label><br>
                        <input type="checkbox" class="form-check-input" a aria-label="Checkbox for Wheelchair accessible"value="wheelchair accessible">
                        <label class="form-check-label" for="wheelchair accessible">Wheelchair accessible</label><br>
                        <input type="checkbox" class="form-check-input" a aria-label="Checkbox for Cruise control"value="cruise control">
                        <label class="form-check-label" for="cruise control">Cruise control</label><br>
                        <input type="checkbox" class="form-check-input" a aria-label="Checkbox for Roof rack" value="roof rack">
                        <label class="form-check-label" for="roof rack">Roof rack</label><br>

                    </div>

                </div>
                </div>
            </div>

        </div>

        <div class="row ">
            <div class="col-md-7">
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
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
                <script>
                    //First implimentation of user location function
                    //Curtis Maunder
                    window.onload = function() {
                        // Check to see if the browser supports the GeoLocation API.
                        if (navigator.geolocation) {
                            // Get the location
                            navigator.geolocation.getCurrentPosition(function(position) {

                                //Store and show users location
                                //Google maps uses latitude and longitude
                                var lat = position.coords.latitude;
                                var lon = position.coords.longitude;

                                showMap(lat, lon);
                            });
                        } else {
                            //Inform the user they cannot use the "find me" feature
                            document.getElementById('error').innerHTML = "Sorry. You are unable to use GeoLocation";
                        }
                    }
                    // Show the user's position on a Google map.
                    function showMap(lat, lon) {
                        var userLocation = new google.maps.LatLng(lat, lon);

                        // Map Options
                        var mapOptions = {
                            zoom: 8,
                            center: userLocation,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };

                        // Generate the map and add the marker
                        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

                        var marker = new google.maps.Marker({
                            position: userLocation,
                            map: map,
                            title: 'User Location'
                        });
                    }
                </script>
            </div>
        </div>
    </div>
@endsection