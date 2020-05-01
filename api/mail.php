<?php

if ("POST" == $_SERVER["REQUEST_METHOD"]) {
    if (isset($_SERVER["HTTP_ORIGIN"])) {
        $address = "https://".$_SERVER["SERVER_NAME"];
        if (strpos($address, $_SERVER["HTTP_ORIGIN"]) !== 0) {
            echo("CSRF protection in POST request detected invalid Origin header: was ".$_SERVER["HTTP_ORIGIN"]." but should've been ".$address);
            http_response_code(403);
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
                
                $passage_ligne = "\n";
                
                $header = "From: mail_php@axelfiolle.be".$passage_ligne;
                $header.= "Reply-To: ".$mailAdres.$passage_ligne;
                $header.= "MIME-Version: 1.0".$passage_ligne;
                $header.= "Content-Type: multipart/alternative;".$passage_ligne;
                $header.= "X-Mailer: PHP/".phpversion();
                
                //=====Création du message.
                $message = "From : ".$mailName." (".$mailAdres.")".$passage_ligne;
                $message.= $passage_ligne."Message : << ".$mailMsg." >>".$passage_ligne;
                $message.= $passage_ligne."IP: ".$userIp;
                //==========

                $query = mail("ax.fiolle@gmail.com",$mailName." (".$mailAdres.")",$message,$header);

                if ($query) {
                    http_response_code(200);
                } else {
                    echo(error_get_last());
                    http_response_code(500);
                }

            }
        }
    }
}