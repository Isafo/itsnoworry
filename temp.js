<script>
  function() reqListener() {
    console.log(this.responseText);
  }

  var oReq = new XMLHttpRequest(); // create request object
  oReq.onload = function() {
    // handle the data
    var pressureData[] = this.responseText();
    alert(this.responseText); //Will alert: 42
  }

  oReq.open("get", "getData.php", true);s
  oReq.send();
</script>

<div id="dom-target" style="display: none;">
  <?php
     $output = "42"; // do some operation get output

     echo htmlspecialchar($output);
  ?>
</div>

<script>
    var div = document.getElementById("dom-target");
    var myData = div.textContent;
</script>


<script>
    var data = <?php echo json_encode("42"); ?>; //Don't forget the extra semicolon!
</script>
