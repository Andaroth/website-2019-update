$(document).ready(function(){
  // AT START ---------------------------------------
  var vpHeight = $(window).height();
  var vpWidth = $(window).width();
  var docHeight = $(document).height();
  var scrollTop = $(document).scrollTop();
  $(".jhide").addClass("hidden");
  $(".jpacity").addClass("nopacity");
  if (scrollTop <= 100) {
    $("#landingscroll").removeClass("hide");
    $("footer").addClass("hidden");
  } else {
    $("#landingscroll").addClass("hide");
    $("footer").removeClass("hidden");
  }
  // FUNCTIONS ---------------------------------------
  function scrollTo(target,speed,fade) {
    var targetPos = $(target).offset().top;
    $("html, body").animate(
      {
        scrollTop: targetPos
      }, speed
    ).fadeIn(fade);
  }
  function validateEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
  }
  // SCROLLS --------------------------------------- 
  $(document).scroll(function(e) {
    $("#visitmenu").removeClass("shown");
    $("span.and").addClass("rotate");
    scrollTop = $(document).scrollTop();
    console.log("scrollTop : "+scrollTop);
    if (scrollTop <= 100) {
      $("#landingscroll").removeClass("hide");
      $("footer").addClass("hidden");
    } else {
      $("#landingscroll").addClass("hide");
      $("footer").removeClass("hidden");
    }
    if ($("#mozaicTrigger").visible(true)){
      $(".skill-tile").removeClass("nopacity");
    }
  });
  // CLICKS ---------------------------------------
  $(".scrollback").click(function(e) {
    e.preventDefault();
    var target = $(this).attr("href");
    scrollTo(target,1000,500);
  })
  $("#visitlink").click(function(e) {
    e.preventDefault();
    $("#visitmenu").toggleClass("shown");
    $("span.and").toggleClass("rotate");
  });
  $(".contactlink").click(function(e){
    e.preventDefault();
    $("html, body").animate({scrollTop: docHeight}, 2500).fadeIn(1000);
  });
  $("#errorclose").click(function(e) {
    e.preventDefault();
    $("#mailtab").addClass("hidden");
  });
  // FORM ---------------------------------------
  $("#mailform > *").keyup(function(){
    if (
      ($("#nameinput").val() != '') &&
      ($("#mailinput").val() != '') &&
      ($("#msgmail").val() != '') &&
      (validateEmail($("#mailinput").val()))
    ) {
      $("#sendmail").addClass("enabled");
      $("input[type=submit].sendmail").prop("disabled",false);
      $("input[type=submit].sendmail").removeProp("disabled");
      console.log("yup");
    } else {
      $("#sendmail").removeClass("enabled");
      $("input[type=submit].sendmail").prop("disabled",true);
      console.log("nope");
    }
  });
  // HANDLE ---------------------------------------
  /*$("#msgmail").resize(function(){
    $(".section:last-child").css("margin-bottom",$("#footer").heigh());
  });*/
  // SLICK ---------------------------------------
  //websites
  $("#webslide").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  //photo
  $("#viewphotoslide").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    arrows: false,
    slidesToShow: 1,
    asNavFor: '#photoslide',
  });
  $("#photoslide").slick({
    dots: false,
    infinite: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 4000,
    slidesToShow: 3,
    asNavFor: '#viewphotoslide',
  });
  
});