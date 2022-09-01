<?php

require_once 'phpmailer1/src/Exception.php';
require_once 'phpmailer1/src/PHPMailer.php';
require_once 'phpmailer1/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'testingtech57@gmail.com'; // YOUR gmail email
    $mail->Password = 'Incorrect@123'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('example@gmail.com', 'Sender Name');
    $mail->addAddress('rohit.prasad@plaxonic.com');
   
    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
    $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}



?>