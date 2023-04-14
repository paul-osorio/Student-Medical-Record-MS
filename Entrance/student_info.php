<?php

   include "./connection.php";
   // include "./queries.php";

   $stud_id = $_POST['stud_id'];

   $sel_stud = "SELECT * FROM `mis.student_info` WHERE `student_id` = '$stud_id' ";

   $res_stud = mysqli_query($conn, $sel_stud);
   $student = mysqli_fetch_assoc($res_stud);

   if(mysqli_num_rows($res_stud) === 1){ ?>

      <div class="stud-info">
         
         <div class="stud-img">
            
            <div class="image">
               <img src="../assets/QCU_Logo.png" alt="">
            </div>
            
         </div>
         
         <div class="stud-ent-info">
            
            <h2> <?=$student['student_id']?> </h2>
         
            <h4> <?=$student['lastname']?>, <?=$student['firstname']?> <?=$student['middlename']?> </h4>
            
            <h4> <?=$student['Degree Program/ Course']?> </h4>
            <h4> <?=$student['Section']?></h4>

         </div>

      </div>

   <?php } else { ?> 
   
      <div class="stud-info">
         
         <div class="err">
            <h3> STUDENT DIDN'T EXIST </h3>
         </div>

      </div>
   
   
   <?php }

?>

