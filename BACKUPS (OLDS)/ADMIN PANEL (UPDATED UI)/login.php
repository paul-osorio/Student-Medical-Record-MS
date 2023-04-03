<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Email is required!");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required!");
	    exit();
	}else{

		// hashing the password
        $pass = md5($pass);

		$sql = "SELECT * FROM admins WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['password'] === $pass) {

            	$_SESSION['email'] = $row['email'];
            	$_SESSION['fname'] = $row['fname'];
					$_SESSION['lname'] = $row['lname'];
            	$_SESSION['user_id'] = $row['user_id'];
            	header("Location: adminDashboard.php");

		        exit();

            } else {
					
					header("Location: index.php?error=Incorect email or password!");
					exit();
			}

		} else{
			header("Location: index.php?error=Incorect email or password!");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
