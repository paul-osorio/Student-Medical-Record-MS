<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION | ADMIN PANEL</title>
	<link rel="stylesheet" type="text/css" href="./css/adminRegistration.css">
</head>
<body>
     <form action="registrationValidation.php" method="post">
     	<h2>HR ADMIN SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
		
        <label>First Name:</label>
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
        
        <label>Last Name:</label>
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

     	<label>Email:</label>
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

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password" required><br>

		<label>Confirm Password:</label>
     	<input type="password" name="re_password" placeholder="Confirm Password" required><br>

     	<button type="submit">SIGN UP</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>


