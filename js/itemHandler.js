$(document).ready(function() {
  var activeInfo = -1;
  $(".slide").hide();
  $("#statsInfo").hide();
  $("#planInfo").hide();

  $(".moreinfobox").click(function() {
      if(activeInfo == -1) {
        $(".slide").show();
        activeInfo = this.id;
      }
      else {
          $(activeInfo).animate({
                                  left: '150px',
             opacity: '1.0'
          }, 1200, function() {
          // do something after the animation finishes...
          });
      }

      activeInfo = this.id;
      $("p[id='"+ activeInfo +"Info']").show();
      scrollToAnchor('slide');
});

$("#plan").click(function() {

    if(activeInfo == -1) {
      $(".slide").show();
      activeInfo = this.id;
    }
    else {
        $(activeInfo).animate({
                                left: '150px',
           opacity: '1.0'
        }, 1200, function() {
        // do something after the animation finishes...
        });
    }

    activeInfo = this.id;
    $("p[id='"+ activeInfo +"Info']").show();
    scrollToAnchor('slide');
});

  $("#curr").click(function() {

      if(activeInfo == -1) {
        $(".slide").show();
        activeInfo = this.id;
      }
      else {
          $(activeInfo).animate({
                                  left: '150px',
             opacity: '1.0'
          }, 1200, function() {
          // do something after the animation finishes...
          });
      }

      activeInfo = this.id;
      $("p[id='"+ activeInfo +"Info']").show();
      scrollToAnchor('slide');
  });

  $("#snow").click(function() {

      if(activeInfo == -1) {
        $(".slide").show();
        activeInfo = this.id;
      }
      else {
          $(activeInfo).animate({
                                  left: '150px',
             opacity: '1.0'
          }, 1200, function() {
          // do something after the animation finishes...
          });
      }

      activeInfo = this.id;
      $("p[id='"+ activeInfo +"Info']").show();
      scrollToAnchor('slide');
  });

  $("#service").click(function() {

      if(activeInfo == -1) {
        $(".slide").show();
        activeInfo = this.id;
      }

      activeInfo = this.id;

      $("p[id='"+ activeInfo +"Info']").show();
      $("#serviceInfo").show();
      scrollToAnchor('slide');
  });

  $("#setting").click(function() {

      if(activeInfo == -1) {
        $(".slide").show();
        activeInfo = this.id;
      }
      else {
          $(activeInfo).animate({
                                  left: '150px',
             opacity: '1.0'
          }, 1200, function() {
          // do something after the animation finishes...
          });
      }

      activeInfo = this.id;

      $("p[id='"+ activeInfo +"Info']").show();
      scrollToAnchor('slide');
  });

});

function scrollToAnchor(aid) {
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
