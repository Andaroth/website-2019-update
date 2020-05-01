let isSendingMsg = false;
const validateEmail = (email) => /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email);
const sendMail = async (name,mail,msg) => {
  if (name && mail && msg && validateEmail(mail)) {
    const sendBtn = document.querySelector('#sendmail');
    $("#sendmail").prop("disabled",true);
    $("#sendmail").removeClass("enabled");
    sendBtn.innerHTML = 'Sending ...';
    isSendingMsg = true;
    const xhr = new XMLHttpRequest();
    let resMsg = '';
    try {
      xhr.onreadystatechange = function() {
        console.warn(`Returned response: ${ xhr.responseText }, ${ xhr.statusText }`);
        if (xhr.readyState == 4 && xhr.status === 200) resMsg = 'Thanks for your confidence ! Your message has been sent to the mailman :)';
        else resMsg = `I'm sorry but it didn\'t work. You can join me at this adress instead :&nbsp;<a href="mailto:ax.fiolle@gmail.com?body=${document.querySelector('#msgmail').value.toString()}">ax.fiolle@gmail.com</a>`;
      }
      xhr.open('POST', 'https://axelfiolle.be/api/mail.php', false); 
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.send(`name=${name}&mail=${mail}&msg=${msg}`);
      M.toast({ displayLength: 6000, html: resMsg });
      sendBtn.innerHTML = 'Done';
      isSendingMsg = false;
      $("#sendmail").prop("disabled",false);
      $("#sendmail").addClass("enabled");
    } catch (e) {
      console.warn(e);
      sendBtn.innerHTML = e;
    } finally {
      M.toast({ displayLength: 6000, html: resMsg });
    }
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

$("#mailform > *").keyup(() => {
  if ( ($("#nameinput").val() != '') && ($("#mailinput").val() != '') && ($("#msgmail").val() != '') && (validateEmail($("#mailinput").val())) ) {
    $("#sendmail").addClass("enabled");
    $("#sendmail").prop("disabled",false);
    $("#sendmail").removeProp("disabled");
  } else {
    $("#sendmail").removeClass("enabled");
    $("#sendmail").prop("disabled",true);
  }
});

$("#msgmail").keydown(async () => setTimeout(() => $("#msgmail")[0].style.height = $("#msgmail")[0].scrollHeight + 'px', 0));

$("#sendmail").click((e) => {
  e.preventDefault();
  const name = $("#nameinput")[0].value, mail = $("#mailinput")[0].value, msg = $("#msgmail")[0].value;
  if (name && mail && msg && name.length && mail.length && msg.length && !isSendingMsg) sendMail(name,mail,msg);
});