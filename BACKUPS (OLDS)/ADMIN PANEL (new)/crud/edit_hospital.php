<?php
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    
    $db_name = "clinicms_db";
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    $success  = "";

    if(isset($_POST['editHospi']))
    {   
        // $id = $_POST['update_id'];

        $hospi_id = $_POST['hospi_id'];

        echo $hospi_id;

        $hospital = $_POST['hospital'];
        $hospital_add = $_POST['hospital_add'];
        $email = $_POST['email'];
        $contact_num = $_POST['contact_num'];

        $query = "UPDATE hospitals SET hospital='$hospital', hospital_add='$hospital_add', email='$email', contact_num='$contact_num' WHERE `hospi_id` = '$hospi_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data updated!"); </script>';
            // echo $unique_id;
            header("Location: ../hospitals.php?mess=update success");
        }
        else
        {
            echo '<script> alert("Data not updated!"); </script>';
        }
    }
?>