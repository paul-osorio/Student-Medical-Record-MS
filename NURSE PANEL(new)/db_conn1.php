<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "clinicms_db_test";

$conn1 = mysqli_connect($sname, $unmae, $password, $db_name);


if (!$conn1) {
	echo "Connection failed!";
}