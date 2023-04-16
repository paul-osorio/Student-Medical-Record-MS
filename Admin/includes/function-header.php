<?php
   session_start();
   
   include "../includes/db_conn.php";
   include "../functions/function.php";

   include "../functions/admin.php";
   include "../functions/dept.php";
   include "../functions/nurse.php";
   include "../functions/hospital.php";
   include "../functions/medicine.php";
   include "../functions/archive.php";
   
   $id = $_SESSION['user_id'];

   // check if id is empty
   if(empty($id)){

      header("Location: ../index.php"); // then redirect to login pages / index.php
   }

   // select all admins
   $admin_result = fetchAdmin($conn, null);
   $total_admins = mysqli_num_rows($admin_result);    // total admins

   // select logged admin
   $admin_logged_res = fetchAdmin($conn, $id);
   $admin_logged = mysqli_fetch_assoc($admin_logged_res);

   // select all dept
   $dept_result = fetchDept($conn);
   $total_dept = mysqli_num_rows($dept_result);       // total departments

   // select all nurse
   $nurse_result = fetchAllNurse($conn);
   $total_nurse = mysqli_num_rows($nurse_result);     // total nurses

   // select all hospital
   $hospital_res = fetchHospital($conn);

   // select all medicine
   $med_res = fetchMedicine($conn);

   // select all archive
   $archive_res = fetchArchive($conn);


?>