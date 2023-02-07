<!DOCTYPE html>
<html>
<head>
	<title>LOGIN | STUDENT PANEL</title>
	<link rel="stylesheet" type="text/css" href="./css/studLogin.css">
</head>
<body>
     <form action="loginValidation.php" method="post">
     	<h2>STUDENT LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		
     	<label>School Registered Email:</label>
     	<input type="text" name="uname" placeholder="School Registered Email"><br>

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">LOGIN</button>
          <a href="registration.php" class="ca">Create an account</a>
     </form>
</body>
</html>