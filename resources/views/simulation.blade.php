@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="{{ asset('js/simdata.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/carsim.js') }}"></script>
@endsection

@section('content')

<?php
/**
 * Created by PhpStorm.
 * User: Curtis
 * Date: 17/08/2018
 * Time: 4:10 PM
 */
?>
<!DOCTYPE html>
<head>
    <title>Car Simulation</title>
    <style> html, body, #map {margin: auto; padding: 0; height: 500px; width: 500px;} </style>
</head>
<body>
    <p id = "error"></p>
    <div id="map"></div>
</body>
</html>