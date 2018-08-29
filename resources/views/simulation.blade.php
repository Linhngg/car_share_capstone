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
<script type = "text/javascript">
    //Cars object constructor
    function car(id, make, lat, lng, status){
        this.id = id;
        this.make = make;
        this.lat = lat;
        this.lng = lng;
        this.status = status;
    };
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

$sql = "SELECT * FROM cars";
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
            var cid = <?php echo $cid ?>;
            var cmake = "<?php echo $cmake ?>";
            var clat = <?php echo $clat ?>;
            var clng = <?php echo $clng ?>;
            var cstatus = "<?php echo $cstatus ?>";
            var cincrement = "<?php echo $i ?>";

            if(cstatus = 0)
                cstatus = false;
            else
                cstatus = true;

            console.log(cstatus);

            var car1 = new car(cid, cmake, clat, clng, cstatus);

            console.log(car1.make);
        </script>
<?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<!DOCTYPE html>
<head>
    <title>Car Simulation</title>
    <style> html, body, #map {margin: auto; padding: 0; height: 500px; width: 500px;} </style>
</head>
<body>
    <div id="map"></div>
</body>
</html>