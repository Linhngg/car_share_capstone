@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simulation.css') }}" rel="stylesheet">
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
    };

    var cars = [];

    //Control box object constructor
    //Controls: Auto, Run, Timescale, view nodes, view end
    //Welcome to the overloaded meme zone
    function controlBox(index, id, make){
        this.index = index;

        this.boxDiv = document.createElement('div');
        this.boxDiv.className = "controller";
        this.boxDiv.id = id + make;

        this.auto = document.createElement('span');
        this.auto.innerHTML = "Sim start: " + make;

        this.start = document.createElement('span');

        this.timeScale = document.createElement('span');
        this.timeScale.innerHTML = "</br>Timescale";

        this.viewNodes = document.createElement('span');

        this.viewEnd = document.createElement('span');
        this.viewEnd.innerHTML = "</br>View End: <input type=\"checkbox\">";
    };

    var controlBoxes = [];
</script>
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "car_share";


// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cars WHERE status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Create javascript objects for each result
    $i = 0;
    while($row = $result->fetch_assoc()) {
        $cid = $row["id"];
        $cmake = $row["model"];
        $clat = $row["lat"];
        $clng = $row["long"];
        $cstatus = $row["status"];

       if($cstatus == 0)
            $cstatus = true;
       else
            $cstatus = false;
        ?>
        <script type= "text/javascript">
            var i = <?php echo $i ?>;
            var cid = <?php echo $cid ?>;
            var cmake = "<?php echo $cmake ?>";
            var clat = <?php echo $clat ?>;
            var clng = <?php echo $clng ?>;
            var cincrement = "<?php echo $i ?>";

            if(cstatus = 0)
                cstatus = false;
            else
                cstatus = true;

            cars[i] = new car(cid, cmake, clat, clng, 0, 0);
        </script>
<?php
        $i++;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<!DOCTYPE html>
<head>
    <title>Car Simulation</title>
</head>
<body>
    <div id="container">
        <div id="map"></div>
        <div id="control_panel"></div>
    </div>

    @foreach ($cars as $car)
        @if( $car->needService)
            <tr>
                <th scope="row">{{ $car->model  }}</th>
                <td>{{ $car->long }} - {{ $car->lat }}</td>
                <td>{{ $car->readableStatus }}</td>
                <td>{{ $car->odometer }}</td>
                {!! Form::open(['method' => 'POST', 'route' => 'sendService']) !!}
                {{ Form::hidden('id', $car->id) }}
                <td>{{ Form::button ('Am I dead yet?') }}</td>
                {!! Form::close() !!}
            </tr>
        @endif
    @endforeach

    <button onclick="submitForm()">Click me</button>
    <script type = "text/javascript">
        //Dynamically generate control panel for each car on the map
        for(var i = 0; i < cars.length; i++){
            controlBoxes[i] = new controlBox(i, cars[i].id, cars[i].make);
            var tmpIndex = controlBoxes[i].index;
            var tmpViewNodeId = "viewNode" + tmpIndex;
            var tmpViewEndId = "viewEnd" + tmpIndex;
            controlBoxes[i].start.innerHTML = "<button onclick=\"startSimulation(" + tmpIndex + ")\">Start</button>";
            controlBoxes[i].viewNodes.innerHTML = "</br>View Nodes: <input type=\"checkbox\"  id =\"" + tmpViewNodeId + "\" onclick=\"viewNodes(" + tmpIndex + ")\">";
            controlBoxes[i].viewEnd.innerHTML = "</br>View End: <input type=\"checkbox\" id=\"" + tmpViewEndId + "\" onclick=\"viewEnd(" + tmpIndex + ")\">";
            document.getElementById('control_panel').appendChild(controlBoxes[i].boxDiv);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].auto);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].start);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].timeScale);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].viewNodes);
            document.getElementById(controlBoxes[i].boxDiv.id).appendChild(controlBoxes[i].viewEnd);
        };

        //Asynchronous form submission to change the database
        //Uses AJAX as to not disrupt the simulation
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
</body>
</html>