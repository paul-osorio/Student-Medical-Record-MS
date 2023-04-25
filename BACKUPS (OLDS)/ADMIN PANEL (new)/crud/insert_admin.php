<?php
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    
    $db_name = "clinicms_db";
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    $success  = "";
    if(isset($_POST['addAdmin']))
    {	 
        $unique_id  = $_POST['unique_id'];
        $email  = $_POST['email'];
        $password = $_POST['password'];
        $fname   = $_POST['fname'];
        $lname  = $_POST['lname'];
        $img  = $_POST['img'];
        // $status  = $_POST['status'];
       
        
        $sql = "INSERT INTO admins (unique_id,email,password,fname,lname,img)
        VALUES ('$unique_id','$email','$password','$fname','$lname','$img')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
            header("Location: ../admins.php?mess=add success");
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>