<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, 'clinicms_db');

if(isset($_POST['delAdmin']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM admins WHERE user_id='$id'";
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