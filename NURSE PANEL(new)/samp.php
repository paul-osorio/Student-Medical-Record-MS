<?php
// establish a connection to the database
$host = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// select data from two tables using JOIN statement
$sql = "SELECT table1.column1, table1.column2, table2.column1
        FROM table1
        JOIN table2 ON table1.column1 = table2.column2";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "column1 from table1: " . $row["column1"]. " - column2 from table1: " . $row["column2"]. " - column1 from table2: " . $row["column1"]. "<br>";
  }
} else {
  echo "0 results";
}

// close connection
mysqli_close($conn);





?>
SELECT *
FROM table1
JOIN table2 ON table1.column = table2.column
JOIN table3 ON table2.column = table3.column
JOIN table4 ON table3.column = table4.column;


SELECT `mis.student_info`.`student_id`, `mis.enrollment_status`.`student_id`, `mis.student_address`.`student_id`,`mis.emergency_contact`.`student_id`
        FROM `mis.student_info`
        JOIN `mis.enrollment_status` ON `mis.student_info`.`student_id` = `mis.enrollment_status`.`student_id`
        JOIN `mis.student_address` ON ; `mis.enrollment_status`.`student_id` = `mis.student_address`.`student_id`
        ;

SELECT * FROM `student_Account`
JOIN `mis.student_info` ON `student_account`.`student_id` = `mis.student_info`.`student_id`
JOIN `mis.enrollment_status` ON `mis.student_info`.`student_id` = `mis.enrollment_status`.`student_id` 
JOIN `mis.student_address` ON `mis.enrollment_status`.`student_id` = `mis.student_address`.`student_id` 
JOIN `mis.emergency_contact` ON `mis.student_address`.`student_id` = `mis.emergency_contact`.`student_id`