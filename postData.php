<?php

//connect to server
$servername = "localhost";//"192.168.147.254";
$username = "root";
$password = "";
$dbname = "itsnoworry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get send the latest pressure to the server
$theWeight = 2.5;

$sql = "INSERT INTO `pressure` (weight, timeStmp) VALUES ($theWeight, CURRENT_TIMESTAMP)";
$result = $conn->query($sql);

if ($result) {
    echo "success!";
} else {
    echo "no success";
}

?>
