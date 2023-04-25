<?php
include_once 'db_conn.php';
$success  = "";

if(isset($_POST['delHospital']))
{
    $id = $_POST['delete_id'];

    echo $id;

    $query = "DELETE FROM hospitals WHERE `hospi_id` = '$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:adminDashboard.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>