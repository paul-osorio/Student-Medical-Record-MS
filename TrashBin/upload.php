<?php
// Retrieve user input
$fullName = $_POST['fullName'];
$birthDate = $_POST['birthDate'];

// Set upload directory and filename
$uploadDir = "uploads/";
$uploadFile = $uploadDir . basename($_FILES["fileUpload"]["name"]);

// Upload image file
if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $uploadFile)) {
  echo "File uploaded successfully.";

  // Save user information to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "clinicms_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert user data into database
  $sql = "INSERT INTO student_info (fullName, birthDate, imagePath) VALUES ('$fullName', '$birthDate', '$uploadFile')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
} else {
  echo "Sorry, there was an error uploading your file.";
}
?>
