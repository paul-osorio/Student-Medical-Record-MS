<?php
   include "../includes/db_conn.php";
   include "../includes/date.php";
   include "../functions/admin.php";

   $unique_id = $_POST['unique_id'];

   $res = archiveAdmin($conn, $unique_id, $date_today);

   if($res){ ?>

      <div class="message-success">
         <h2> Admin Deleted Successful </h2>

         <div class="icon">
            <i class="fas fa-check-circle"></i>
         </div>
      </div>

      <script>
         window.location.href = "../pages/admin.php";
      </script>

   <?php }

?>
