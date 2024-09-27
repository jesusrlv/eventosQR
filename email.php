<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'email/Exception.php';
require 'email/PHPMailer.php';
require 'email/SMTP.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['emailT'];
    $mensaje = $_POST['mensaje'];

    $miCorreo = "info@smartevent.com.mx";

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 1;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        //$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->Host       = 'mail.smartevent.com.mx';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'info@smartevent.com.mx';                     // SMTP username
        $mail->Password   = '3vEn7o$24';                               // SMTP password
        $mail->SMTPSecure = 'SSL';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to 587

        //Recipients
        $mail->setFrom('info@smartevent.com.mx', 'MENSAJE DE USUARIO');
        $mail->addAddress($miCorreo, $nombre);     // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';                                  // Set email format to HTML
        $mail->Subject = 'MENSAJE DE USUARIO';
        $mail->Body    = 'El usuario '.$nombre.' envió el siguiente mensaje:<br><br> '.$mensaje.'<br><br>'.$email;
        $mail->AltBody = 'Mensaje usuario.';

        // $mail->send();

        if($mail->send()){
            echo json_encode(
                array(
                'success'=>1
                ));
        }
        else {
            echo json_encode(
                array(
                    'success'=>0
                ));
        }

    } catch (Exception $e) {
        echo "Error al enviar mensaje. Mailer Error: {$mail->ErrorInfo}";
        // echo $email;
        
    }



?>