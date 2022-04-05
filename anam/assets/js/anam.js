$(document).ready(function(){
  $('main').height(screen.height - 250);
  $('.carousel').height(screen.height - 250);
  $('.carousel-item').height(screen.height - 250);
  $('.border-red').height(screen.height - 250);
  $('.valign-size').height(screen.height - 250);
  $('#slider').height(screen.height - 250);
  $('#introduction').height(screen.height - 250);
  $('#vision').height(screen.height - 250);
  $('#gallery').height(screen.height - 250);
  $('#contact').height(screen.height - 150);
    $("#introlnk").click(function(){
      $("#slider").fadeOut(500);
      $("#vision").fadeOut(500);
      $("#industries").fadeOut(500);
      $("#gallery").fadeOut(500);
      $("#contact").fadeOut(500);
      $("#services").hide();
      $("#introduction").delay(500).fadeIn(1000);
    });
    $("#visionlnk").click(function(){
      $("#slider").fadeOut(500);
      $("#introduction").fadeOut(500);
      $("#industries").fadeOut(500);
      $("#gallery").fadeOut(500);
      $("#contact").fadeOut(500);
      $("#services").hide();
      $("#vision").delay(500).fadeIn(1000);
    });
    $("#induslnk").click(function(){
      $("#slider").fadeOut(500);
      $("#introduction").fadeOut(500);
      $("#vision").fadeOut(500);
      $("#gallery").fadeOut(500);
      $("#contact").fadeOut(500);
      $("#services").hide();
      $("#industries").delay(500).fadeIn(1000);
    });
    $("#gallerylnk").click(function(){
      $("#slider").fadeOut(500);
      $("#introduction").fadeOut(500);
      $("#vision").fadeOut(500);
      $("#industries").fadeOut(500);
      $("#contact").fadeOut(500);
      $("#services").hide();
      $("#gallery").delay(500).fadeIn(1000);
    });
    $("#contactlnk").click(function(){
      $("#slider").fadeOut(500);
      $("#introduction").fadeOut(500);
      $("#vision").fadeOut(500);
      $("#industries").fadeOut(500);
      $("#gallery").fadeOut(500);
      $("#services").hide();
      $("#contact").delay(500).fadeIn(1000);
    });
    $("#serviceslnk").click(function(){
      $("#services").delay(500).fadeIn(1000);
    });
    $("#serviceslnk2").click(function(){
      //$("#services").show(1000).width(810);
    var toggleWidth = $("#services").width() == 810 ? "200px" : "810px";
    $('#services').animate({ width: toggleWidth });
      if ($('.hide-icons').css('display') === 'none')
        $(".hide-icons").delay(500).fadeIn(1000);
      else
      $(".hide-icons").hide();
    });
    $("#dewatering").click(function(){
      $("#dewatering-content").delay(300).slideToggle(1000);
    });
 $('.slider').slider();
});
  $('.carousel.carousel-slider').carousel({fullWidth: true});