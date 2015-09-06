<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<script type="text/javascript" src="calc.js"></script>

<?php
require 'getData.php';
?>

</head>

<body>

<p id="hej">wait</p>

<script>


var days = 100;
document.getElementById("hej").innerHTML = days;
days = getDayToShovel(54,15,120, "hej");


</script>

<?php

$currentPressure = getLatestPressure($conn);

?>

slut
</body>
</html>