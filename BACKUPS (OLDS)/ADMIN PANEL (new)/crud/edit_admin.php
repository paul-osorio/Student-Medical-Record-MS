<?php
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    
    $db_name = "clinicms_db";
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    $success  = "";

    if(isset($_POST['updateAdmin']))
    {   
        // $id = $_POST['update_id'];

        $unique_id = $_POST['unique_id'];

        echo $unique_id;
        
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        // $img = $_POST['img'];
        $contact_num = $_POST['contact_num'];

        // $query = "UPDATE admins SET email='$email', fname='$fname', lname='$lname', img='$img', contact_num='$contact_num' WHERE `unique_id` = '$unique_id'";
        $query = "UPDATE admins SET email='$email', fname='$fname', lname='$lname', contact_num='$contact_num' WHERE `unique_id` = '$unique_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data updated!"); </script>';
            // echo $unique_id;
            header("Location: ../admins.php?mess=update success");
        }
        else
        {
            echo '<script> alert("Data not updated!"); </script>';
        }
    }
?>