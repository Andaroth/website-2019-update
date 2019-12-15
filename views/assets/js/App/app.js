$(document).ready(function(){
  // AT START ---------------------------------------
  let vpHeight = $(window).height();
  let vpWidth = $(window).width();
  let docHeight = $(document).height();
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
  function scrollTo(target,speed,fade) {
    const targetPos = $(target).offset().top;
    $("html, body").animate(
      {
        scrollTop: targetPos
      }, speed
    ).fadeIn(fade);
  }
  function validateEmail(email) {
    const regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
  }
  function sendMail(name,mail,msg) {
    console.log('sendMail(name,mail,msg)')
    if (!validateEmail(mail)) return false
    if (name && mail && msg && validateEmail(mail)) {
      const sendBtnContent = document.querySelector('#sendmail').innerHTML
      document.querySelector('#sendmail').innerHTML = 'Sending ...'
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'https://axelfiolle.be/api/mail.php', false); 
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

      let resMsg = ''
      let mailTo = ''

      xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status === 200) {
          console.log("Réponse reçue: %s", xhr.responseText);
          resMsg = 'Thanks for your confidence ! Your message has been sent to the mailman :)';
        } else {
          console.warn("Status de la réponse: %d (%s)", xhr.status, xhr.statusText);
          resMsg = 'I\'m sorry but it didn\'t work. You can join me at this adress instead : ax.fiolle@gmail.com';
        }
        M.toast({
          displayLength: 6000,
          html: resMsg
        })
        document.querySelector('#sendmail').innerHTML = sendBtnContent
      }

      xhr.send(`name=${name}&mail=${mail}&msg=${msg}`);

    } else {
      console.warn('sendMail('+name+','+mail+','+msg+')=> undefined param')
    }
  }
  // SCROLLS --------------------------------------- 
  $(document).scroll(function(e) {
    $("span.and").addClass("rotate");
    scrollTop = $(document).scrollTop();
    // console.log("scrollTop : "+scrollTop);
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
    // $("#visitlink").close();
  });
  // CLICKS ---------------------------------------
  $(".scrollback").click(function(e) {
    e.preventDefault();
    const target = $(this).attr("href");
    scrollTo(target,1000,500);
  })
  /* $("#visitlink").click(function(e) {
    e.preventDefault();
    $("#visitmenu").toggleClass("shown");
    $("span.and").toggleClass("rotate");
  }); */
  $(".contactlink").click(function(e){
    e.preventDefault();
    $("html, body").animate({scrollTop: docHeight}, 2500).fadeIn(1000);
  });
  $("#errorclose").click(function(e) {
    e.preventDefault();
    $("#mailtab").addClass("hidden");
  });
  $("#sendmail").click((e)=>{
    // console.log('$("#sendmail").click')
    e.preventDefault();
    const name = $("#nameinput")[0].value
    const mail = $("#mailinput")[0].value
    const msg = $("#msgmail")[0].value
    if (name && mail && msg && name.length && mail.length && msg.length) {
      sendMail(name,mail,msg)
    }
  })
  $("#visitlink").dropdown();
  $('.collapsible').collapsible();
  $('.materialboxed').materialbox();

  // FORM ---------------------------------------
  $("#mailform > *").keyup(function(){
    if (
      ($("#nameinput").val() != '') &&
      ($("#mailinput").val() != '') &&
      ($("#msgmail").val() != '') &&
      (validateEmail($("#mailinput").val()))
    ) {
      $("#sendmail").addClass("enabled");
      $("#sendmail").addClass("pulse");
      $("#sendmail").prop("disabled",false);
      $("#sendmail").removeProp("disabled");
      // console.log("yup");
    } else {
      $("#sendmail").removeClass("enabled");
      $("#sendmail").removeClass("pulse");
      $("#sendmail").prop("disabled",true);
      // console.log("nope");
    }
  });
  $("#msgmail").keydown(()=>{
    // console.log('Ouïlle')
    setTimeout(()=>$("#msgmail")[0].style.height = $("#msgmail")[0].scrollHeight + 'px',0)
  })
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
  $("#viewphotoslide").carousel({
    fullWidth: true,
    numVisible: 1,
    indicators: true
  });
  /* $("#viewphotoslide").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    arrows: false,
    slidesToShow: 1,
    asNavFor: '#photoslide',
  }); */
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