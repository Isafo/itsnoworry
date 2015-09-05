<!DOCTYPE html>
<html>
  <body>
    <?php
      $servername = "localhost";
      $username = "usr";
      $password = "pass";
      $dbname = "itsnoworry";

      // create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      //check connction
      if($conn->connection_error)
        die("Connection failed:" . $conn->connection_error);

      $sql = "SELECT * FROM data"
      $result = $conn->query($sql);

      if($result->num_rows > 0) {
        // output data for each row
        while($row = $result->fetch_assoc()) {
          echo "pressure: " . $row["pressure"];
        }

      } else {
        echo "no results found!";
      }

      $conn->close();





      echo json_encode(42);
    ?>




  </html>
</body>
