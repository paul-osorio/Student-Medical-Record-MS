<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Email = validate($_POST['Email']);
	$pass = validate($_POST['password']);

	if (empty($Email)) {
		header("Location: index.php?error=Email is required!");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required!");
	    exit();
	}else{

		// hashing the password
        // $pass = md5($pass);

		$sql = "SELECT * FROM students WHERE Email='$Email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $Email && $row['password'] === $pass) {
            	$_SESSION['Email'] = $row['Email'];
            	$_SESSION['firstname'] = $row['firstname'];
				$_SESSION['middlename'] = $row['middlename'];
				$_SESSION['lastname'] = $row['lastname'];
            	$_SESSION['student_id'] = $row['student_id'];
            	header("Location: studDashboard.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect email or password!");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect email or password!");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
