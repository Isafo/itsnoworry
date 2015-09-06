<?php

//connect to server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itsnoworry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected";

//get the latest update from the server
//later the account will specify an ID of an arduino
function getLatestPressure($conn){
    $sql = "SELECT * FROM `pressure` ORDER BY `timeStmp` DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        //we got the data
        $row = $result->fetch_assoc();
        return $row["weight"];
    } else {
        return -1;
    }
}

$pressure = getLatestPressure($conn);

?>

<script type="text/javascript">

function getCurrentPressure(){

  var currentPressure = <?php echo getLatestPressure($conn); ?>;
  //currentPressure is kg on a 0.2 * 0.15 m surface
  var pressurePerMeter2 = currentPressure /2 *10 /15 * 100;

  return pressurePerMeter2;

}

</script>
