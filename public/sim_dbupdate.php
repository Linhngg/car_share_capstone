<?php
/**
 * Created by PhpStorm.
 * User: Curtis
 * Date: 5/09/2018
 * Time: 12:29 PM
 */

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "car_share";


// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo(">");
}

echo("Updating car position..");

$id = $_POST['id'];
$lng = $_POST['lng'];
$lat = $_POST['lat'];

echo($lat);
echo($lng);
echo($id);

$sql = "UPDATE cars SET lat = $lat, long = $lng WHERE id = $id";
//$sql = "UPDATE cars SET lat = 10, long = 10 WHERE id = 1";
if($conn->query($sql) == TRUE)
    echo("Car position updated");
else
    echo(mysqli_error($conn));
?>