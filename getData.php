<!DOCTYPE html>
<html>
  <body>

    <?php

    /* Do some operation here, like talk to the database, the file-session
    * The world beyond, limbo, the city of shimmers, and Canada.
    *
    * AJAX generally uses strings, but you can output JSON, HTML and XML as well.
    * It all depends on the Content-type header that you send with your AJAX
    * request. */


      echo "My first PHP script!";

      echo json_encode(42);

      $cars = array("Volvo", "BMW", "Toyota");
      echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

  </html>
</body>
