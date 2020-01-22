<?php
if (isset($_POST['email']) && $_POST['email'] != "") {
    
    $from                   = trim($_POST['email']);
    $nombre                 = utf8_decode($_POST['nombre']);
    $telefono               = utf8_decode($_POST['telefono']);
    $email                  = utf8_decode($_POST['email']);
    $comentario             = utf8_decode($_POST['comentario']);

    require_once('./PHPMailer/class.phpmailer.php');

    $mail = new PHPMailer(true);
    $mail->From = $email;
    $mail->FromName = $nombre;
    
    // $mail->addAddress('frkalderon@gmail.com', 'Mail');
    $mail->addAddress('contacto@rocketgdl.com', 'Mail Contacto RocketGDL');
    $mail->addReplyTo("contacto@rocketgdl.com", "Reply");
    // $mail->addCC("oscar.sahagun@rocketgdl.com");
    $mail->addCC("paulina.trujillo@rocketgdl.com");
    $mail->addBCC("tony@blueterrier.mx");
    $mail->isHTML(true);
    $mail->Subject = "Contacto RocketGDL";
    $mail->Body = "<p>". $nombre ." escribi&oacute;: </p>";
    $mail->Body.= "<p><b>Email: </b>". $email ."</p>";
    $mail->Body.= "<p><b>Telefono: </b>". $telefono ."</p>";
    $mail->Body.= "<p><b>comentario: </b>". $comentario ."</p>";
    
    $mail->AltBody = "Nombre: " . $nombre;
    $mail->AltBody .= " // " . $telefono;
    $mail->AltBody .= " // " . $email;
    $mail->AltBody .= " // " . $comentario;

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    
    else {echo "Message has been sent successfully"; }

}