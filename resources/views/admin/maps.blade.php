@extends('layouts.app')

@section('assets')
    <!-- <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simulation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
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
    $i = 0;
    ?>
    <script>
        // global app configuration object
        window.aboutUsLink = "{{URL::to('/simupdate')}}";
        console.log(window.aboutUsLink);
    </script>
    <meta name="_token" content="{{csrf_token()}}" />
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            {{--side navbar --}}
            <div id="sidebar" class="col-md-2 float-left pl-0 pr-0 collapse width show rounded nav" >
                <div class="list-group border-0 card text-md-left" id="listgroup-span">
                    <div id="sidebarTitle" class=" d-inline-block ">
                        {{--  <i  class="fas fa-car-side fa-2x text-light"></i>--}} <h4 class="text-light text-center font-weight-bold" >Admin Dashboard</h4>
                    </div>
                    <div id="sidebarTitleCollapse" class="d-inline-block ">
                        {{--<i  class="fas fa-car-side fa-lg text-light"></i>--}} <h5 class="text-light font-weight-bold">Admin</h5>
                    </div>
                    <a href="{{ route('dashboard') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-warning font-weight-bold"><i class="fas fa-home fa-lg img-fluid"></i> <span class="text-left">Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-globe-asia fa-lg img-fluid"></i><span class="text-left">&nbsp;Map</span></a>
                    <a href="{{ route('bookings') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Bookings</span></a>
                    <a href="{{ route('service') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Service</span></a>
                    <a href="{{ route('retire') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Retire</span></a>
                </div>
            </div>
            {{--main content--}}
            <main class="col-md-10 float-left">
                <a id="sidebarCollapse" href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars text-dark"></i></a>
                <h1>Simulation</h1>
            </main>
        </div>
    </div>
    <script type = "text/javascript">


        //Cars object constructor
        function car(id, make, lat, lng, dlat, dlng){
            this.id = id;
            this.make = make;
            this.lat = lat;
            this.lng = lng;
            this.dlat = dlat;
            this.dlng = dlng;
            this.timeScale = 20;
            this.path = new Array();
            this.pathMarkers = new Array();
            this.nodesVisited = 0;
            this.running = false;
            this.finished = false;
            this.distance = 1;
        };

        var cars = [];

        //Control box object constructor
        //Controls: Auto, Run, view nodes, view end, end sim
        //Welcome to the overloaded meme zone
        //Uncomment for debug
        function controlBox(index, id, make){
            this.index = index;

            this.boxDiv = document.createElement('div');
            this.boxDiv.className = "controller";
            this.boxDiv.id = id + make;

            this.auto = document.createElement('span');
            this.auto.innerHTML = "Sim start: " + make;

            this.start = document.createElement('span');

            //this.viewNodes = document.createElement('span');

            //this.viewEnd = document.createElement('span');

            this.forceEnd = document.createElement('span');

            this.updateDB = document.createElement('span');
        };

        var controlBoxes = [];
        var activeCar = new car(0, 0, 0, 0, 0, 0);
    </script>
    @foreach($cars as $car)
        @if($car->status == 0)
            <script type= "text/javascript">
                var i = {{$i}};
                var cid = {{$car->id}};
                var cmake = "{{$car->model}}";
                var clat = {{$car->lat}};
                var clng = {{$car->long}};

                cars[i] = new car(cid, cmake, clat, clng, 0, 0);
            </script>
            <?php $i++ ?>
        @endif
    @endforeach
    <!DOCTYPE html>
    <head>
        <title>Car Simulation</title>
    </head>
    <body>
    <div id="container">
        <div id="map"></div>
        <div id="control_panel"></div>
    </div>

    <script type = "text/javascript">
        //Dynamically generate control panel for each car on the map
        //Un comment for debug
        for(var i = 0; i < cars.length; i++){
            controlBoxes[i] = new controlBox(i, cars[i].id, cars[i].make);
            var tmpIndex = controlBoxes[i].index;
            //var tmpViewNodeId = "viewNode" + tmpIndex;
            //var tmpViewEndId = "viewEnd" + tmpIndex;
            controlBoxes[i].start.innerHTML = "</br><button onclick=\"startSimulation(" + tmpIndex + ")\">Start</button>";
            //controlBoxes[i].viewNodes.innerHTML = "</br>View Nodes: <input type=\"checkbox\"  id =\"" + tmpViewNodeId + "\" onclick=\"viewNodes(" + tmpIndex + ")\">";
            //controlBoxes[i].viewEnd.innerHTML = "</br>View End: <input type=\"checkbox\" id=\"" + tmpViewEndId + "\" onclick=\"viewEnd(" + tmpIndex + ")\">";
            controlBoxes[i].updateDB.innerHTML = "<button class = \"ajaxsubmit\" onclick = \"setActive(" + tmpIndex + ")\">Update db</button>";
            controlBoxes[i].forceEnd.innerHTML = "<button onclick = \"forceEnd(" + tmpIndex + ")\">End Sim</button>";
            document.getElementById('control_panel').appendChild(controlBoxes[i].boxDiv);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].auto);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].start);
            //document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].viewNodes);
            //document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].viewEnd);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].forceEnd);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].updateDB);
        };

        function submitForm() {
            var http = new XMLHttpRequest();
            http.open("POST", "./sim_dbupdate.php", true);
            http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            console.log(cars[0].cid);
            var sendVal = "id=1&lat=" + cars[0].lat + "&lng="  + cars[0].lng;
            http.send(sendVal);
            http.onload = function() {
                alert(http.responseText);
            }
        }

        function startSimulation(index){
            cars[index].running = true;
        }
    </script>
    <script type = "text/javascript">
    </script>
    </body>
    </html>