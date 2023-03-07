<?php
   include "../db_conn.php";

   if(isset($_POST['search'])){
      $search = $_POST['search'];

      $search_admin_query = "SELECT * FROM `admins` WHERE  `unique_id` LIKE '%$search%' OR `email` LIKE '%$search%' OR `fname` LIKE '%$search%' OR `lname` LIKE '%$search%' OR `contact_num` LIKE '%$search%';"; 
      
      $fetchAddAdmins = mysqli_query($conn, $search_admin_query);
      
      ?>



   <table>
   
   <tr>
         <th> Image </th>
         <th> Admin ID</th>
         <th> First Name</th>
         <th> Last Name</th>
         <th> Email Address</th>
         <th> Contact Number</th>
         <th><span>Actions</span></th>
   </tr>
   

         <?php if(mysqli_num_rows($fetchAddAdmins) > 0) { 
         while ($addAdmins = mysqli_fetch_assoc($fetchAddAdmins)) {  ?>


   <tr class="container">
         <td> <img src="./assets/<?=$addAdmins['img']?>"/></td>
         <td><span class="unique_id"><?=$addAdmins['unique_id']?></span></td>
         <td><span class="fname"><?=$addAdmins['fname']?></span></td>
         <td><span class="lname"><?=$addAdmins['lname']?></span></td>
         <td><span class="email"><?=$addAdmins['email']?></span></td>
         <td><span class="contact_num"><?=$addAdmins['contact_num']?></span></td>
         <td>
            <a href="#viewAdminInfo" class="custom_btn" data-toggle="modal"><i class="fa fa-info-circle" aria-hidden="true" style="color: #5D8FD9;"></i></a>

            <a href="#editAdminInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: #5D8FD9;"></i></a>

            <a href="#delAdminInfo" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #5D8FD9;"></i></a>
         </td>
   </tr>
   
         <?php } } ?>

   
   </table>


      
   <?php }

?>