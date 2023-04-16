<?php

function fetchMedicine($conn){

   $sel = "SELECT * FROM `medicine` ORDER BY `id` DESC";

   $res = mysqli_query($conn, $sel);

   return $res;
}


function fetchSelMedicine($conn, $prodID){

   $sel = "SELECT * FROM `medicine`
   WHERE `prod_id` = '$prodID'";

   $res = mysqli_query($conn, $sel);

   return $res;
}



function insertMed($conn, $medID, $medName, $medQty, $expDate, $medDesc, $imgName, $medCampus, $qrCode) {

   $ins = "INSERT INTO `medicine`
   (`prod_id`, `name`, `image`, `num_stocks`, `expirationDate`, `description`, `campus`, `qr_code`) VALUES
   ('$medID','$medName','$imgName','$medQty','$expDate','$medDesc','$medCampus','$qrCode')";

   $res = mysqli_query($conn, $ins);

   return $res;

}


?>