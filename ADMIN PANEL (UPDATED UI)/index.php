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
	<title>LOGIN | ADMIN PANEL</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>HR ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email:</label>
     	<input type="text" name="uname" placeholder="Email"><br>

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">LOGIN</button>
          <a href="registration.php" class="ca">Create an account</a>
     </form>
</body>
</html>