function() reqListener() {
  console.log(this.responseText);
}

var oReq = new XMLHttpRequest(); // create request object
oReq.onload = function() {
  // handle the data
  var pressureData[] = this.responseText();
}

oReq.open("get", "getData.php", true);s
oReq.send();
