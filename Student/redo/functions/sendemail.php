<?php
   
   require "../../vendor/autoload.php";
        
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;

   function sendEmail($email, $subject, $mess, $title) {

      $mail = new PHPMailer(true);
  
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'studmed.recordms.2023@gmail.com';
      $mail->Password = 'btzftzujzzqnxyka';
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;
  
      
      $mail->setFrom('qcucms.codies@qcu.ph', $title);
      $mail->addAddress($email);
      $mail->Subject = $subject;
      $mail->Body = $mess;
      $mail->isHTML(true);
      $mail->send();

      return $mail;

   }

?>

