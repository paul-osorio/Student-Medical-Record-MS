<?php

   // require "../vendor/autoload.php";
   
   // use PHPMailer\PHPMailer\PHPMailer;
   // use PHPMailer\PHPMailer\SMTP;

   // // include_once "../../PHPMailer/src/Exception.php";
   // // include_once "../../PHPMailer/src/PHPMailer.php";
   // // include_once "../../PHPMailer/src/SMTP.php";

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\SMTP;
   
   require 'PHPMailer/src/Exception.php';
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';
      
   
   function generateOTP($len){

      $characters = '0123456789';

      $code = '';

      for ($i = 0; $i < $len; $i++) {

          $code .= $characters[rand(0, strlen($characters) - 1)];
      }

      return $code;

   }


   function sendOTP($email, $otp) {

      $mess = "";
      $mess .= "<h2> Verification Code </h2>";
      $mess .= "<p> To verify your account and complete the sign in, enter this code in your Student Medical Record MS Account: </p> ";

      $mess .= "OTP Code: <b> $otp </b>";

      $mess .= "<p> Verification codes expire after 30 minutes. </p>";

      $mess .= "<p> If you didn't request this code, you can ignore this message.</p>";

      $mess .= "<p> Thanks, </p>";

      $mess .= "<p> The Student Medical Record MS Team </p>";

      $mail = new PHPMailer(true);
  
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'studmed.recordms.2023@gmail.com';
      $mail->Password = 'wemzznitphaijzqd';

      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;
  
      
      $mail->setFrom('qcucms.codies@qcu.ph', 'no-reply@gmail.com');
      $mail->addAddress($email);
      $mail->Subject = "This is your OTP Code $otp";
      $mail->Body = $mess;
      $mail->isHTML(true);
      $mail->send();

      return $mail;

   }

?>