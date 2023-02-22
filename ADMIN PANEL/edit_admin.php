<?php
    include_once 'db_conn.php';
    $success  = "";

    if(isset($_POST['updateAdmin']))
    {   
        $id = $_POST['update_id'];
        
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contact_num = $_POST['contact_num'];

        $query = "UPDATE admins SET email='$email', fname='$fname', lname='$lname', contact_num='$contact_num' WHERE email='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data updated!"); </script>';
            header("Location:adminDashboard.php");
        }
        else
        {
            echo '<script> alert("Data not updated!"); </script>';
        }
    }
?>