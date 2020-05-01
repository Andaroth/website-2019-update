$(document).ready(function(){

  // Setting needed global const
  const PAGE_INFOS = {
    url: window.location.href || document.URL,
    name: (window.location.href || document.URL).slice((window.location.href || document.URL).search('page-')+5,(window.location.href || document.URL).length)
  };
  // AT START ---------------------------------------
  const docHeight = $(document).height();
  let scrollTop = $(document).scrollTop();
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
  const scrollTo = (target,speed,fade) => $("html, body").animate({scrollTop: $(target).offset().top}, speed).fadeIn(fade);
  // SCROLLS --------------------------------------- 
  $(document).scroll((e) => {
    $("span.and").addClass("rotate");
    scrollTop = $(document).scrollTop();
    if (scrollTop <= 100) {
      $("#landingscroll").removeClass("hide");
      $("footer").addClass("hidden");
    } else {
      $("#landingscroll").addClass("hide");
      $("footer").removeClass("hidden");
    }
    if ($("#mozaicTrigger").visible(true)) $(".skill-tile").removeClass("nopacity");
  });
  // CLICKS ---------------------------------------
  $(".scrollback").click((e) => {
    e.preventDefault();
    const target = $(e.currentTarget.getAttribute('href'));
    scrollTo(target,1000,500);
  });
  $(".contactlink").click((e) => {
    e.preventDefault();
    $("html, body").animate({scrollTop: docHeight}, 2500).fadeIn(1000);
  });
  $("#errorclose").click((e) => {
    e.preventDefault();
    $("#mailtab").addClass("hidden");
  });
  $("#visitlink").dropdown();
  $('.collapsible').collapsible();
  $('.materialboxed').materialbox();
  // FORM ---------------------------------------
  
}); // ready end