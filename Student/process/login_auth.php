<?php
   // start session
   session_start();

   // connection
   include "../includes/db_con.php";


   if(isset($_POST['submit_btn'])){

      $email = $_POST['email'];
       
      $password = $_POST['password'];


      $sel_stud = "SELECT * FROM `students` WHERE `email` = '$email' AND `password` = '$password'";
      $res_stud = mysqli_query($conn, $sel_stud);

      if(mysqli_num_rows($res_stud) === 1) {

         $stud = mysqli_fetch_assoc($res_stud);

         $_SESSION['student_id'] = $stud['student_id'];
         
         header("location: ../student-personal-info.php");

      } else {

         echo "account doesn't exit";

      }
   }

?>