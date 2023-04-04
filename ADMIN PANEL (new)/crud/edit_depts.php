<?php
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    
    $db_name = "clinicms_db";
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    $success  = "";

    if(isset($_POST['updateDepts']))
    {   
        // $id = $_POST['update_id'];

        $unique_id = $_POST['unique_id'];

        echo $emp_id;
        
        $dept_name  = $_POST['dept_name'];
        $building_name = $_POST['building_name'];
        $room_num   = $_POST['room_num'];
        $image  = $_POST['image'];
        $firstname  = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email  = $_POST['email'];
        $contact_num  = $_POST['contact_num'];
        $position  = $_POST['position'];
       

        $query = "UPDATE departments SET dept_name='$dept_name', building_name='$building_name', room_num='$room_num', image='$image', firstname='$firstname', lastname='$lastname', email='$email', contact_num='$contact_num', position='$position' WHERE `emp_id` = '$emp_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data updated!"); </script>';
            // echo $unique_id;
            header("Location: ../departments.php?mess=update success");
        }
        else
        {
            echo '<script> alert("Data not updated!"); </script>';
        }
    }
?>