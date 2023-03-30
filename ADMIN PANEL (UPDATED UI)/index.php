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
	<title>SMRMS | ADMIN | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	 <form action="login.php" method="post">
     	<div class="header_login">
			<img src="./assets/QCUClinicLogo.png" alt="">
			ADMIN LOGIN
		</div>
		<div class="input_wrapper">
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<div class="input">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="uname" placeholder="Username">
			</div>
				<span></span>
			<div class="input">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password">
			</div>

		</div>

     	<button type="submit">LOGIN</button>
          <center><a href="registration.php" class="ca">Create an account</a> </center>
     </form>
</body>
</html>