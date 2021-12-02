<?php  // Le ou les destinataires
  $to  = "betaprefritte-2236@yopmail.com "; // notez la virgule pour ajouter un destinataire en plus
  
  
  // Le sujet du mail
  $subject = "adresse mail perdue";
  
  // Le message a envoyer
  $message = "demande de réinitialisation de mon adesse mail";
    
  // Pour envoyer un mail en HTML, l'en-tête Content-type doit être défini comme ceci
//   $headers  = 'MIME-Version: 1.0' . "\r\n";
//   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  
  // En-têtes additionnels
//   $headers .= 'To: Pierre <piero@example.com>, Lola <lolita@example.com>' . "\r\n";
  $headers = 'From: moi <bayart.jonathan@laposte.net>';
 
  // Envoi du mail avec un message HTML

  mail($to, $subject, $message, $headers);
?>


