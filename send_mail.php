<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  // You can set to 0 to hide debug info
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';           // Gmail SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'syedbazilaliazher@gmail.com';  // Your Gmail
    $mail->Password   = 'xxjofkdqzxjnkkeh';            // Your Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('syedbazilaliazher@gmail.com', 'Bazil');  // Sender name
    $mail->addAddress('irzaamujaddid@gmail.com', 'My Love'); // Recipient

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You Irza ❤️';
    $mail->Body    = 'Happy Valentine Dayyyyyyyy My Love of the Lifeeeeeee. I love you so much yk. You are the best thing that has ever happened to me and I cant wait to marry you and love you so much with all the resources I would have next valentine day Inn sha ALLAH ❤';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

