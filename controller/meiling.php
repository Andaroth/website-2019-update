<?php
error_reporting(0);

ini_set('display_errors', 0);
	if( 
		(($_POST) != NULL) && 
    (($_POST['name']) != NULL) && 
    (($_POST['msg']) != NULL) && 
    (filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) 
	){
		
		$mailName = htmlentities(addslashes($_POST['name']));
		$mailAdres = htmlentities(addslashes($_POST['mail']));
		$mailMsg = htmlentities(addslashes($_POST['msg']));
		
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", "ax.fiolle@gmail.com")) 
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
		
		$boundary = "-----=".md5(rand());
		
		$header = "From: \"Formulaire (".$siteDomain.")\" <mail_php@".$siteDomain.">".$passage_ligne;
		$header.= "Reply-to: \"".$mailName."\" <".$mailAdres.">".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		
		//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$mailMsg.$passage_ligne;
    $message.= $passage_ligne."USER IP: ".$userIp;
		//==========
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
		
		$sendMail = mail("ax.fiolle@gmail.com",$mailName." (".$mailAdres.")",$message,$header);

		$warnMsg = ($sendMail) ? 'Thanks for your confidence ! Your message has been sent to the mailman :)' : 'I\'m sorry but it didn\'t work. You can join me at this adress instead : &lt;<a href="mailto:ax.fiolle@gmail.com?body='.$mailMsg.'"><i><adress>ax.fiolle@gmail.com</adress></i></a>&gt;</p><p>Your message was :<br><cite class="mailcite">'.$mailMsg.'</cite>';
		$warnHTML = 
		'<div id="sendmailstatus" class="modal">
			<div class="modal-content">
				<p>'.$warnMsg.'</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="modal-close btn waves-effect">Close</a>
			</div>
		</div>';
		echo $warnHTML;
		
	} // ifend