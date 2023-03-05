
<?php
$email = $_POST["email"];
$otp_code = $_POST["otp_code"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com' ;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587; //TSL
// $mail->Port = 465; //SSL

// $mail->Username = "Mistergrandph@gmail.com";
// $mail->Password = "tdnshdzapjuwrbkw";

$mail->Username = "arnejovincent03@gmail.com";
$mail->Password = "ceecdhnpjkshnpqn";

$mail->setFrom("arnejovincent03@gmail.com", "my name");
// $mail->addAddress("arnejovincent03@gmail.com", "MGP INQUERIES");
$mail->addAddress($email, "");//RECEPIENTS



$mail->Subject = "OTP PASSWORD";
$mail->Body = $otp_code;

$mail-> send();

    
    header("Location: student-verify-otp.php");
?>