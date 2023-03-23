<?php
     error_reporting(0);
     session_start();


     $id = $_SESSION['user_id'];

     if(!empty($id)) {
     header("location: ./adminDashboard.php");
     }
?>

<!DOCTYPE html>
<html>
<head>
     <link rel="icon" type="image/png" href="./assets/favcon.png"/>
	<title>REGISTRATION | SMRMS | ADMIN</title>
	<link rel="stylesheet" type="text/css" href="./css/adminRegistration.css">
</head>
<body>
     <form action="registrationValidation.php" method="post">
          <div class="header_login">
               <img src="./assets/QCUClinicLogo.png" alt="">
               <h2>ADMIN SIGN UP</h2>
          </div>
          <div class="input_wrapper">

               <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>
     
               <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
               
               <?php if (isset($_GET['fname'])) { ?>
                    <input type="text" 
                           name="fname" 
                           placeholder="First Name"
                           value="<?php echo $_GET['fname']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="fname" 
                           placeholder="First Name"><br>
               <?php }?>
             
               <?php if (isset($_GET['lname'])) { ?>
                    <input type="text" 
                           name="lname" 
                           placeholder="Last Name"
                           value="<?php echo $_GET['lname']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="lname" 
                           placeholder="Last Name"><br>
               <?php }?>
     
               <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" 
                           name="uname" 
                           placeholder="Email"
                           value="<?php echo $_GET['uname']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="uname" 
                           placeholder="Email"><br>
               <?php }?>
     
               <input type="password" name="password" placeholder="Password" required><br>
     
               <input type="password" name="re_password" placeholder="Confirm Password" required><br>
          </div>

          <div class="button_wrapper">
               <a href="index.php" class="ca">Already have an account?</a>
               <button type="submit">SIGN UP</button>
          </div>
     </form>
</body>
</html>


