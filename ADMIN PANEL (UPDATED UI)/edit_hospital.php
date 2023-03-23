<?php
    include_once 'db_conn.php';
    $success  = "";

    if(isset($_POST['editHospi']))
    {   
        // $id = $_POST['update_id'];

        $hospital = $_POST['hospital'];

        echo $hospital;
        
        $hospital_add = $_POST['hospital_add'];
        $email = $_POST['email'];
        $contact_num = $_POST['contact_num'];

        $query = "UPDATE hospitals SET hospital_add='$hospital_add', email='$email', contact_num='$contact_num' WHERE `hospital` = '$hospital'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data updated!"); </script>';
            // echo $unique_id;
            header("Location:adminDashboard.php?mess=update success");
        }
        else
        {
            echo '<script> alert("Data not updated!"); </script>';
        }
    }
?>