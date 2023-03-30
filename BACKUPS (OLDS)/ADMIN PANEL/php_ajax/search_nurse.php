<?php
   include "../db_conn.php";

   if(isset($_POST['search'])){
      $search = $_POST['search'];

      $search_nurses_query = "SELECT * FROM `nurses` WHERE  `emp_id` LIKE '%$search%' OR `email` LIKE '%$search%' OR `firstname` LIKE '%$search%' OR `lastname` LIKE '%$search%' OR `schedule` LIKE '%$search%' OR `campus` LIKE '%$search%';"; 
      
      $fetchAllNurses = mysqli_query($conn, $search_nurses_query);
      
      ?>



<div class="card_container">

<?php if(mysqli_num_rows($fetchAllNurses) > 0) { 
while ($nurses = mysqli_fetch_assoc($fetchAllNurses)) {  ?>

<div class="card">
<img src="./assets/<?=$nurses['profile_pic']?>" alt="" />
<div class="card_content">
<span class="stud_id"><?=$nurses['emp_id']?></span>
<span class="name"><?=$nurses['firstname']?> <?=$nurses['lastname']?></span>
<span class="nurse"><?=$nurses['position']?></span>
<div class="card_footer">
  <span class="date"><?=$nurses['schedule']?></span>
    <a href="#viewNurseInfo" class="custom_btn nurseinfobtn" ><i class="fa fa-info-circle" aria-hidden="true" style="color: gray;"></i></a>
    <a href="#viewNurseInfo" class="custom_btn nurseinfobtn"><i class="fa fa-edit" aria-hidden="true" style="color: #37954B;"></i></a>
    <a href="#delNurse" class="custom_btn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
</div>
</div>
</div>

<?php } } ?>

</div>


      
   <?php }

?>