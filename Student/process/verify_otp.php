<?php

   session_start();
   include "../../includes/db_conn.php";
   // include "../includes/date.php";

   
  

   if(isset($_POST['verify_otp-btn'])){

      $stud_id = $_SESSION['student_id'];
      $otp = $_POST['otp'];
      
      $sel_stud_otp = "SELECT * FROM `stud_otp` a
      JOIN `stud_data` b
      ON a.stud_id = b.student_id
      WHERE a.`stud_id` = '$stud_id'";
   
      $res_stud_otp = mysqli_query($conn, $sel_stud_otp);
   
      $stud_otp = mysqli_fetch_assoc($res_stud_otp);

      if($otp === $stud_otp['otp']){

         header("location: ../student-appointment.php");

      } else{
         
         header("location: ../student-verify-otp.php?not equal");

      }
   }

?>