<?php
    include_once 'db_conn.php';
    $success  = "";
    if(isset($_POST['addHospi']))
    {	 

        $hospital = $_POST['hospital'];
        $hospital_add = $_POST['hospital_add'];
        $email  = $_POST['email'];
        $contact_num  = $_POST['contact_num'];
        
       
        
        $sql = "INSERT INTO hospitals (hospital,hospital_add,email,contact_num)
        VALUES ('$hospital','$hospital_add','$email','$contact_num')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
            header("Location:adminDashboard.php?mess=add success");
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>