<?php 

function fetchAdmin($conn, $id){

   if($id == null) {

      $sel = "SELECT * FROM `admins` ORDER BY `user_id` DESC";

   } else {

      $sel = "SELECT * FROM `admins` WHERE `user_id` = $id";

   }
   

   $qry = mysqli_query($conn, $sel);

   return $qry;

}

function insertAdmin($conn, $uniqueId, $email, $password, $fname, $lname, $imgName, $cNum) {

   $password = md5($password);

   $ins = "INSERT INTO `admins` 
   (`unique_id`, `email`, `password`, `fname`, `lname`, `img`, `contact_num`) VALUES 
   ('$uniqueId','$email','$password','$fname', '$lname', '$imgName', '$cNum')";

   $res = mysqli_query($conn, $ins);

   return $res;

}

function archiveAdmin($conn, $uniqueId, $date_today) {
   
   $sel = "SELECT * FROM `admins` WHERE `unique_id` = '$uniqueId'";

   $sel_res = mysqli_query($conn, $sel);
   $admin = mysqli_fetch_assoc($sel_res);

   $fname = $admin['fname'];
   $lname = $admin['lname'];
   $arch_type = "admin";
   $img = $admin['img'];


   $ins = "INSERT INTO `archive`
   (`archive_id`, `archive_name`, `archive_type`, `archive_datetime`, `archive_img`) 
   VALUES 
   ('$uniqueId','$fname $lname','$arch_type','$date_today','$img')";

   $ins_res = mysqli_query($conn, $ins);

   if($ins_res){

      $del = "DELETE FROM `admins` WHERE `unique_id` = '$uniqueId'";
      $del_res = mysqli_query($conn, $del);

   } else {

      $del_res = mysqli_error($conn);
      
   }

   return $del_res;

}


?>