<form id="mailform" class="contact formbox" action="./" method="post">
    <i class="fa fa-comments" aria-label="mailbox"></i>
    <h3>Tell me what you need</h3>
    <p id="alertmail" class="nomobile">/!\ Each input field must be filled. </p>
    <label for="nameinput">Your name</label>
    <input id="nameinput" type="text" name="name" placeholder="Your name">
    <label for="mailinput">Your email</label>
    <input id="mailinput" type="email" name="mail" placeholder="Your email">
    <label for="msgmail">Your message</label>
    <textarea id="msgmail" rows="5" cols="60" name="msg" placeholder="Describe your needs or say something gentle :)"></textarea>
    <button id="sendmail" class="waves-effect sendmail" type="submit" disabled><span>Send</span> <i class="fas fa-paper-plane"></i></button>
  </form>
