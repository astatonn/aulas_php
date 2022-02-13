<?php

namespace core\classes;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EnviarEmail
{

    //======================================================================
    public function enviar_email_confirmacao_novo_cliente()
    {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 4;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = PHPMAILER_SMTP;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = PHPMAILER_USERNAME;                     //SMTP username
            $mail->Password   = PHPMAILER_PASSWORD;                               //SMTP password
            $mail->SMTPSecure = false;            //Enable implicit TLS encryption
            $mail->Port       = PHPMAILER_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(PHPMAILER_USERNAME, 'Mailer');
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addAddress('lucas.lima.rk@gmail.com', 'Lucas Lima');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'teste para envio de email';
            $mail->Body    = 'MENSAGEM DE TESTE <strong>HTMLLLLLL FOIIIIIIIIIIIIIIIIIIIIIII</strong>';


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
