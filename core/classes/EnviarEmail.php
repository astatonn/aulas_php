<?php

namespace core\classes;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EnviarEmail
{

    //======================================================================
    public function enviar_email_confirmacao_novo_cliente($email_cliente, $purl)
    {
        $link = BASE_URL . '?action=confirmar_email&purl='.$purl;
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = PHPMAILER_SMTP;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = PHPMAILER_USERNAME;                     //SMTP username
            $mail->Password   = PHPMAILER_PASSWORD;                               //SMTP password
            $mail->SMTPSecure = false;            //Enable implicit TLS encryption
            $mail->Port       = PHPMAILER_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(PHPMAILER_USERNAME, 'Mailer');
            $mail->addReplyTo($email_cliente, 'Information');
            $mail->addAddress('lucas.lima.rk@gmail.com', 'Lucas Lima');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = APP_NAME . ' - Confirmação de email';
            $html = '<p>Seja bem-vindo à nossa loja ' . APP_NAME . '.</p>';
            $html .= '<p>Para pode entrar na nossa loja, necesista confirmar teu email. </p>';
            $html .= '<p>Para confirmar o email, click no link abaixo: </p>';
            $html .= '<p><a href="'.$link.'">Confirmar Email</a></p>';
            $html .= '<p><i><small>'.APP_NAME.'</p></i></small>';
            $mail->Body    = $html;


            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
