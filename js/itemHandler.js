$(document).ready(function() {
  var activeInfo = -1;
  $(".slide").hide();
  $("#statsInfo").hide();
  $("#planInfo").hide();

  $("#stats").click(function() {
      if(activeInfo == -1)
        $(".slide").show();

      $(".slideP").hide();

      $("#statsInfo").show();
  });

  $("#plan").click(function() {
      alert("inne")
      if(activeInfo == -1)
        $(".slide").show();

      $(".slideP").hide();

      $("#planInfo").show();
  });
});
