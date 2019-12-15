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
  const validateEmail =(email) => /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email);
  const sendMail = async (name,mail,msg) => {
    console.log('sendMail(name,mail,msg)')
    if (name && mail && msg && validateEmail(mail)) {
      const sendBtnContent = document.querySelector('#sendmail').innerHTML;
      const sendBtn = document.querySelector('#sendmail');
      sendBtn.innerHTML = 'Sending ...';
      const xhr = new XMLHttpRequest();
      let resMsg = '', mailTo = '';
      xhr.onreadystatechange = function() {
        console.warn(`Returned response: ${ xhr.responseText }, ${ xhr.statusText }`);
        if(xhr.readyState == 4 && xhr.status === 200) resMsg = 'Thanks for your confidence ! Your message has been sent to the mailman :)';
        else resMsg = 'I\'m sorry but it didn\'t work. You can join me at this adress instead :&nbsp;<a href="mailto:ax.fiolle@gmail.com">ax.fiolle@gmail.com</a>';
      }
      xhr.open('POST', 'https://axelfiolle.be/api/mail.php', false); 
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      await xhr.send(`name=${name}&mail=${mail}&msg=${msg}`);
      M.toast({ displayLength: 6000, html: resMsg });
    } else if (!name || !mail || !msg || (!name.length > 0) || (!mail.length > 0) || (!msg.length > 0)) {
      resMsg = "You missed some fields";
      M.toast({ displayLength: 6000, html: resMsg });
      console.warn('sendMail('+name+','+mail+','+msg+')=> undefined param')
    } else if (!validateEmail(mail)) {
      resMsg = "Invalid email";
      M.toast({ displayLength: 6000, html: resMsg });
      console.warn('sendMail('+name+','+mail+','+msg+')=> Email is not valid')
    }
  }
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
    const target = $(this).attr("href");
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
  $("#sendmail").click((e) => {
    e.preventDefault();
    const name = $("#nameinput")[0].value, mail = $("#mailinput")[0].value, msg = $("#msgmail")[0].value;
    if (name && mail && msg && name.length && mail.length && msg.length) sendMail(name,mail,msg);
  });
  $("#visitlink").dropdown();
  $('.collapsible').collapsible();
  $('.materialboxed').materialbox();
  // FORM ---------------------------------------
  $("#mailform > *").keyup(() => {
    if ( ($("#nameinput").val() != '') && ($("#mailinput").val() != '') && ($("#msgmail").val() != '') && (validateEmail($("#mailinput").val())) ) {
      $("#sendmail").addClass("enabled");
      $("#sendmail").addClass("pulse");
      $("#sendmail").prop("disabled",false);
      $("#sendmail").removeProp("disabled");
    } else {
      $("#sendmail").removeClass("enabled");
      $("#sendmail").removeClass("pulse");
      $("#sendmail").prop("disabled",true);
    }
  });
  $("#msgmail").keydown(() => setTimeout(()=>$("#msgmail")[0].style.height = $("#msgmail")[0].scrollHeight + 'px',0));
}); // ready end