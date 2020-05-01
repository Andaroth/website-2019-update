<?php

if ("POST" == $_SERVER["REQUEST_METHOD"]) {
    if (isset($_SERVER["HTTP_ORIGIN"])) {
        $address = "https://axelfiolle.be";
        if (strpos($address, $_SERVER["HTTP_ORIGIN"]) !== 0) {
            exit("CSRF protection in POST request: detected invalid Origin header: ".$_SERVER["HTTP_ORIGIN"]);
        } else {
            if( 
                (($_POST) != NULL) && 
                (($_POST['name']) != NULL) && 
                (($_POST['msg']) != NULL) && 
                (filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) 
            ){
                
                $mailName = htmlentities(addslashes($_POST['name']));
                $mailAdres = htmlentities(addslashes($_POST['mail']));
                $mailMsg = htmlentities(addslashes($_POST['msg']));

                $userIp = (!empty($_SERVER['HTTP_CLIENT_IP'])) ? $_SERVER['HTTP_CLIENT_IP'] : (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
                
                if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", "ax.fiolle@gmail.com")) 
                {
                    $passage_ligne = "\r\n";
                }
                else
                {
                    $passage_ligne = "\n";
                }
                
                $boundary = "-----=".md5(rand());
                
                $header = "From: \"Formulaire (axelfiolle.be)\" <mail_php@axelfiolle.be>".$passage_ligne;
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

                if ($sendMail) {
                    http_response_code(200);
                } else {
                    http_response_code(500);
                }
            }
        }
    }
}