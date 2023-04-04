<?php

   session_start();

   $stud_id = $_SESSION['otp_stud_id'];
   $email = $_SESSION['otp_email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../assets/favcon.png" type="image/x-icon">
   <link rel="stylesheet" href="./css/register.css">
   <title> Regiter your Email | QCU CMS </title>
</head>
<body>

   <header>

      <div class="img-handler">
         <img src="../clinic-logo.png" alt="">
      </div>

      <div class="qcu-title">
         <h1> Welcome to Quezon City University Clinic </h1>
      </div>

   </header>
   
   <main>
      <form action="../process/validate_otp.php" method="POST" class="verify-otp">
         <div class="form-input">
            <label for="otp"> Enter OTP </label>
            <p> We sent an OTP to your email <b> <?=$email?> </b> </p>
            <input type="text" name="otp" id="otp" maxlength="6" minlength="6"> 
         </div>

         <div class="form-button">
            
            <input type="submit" name="send-otp-btn" value="Submit OTP" />

         </div>
      </form>
   </main>
</body>
</html>