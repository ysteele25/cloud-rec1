<?php
 $to = "rohit.prasad@plaxonic.com";
// $subject = "This is subject";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";

// $header = "From:abc@somedomain.com \r\n";
// $header .= "Cc:afgh@somedomain.com \r\n";
// $header .= "MIME-Version: 1.0\r\n";
// $header .= "Content-type: text/html\r\n";

// $retval = mail ($to,$subject,$message,$header);

// if( $retval == true ) {
// echo "Message sent successfully...";
// }else {
// echo "Message could not be sent...";
// }

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			$mail->SMTPAuth = true;
			$mail->Username = "testingtech57@gmail.com";
			$mail->Password = "Incorrect@123";
			$mail->FromName = "Test";
			$mail->addAddress($to);
			$mail->Subject = "Test SMTP";
			$mail->msgHTML($message);


      if ($mail->send())
{
  echo 'mail sent';
}
else{
	echo $error = "Mailer Error: " . $mail->ErrorInfo;

}




?>