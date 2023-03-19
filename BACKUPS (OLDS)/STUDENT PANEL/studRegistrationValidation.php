<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['firstname']) && isset($_POST['middlename']) 
    && isset($_POST['lastname']) && isset($_POST['student_id'])
    && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$firstname = validate($_POST['firstname']);
    $middlename = validate($_POST['middlename']);
    $lastname = validate($_POST['lastname']);
    $student_id = validate($_POST['student_id']);

	$user_data = 'email='. $email. '&firstname='. $firstname. '&middlename='. $middlename. '&lastname='. $lastname. '&student_id='. $student_id;


	if (empty($email)) {
		header("Location: registration.php?error=Email is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: registration.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: registration.php?error=Confirm Password is required&$user_data");
	    exit();
	}

	else if(empty($firstname)){
        header("Location: registration.php?error=First Name is required&$user_data");
	    exit();
	}

    else if(empty($middlename)){
        header("Location: registration.php?error=Middle Name is required&$user_data");
	    exit();
	}

    else if(empty($lastname)){
        header("Location: registration.php?error=Last Name is required&$user_data");
	    exit();
	}


	else if($pass !== $re_pass){
        header("Location: registration.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        // $pass = md5($pass);

	    $sql = "SELECT * FROM students WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: registration.php?error=The email is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO students(student_id, lastname, firstname, middlename, email, password) VALUES('$student_id', '$lastname', '$firstname', '$middlename', '$email', '$pass')";
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