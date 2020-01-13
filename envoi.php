<?php
$mail=$_POST['mail'];
$message=$_VARS['message'];
 
$headers = "MIME-Version: 1.0\r\n";
  
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";
 
$nom="Quelqu'un";
$telephone="068628924798473479487349735795";
$destinataire="contact@thinker-conference.fr";
$body="$message";
if (mail($destinataire,$nom,$telephone,$body,$headers)) {
echo "Votre mail a été envoyé<br>";
} else {
echo "Une erreur s'est produite";
}
?>