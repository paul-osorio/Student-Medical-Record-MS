<?php


include('../../phpqrcode/qrlib.php');

   
function generateQR($tempDir, $codeContents){

   $fileName = $codeContents.'.png';

   $pngAbsoluteFilePath = $tempDir.$fileName;
   
   // generating
   if (!file_exists($pngAbsoluteFilePath)) {

       QRcode::png($codeContents, $pngAbsoluteFilePath);

   }

   return $fileName;

}



function convertDate($date){

   $date = new DateTime("$date");
   $date = $date->format('F d, Y');

   return $date;
}

function convertTime($time){

   $time = new DateTime("$time");
   $time = $time->format('h:i A');

   return $time;
}



function generateID($len){

   $characters = '0123456789';

   $code = '';

   for ($i = 0; $i < $len; $i++) {

       $code .= $characters[rand(0, strlen($characters) - 1)];
   }

   return $code;

}

function generatePassword($len){

   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@$';

   $code = '';

   for ($i = 0; $i < $len; $i++) {

       $code .= $characters[rand(0, strlen($characters) - 1)];
   }

   return $code;
}

function moveImg($path, $file_name, $file_tmp_name, $file_tmp_error){

   if($file_tmp_error === 0) {
         
      $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

      $file_ext_lc = strtolower($file_ext);

      $file_name_lc = strtolower($file_name);

      $allowed_ext = array("png", "jpg", "jpeg");

      if(in_array($file_ext_lc, $allowed_ext)) {

         $new_img_name = $file_name_lc;

         $img_path = "$path/".$new_img_name;

         move_uploaded_file($file_tmp_name, $img_path);

      } else {

         $new_img_name = "error";

      }

      return $new_img_name;

   }

}


?>