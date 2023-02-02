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
     <form action="login.php" method="post">
     	<h2>STUDENT SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <label>First Name:</label>
     	<input type="text" name="fname" placeholder="First Name"><br>
        
        <label>Middle Name:</label>
     	<input type="text" name="mname" placeholder="Middle Name"><br>
        
        <label>Last Name:</label>
     	<input type="text" name="lname" placeholder="Last Name"><br>
        
        <label>Student ID:</label>
     	<input type="text" name="student_id" placeholder="Student ID"><br>

     	<label>Email:</label>
     	<input type="text" name="uname" placeholder="Email"><br>

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">SIGN UP</button>
        <p>
			Already have an account? <a href="index.php">LOGIN</a>
		</p>
     </form>

     <div class="footer">
    
     <div>
</body>
</html>