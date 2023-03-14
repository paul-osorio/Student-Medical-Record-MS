<?php
    include_once 'db_conn.php';
    $success  = "";
    if(isset($_POST['addmed']))
    {	 
        $box_id  = $_POST['box_id'];
        $prod_id  = $_POST['prod_id'];
        $name  = $_POST['name'];
        $brand = $_POST['brand'];
        $genericName   = $_POST['genericName'];
        $image  = $_POST['image'];
        $prescribed_for  = $_POST['prescribed_for'];
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