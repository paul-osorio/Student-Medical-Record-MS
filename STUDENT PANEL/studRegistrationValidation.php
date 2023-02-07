<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['fname']) && isset($_POST['mname']) 
    && isset($_POST['lname']) && isset($_POST['student_id'])
    && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
    $student_id = validate($_POST['student_id']);
	$fname = validate($_POST['fname']);
    $mname = validate($_POST['mname']);
    $lname = validate($_POST['lname']);

	$user_data = 'uname='. $uname. '&fname='. $fname. '&mname='. $mname. '&lname='. $lname. '&student_id='. $student_id;


	if (empty($uname)) {
		header("Location: registration.php?error=Email is required&$user_data");
	    exit();
	}
    else if(empty($pass)){
        header("Location: registration.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($re_pass)){
        header("Location: registration.php?error=Confirm Password is required&$user_data");
	    exit();
	}

	else if(empty($fname)){
        header("Location: registration.php?error=First Name is required&$user_data");
	    exit();
	}

    else if(empty($mname)){
        header("Location: registration.php?error=Middle Name is required&$user_data");
	    exit();
	}

    else if(empty($lname)){
        header("Location: registration.php?error=Last Name is required&$user_data");
	    exit();
	}

    else if(empty($student_id)){
        header("Location: registration.php?error=Student ID is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: registration.php?error=The confirmation password does not match.&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM students WHERE Email='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: registration.php?error=The email is taken, try another.&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO students(student_id, lastname, firstname, middlename, Email, password) VALUES('$student_id', '$lname', '$fname', '$mname', '$uname', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: registration.php?success=Your account has been created successfully!");
	         exit();
           }else {
	           	header("Location: registration.php?error=Unknown error occurred!&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: registration.php");
	exit();
}