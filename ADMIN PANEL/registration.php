<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION | ADMIN PANEL</title>
	<link rel="stylesheet" type="text/css" href="./css/adminRegistration.css">
</head>
<body>
     <form action="registrationValidation.php" method="post">
     	<h2>ADMIN SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
		
        <label>First Name:</label>
     	<input type="text" name="fname" placeholder="First Name" required><br>
        
        <label>Last Name:</label>
     	<input type="text" name="lname" placeholder="Last Name" required><br>

     	<label>Email:</label>
     	<input type="text" name="uname" placeholder="Email" required><br>

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password" required><br>

		 <label>Confirm Password:</label>
     	<input type="text" name="re_password" placeholder="Confirm Password" required><br>

     	<button type="submit">SIGN UP</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>


