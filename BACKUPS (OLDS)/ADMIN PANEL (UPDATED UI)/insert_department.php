<?php
    include_once 'db_conn.php';
    $success  = "";
    if(isset($_POST['addDept']))
    {	 
        $emp_id  = $_POST['emp_id'];
        $dept_name  = $_POST['dept_name'];
        $building_name = $_POST['building_name'];
        $room_num   = $_POST['room_num'];
        $image  = $_POST['image'];
        $firstname  = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email  = $_POST['email'];
        $contact_num  = $_POST['contact_num'];
        $position  = $_POST['position'];
       
        
        $sql = "INSERT INTO `departments` (emp_id,dept_name,building_name,room_num,image,firstname,lastname,email,contact_num,position)
        VALUES ('$emp_id','$dept_name','$building_name','$room_num','$image','$firstname','$lastname','$email','$contact_num','$position')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";

            header("Location:adminDashboard.php?mess=update success");
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>