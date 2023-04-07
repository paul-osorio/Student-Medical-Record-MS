<?php
	error_reporting(0);
	session_start();
	include_once 'insert_data.php';
	include_once 'insert_new_patient.php';
	include('db_conn.php');
	

  $emp_id = $_SESSION['emp_id'];

  if(!empty($emp_id)) {

	header("location: ./nurseDashboard.php");
	 
  }

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="./assets/favcon.png"/>
	<title>SMRMS | NURSE | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<img
    class="demo-bg"
    src="./assets/login_bg.jpg"
    alt=""
  	>
     <form action="login.php" method="post">
	 	
     	<h2><img src="./assets/QCUClinicLogo.png" alt="">NURSE LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username:</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="login_btn">LOGIN</button>
     </form>
</body>
</html>