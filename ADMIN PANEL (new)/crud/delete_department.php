<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "clinicms_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
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
        header("Location: ../departments.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>