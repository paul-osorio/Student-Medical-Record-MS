<?php

   include "../includes/db_conn.php";
   include "../includes/date.php";
   include "../functions/nurse.php";

   $nurse_id = $_POST['nurse_id'];

   try {

      $nurse = archiveNurse($conn, $nurse_id, $date_today);

      if($nurse) {

         ?>

         
         <div class="message-success">
            <h2> Nurse Deleted Successful </h2>

            <div class="icon">
               <i class="fas fa-check-circle"></i>
            </div>
         </div>

         <script>
            window.location.href = "../pages/nurses.php";
         </script>


         <?php 


      }
      
   } catch (\Throwable $th) {

      ?>

      <div class="message-success">
         <h2> Query Failed </h2>

         <p> <?=mysqli_error($conn)?> </p>

         <div class="icon">
            <i class="fas fa-times-circle" style="color: red;"></i>
         </div>

         <script>
            window.location.href = "../pages/nurses.php";
         </script>
      </div>


      <?php 

   }

  
 

?>
