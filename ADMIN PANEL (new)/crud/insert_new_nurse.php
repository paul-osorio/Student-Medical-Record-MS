<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "clinicms_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$success  = "";

    if(isset($_POST['addnew']))
    {	 
        $emp_id  = $_POST['emp_id'];
        $username  = $_POST['username'];
        $password = $_POST['password'];
        $firstname   = $_POST['firstname'];
        $middlename  = $_POST['middlename'];
        $lastname  = $_POST['lastname'];
        $birthdate  = $_POST['birthdate'];
        $gender  = $_POST['gender'];
        $position  = $_POST['position'];
        $schedule  = $_POST['schedule'];
        $email  = $_POST['email'];
        $contact_num  = $_POST['contact_num'];
        $profile_pic  = $_POST['profile_pic'];
        
        $sql = "INSERT INTO nurses (emp_id,username,password,firstname,middlename,lastname,birthdate,gender,position,schedule,email,contact_num,profile_pic)
        VALUES ('$emp_id','$username','$password','$firstname','$middlename','$lastname','$birthdate','$gender','$position','$schedule','$email','$contact_num','$profile_pic')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
            header("Location: ../nurses.php");
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>