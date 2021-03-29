<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/user/vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "exampleMail@gmail.com"; // Ange mail som skall användas OBS! Behöver ändra settings på google konto för att tillåta less secure apps
    $pass = 'pass'; // Lösenord för kontot som skall skicka mail
    $mail->Password = $pass;

    $mail->SMTPSecure = 'tls'; // tls eller sls (tls med google konton)
    $mail->Port = 587;

    $mail->setFrom('sender@example.com', 'Admin'); // Lite oklart med denna rad bort sätt från att kontot som skickar får namnet Admin i detta fall
    //$mail->addAddress('test@example.net', 'Recipient1');
    $mail->addAddress('testmail@gmail.com'); // Till vem mailet skickas
    //$mail->addReplyTo('noreply@example.com', 'noreply');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/backup/myfile.tar.gz'); // Bifogade filer skall experimentera vidare med

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail Subject!'; // Ämnes rad
    $mail->Body    = 'This is SMTP Email Test'; // Mail content
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}