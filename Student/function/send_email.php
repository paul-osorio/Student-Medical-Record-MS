<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function send_otp($email, $otp_code) {

   $mail = new PHPMailer(true);
   
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'studmed.recordms.2023@gmail.com';
   $mail->Password = 'btzftzujzzqnxyka';
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   $mail->Port = 587;

   
   $mail->setFrom('studmed.recordms.2023@gmail.com', 'Student Medical Record MS');
   $mail->addAddress($email);
   // $mail->addEmbeddedImage('email/images/image-1.jpeg', '@image');
   $mail->Subject = "$otp_code is your verification code";
   $mail->Body = "Verification Code

   To verify your account and complete the sign in, enter this code in your Student Medical Record MS Account:


   " 
   . $otp_code . 
   "


   Verification codes expire after 30 minutes.

   If you didn't request this code, you can ignore this message.


   Thanks,
   The Student Medical Record MS Team";;
   $mail->isHTML(false);
   $mail->send();


   return $mail;

   // $mail = new PHPMailer(true);

   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

   // $mail->isSMTP();
   // $mail->SMTPAuth = true;

   // $mail->Host = 'smtp.gmail.com' ;
   // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   // $mail->Port = 587; //TSL

   // $mail->Username = "studmed.recordms.2023@gmail.com";
   // $mail->Password = "btzftzujzzqnxyka";


   // $mail->setFrom("studmed.recordms.2023@gmail.com", "Student Medical Record MS");
   // $mail->addAddress($email);//RECEPIENTS



   // $mail->Subject = $otp_code . " is your verification code";
   // $mail->Body = "Verification Code

   // To verify your account and complete the sign in, enter this code in your Student Medical Record MS Account:


   // " 
   // . $otp_code . 
   // "


   // Verification codes expire after 30 minutes.

   // If you didn't request this code, you can ignore this message.


   // Thanks,
   // The Student Medical Record MS Team";

   // $mail-> send();
   
}

