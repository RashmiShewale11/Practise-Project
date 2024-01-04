<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.0.3/src/Exception.php';
require 'PHPMailer-6.0.3/src/PHPMailer.php';
require 'PHPMailer-6.0.3/src/SMTP.php';

$mail = new PHPMailer(TRUE);

try {

    $mail->setFrom('kaaate009@gmail.com', 'Kaate Master');
    $mail->addAddress('rashmimshewale11@gmail.com', 'Rashmi Shewale');
    $mail->Subject = 'Heyyyyy read the Description';
    $mail->Body = 'You know what you are awesome';

    /* SMTP parameters. */
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'kaaate009@gmail.com';
    $mail->Password = 'Tiger@123@1';
    $mail->Port = 587;

    /* Disable some SSL checks. */
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    /* Finally send the mail. */
    $mail->send();
}
catch (Exception $e)
{
    echo $e->errorMessage();
}
catch (\Exception $e)
{
    echo $e->getMessage();
}