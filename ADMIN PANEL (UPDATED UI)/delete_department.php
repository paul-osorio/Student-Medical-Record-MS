<?php
include_once 'db_conn.php';
$success  = "";

if(isset($_POST['delDept']))
{
    $id = $_POST['delete_id'];

    echo $id;

    $query = "DELETE FROM departments WHERE `emp_id` = '$id'";
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