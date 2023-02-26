<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION | STUDENT PANEL</title>
	<link rel="stylesheet" type="text/css" href="./css/registration.css">
</head>
<body>
    <div class="header">
    <br><br>
    <div> 
     <form action="studRegistrationValidation.php" method="post">
     	<h2>STUDENT SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>First Name:</label>
		<?php if (isset($_GET['firstname'])) { ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="First Name"
                      value="<?php echo $_GET['firstname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="First Name"><br>
          <?php }?>
        
        <label>Middle Name:</label>
		<?php if (isset($_GET['middlename'])) { ?>
               <input type="text" 
                      name="middlename" 
                      placeholder="Middle Name"
                      value="<?php echo $_GET['middlename']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="middlename" 
                      placeholder="Middle Name"><br>
          <?php }?>
        
        <label>Last Name:</label>
		<?php if (isset($_GET['lastname'])) { ?>
               <input type="text" 
                      name="lastname" 
                      placeholder="Last Name"
                      value="<?php echo $_GET['lastname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lastname" 
                      placeholder="Last Name"><br>
          <?php }?>
        
        <label>Student ID:</label>
		<?php if (isset($_GET['student_id'])) { ?>
               <input type="text" 
                      name="student_id" 
                      placeholder="Student ID"
                      value="<?php echo $_GET['student_id']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="student_id" 
                      placeholder="Student ID"><br>
          <?php }?>

     	<label>School Registered Email:</label>
		 <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="School Registered Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="School Registered Email"><br>
          <?php }?>

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password" required><br>

		<label>Confirm Password:</label>
     	<input type="password" name="re_password" placeholder="Confirm Password" required><br>

     	<button type="submit">SIGN UP</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>

     <div class="footer">
    
     <div>
</body>
</html>