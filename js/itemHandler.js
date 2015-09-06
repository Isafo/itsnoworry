$(document).ready(function() {
  var activeInfo = -1;
  $(".slide").hide();
  $("#statsInfo").hide();
  $(".arrow").hide();
  $(".slideP").hide();

  $(".moreinfobox:after").hide();

  $(".moreinfobox").click(function() {
    if(activeInfo == -1) {
      $(".slide").show();
      activeInfo = this.id;
    }
    else {
        $(".slideP").hide();
        $(".arrow").hide();
    }

    activeInfo = this.id;
    $("#"+ activeInfo +"Info").show();
    $("#"+ activeInfo +"Arrow").show();
    scrollToAnchor('slide');
  });
});

function scrollToAnchor(aid) {
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
