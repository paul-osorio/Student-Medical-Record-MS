<?php
   error_reporting(0);
   session_start();


   include "../redo/includes/db_con.php";
   include "../redo/functions/student_function.php";

   $stud_id = $_SESSION['pass-stud_id'];
   $email = $_SESSION['pass-email'];

   $err =  $_SESSION['err'];

   if(isset($_POST['set-pass-btn'])) {

      $newPass = $_POST['newPass'];
      $confirmPass = $_POST['confirmPass'];

      if($confirmPass === $newPass){

         $new_password = $newPass;

         // set password
         $result = setNewPassword($conn, $stud_id, $new_password);

         if(!$result){

            echo mysqli_error($conn);

         } else {

            // session_unset();
            header("location: ./survey-form.php");
         }

      } else {

         $_SESSION['err'] = "Password didn't match";

      }
      


   }
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
      <form action="./set-new-password.php" method="POST" class="set-pass">

         <div class="form-input">

             <label for="email"> Email </label>

            <input type="text" name="email" id="email" value="<?=$email?>" readonly>

         </div>

         <div class="form-input">
            
            <label for="new-pass"> New Password </label>

            <input type="password" name="newPass" id="new-pass">

         </div>

         <div class="form-input">
            
            <label for="confirm-pass"> Confirm Password <span style="color: var(--decline)"> <?=$err?> </span> </label>

            <input type="password" name="confirmPass" id="confirm-pass">

         </div>

         <div class="form-checkbox">
            
            <label for="show-pass"> Show password </label>

            <input type="checkbox" name="" id="show-pass">

         </div>


         <div class="form-button">
            <input type="submit" value="Set Password" name="set-pass-btn">
         </div>

      </form>
   </main>
</body>
<script>
   const showPassword = document.getElementById('show-pass');
   
   const newPass = document.getElementById('new-pass');
   const confirmPass = document.getElementById('confirm-pass');
   
   
   showPassword.addEventListener('change', (e) => {
   
      // console.log(showPassword.checked);
   
      if(showPassword.checked === true) {
   
       
         newPass.type = 'text';
         confirmPass.type = 'text';
      } else {
         
         newPass.type = 'password';
         confirmPass.type = 'password';
      }
   
   });

</script>
</html>