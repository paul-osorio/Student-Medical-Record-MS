<?php
   include "../includes/function-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> SMRMS | ADMIN | Report </title>
   <?php include "../includes/head.php"; ?>

   <!-- custom css -->
   <link rel="stylesheet" href="../css/reports.css">
   
   
</head>
<body>

   <nav class="side-panel">

      <div class="nav-header">
         <div class="img-logo">
            <div class="img-handler">

               <img src="../assets/QCUClinicLogo.png" alt="QCUClinicLogo.png">
            </div>
         </div>

         <div class="title-logo">
            <p> Student Medical Record </p>
         </div>
      </div>

      <div class="primary-nav">
         <ul>
            <li>
               <a href="./dashboard.php" >
                  <i class="fas fa-chart-area fas-line"></i> Dashboard
               </a>
            </li>

            <li>
               <a href="./admin.php" >
                  <i class="fas fa-users-cog"></i> Admins
               </a>
            </li>

            <!-- <li>
               <a href="./department.php" >
                  <i class="fas fa-building    "></i> Departments
               </a>
            </li> -->

            <li>
               <a href="./nurses.php">
                  <i class="fas fa-user-shield    "></i> Nurses
               </a>
            </li>

            <li>
               <a href="./hospital.php">
                  <i class="fas fa-hospital    "></i> Hospital
               </a>
            </li>

            <li>
               <a href="./medicine.php">
                  <i class="fas fa-medkit    "></i> Medicines
               </a>
            </li>

            <li>
               <a href="./appointment.php">
                  <i class="fas fa-calendar-check    "></i> Appointments
               </a>
            </li>

            <li>
               <a href="./reports.php" class="isSelected">
                  <i class="fas fa-folder-open    "></i> Reports
               </a>
            </li>

            <li>
               <a href="./archive.php">
                  <i class="fas fa-archive    "></i> Archive
               </a>
            </li>

            <li>
               <a href="./entrance-log.php">
                  <i class="fas fa-address-book    "></i> Entrance Log
               </a>
            </li>
         </ul>
      </div>
   </nav>

   <main>

      <?php include "../includes/main-header.php" ?>

      <div class="main-content">

         <div class="report-container">

            <div class="content-header">
               <h3> reports </h3>

               <div class="form-button">
                  <select name="" id="">
                     <option value="Students"> Students </option>
                     <option value="Appointments"> Appointments </option>
                     <option value="Medicine"> Medicine </option>
                  </select>

                  <select name="" id="">
                     <option value=""> Campus </option>
                     <option value="San Fransisco"> San Bartolome </option>
                     <option value="Batasan"> Batasan </option>
                     <option value="San Fransisco"> San Fransisco </option>
                  </select>

                  <input type="date" name="" id="">

               </div>
              
            </div>
            
            <div class="report-content-container">

               <div class="report-box">
                  

               </div>

            </div>


            
         </div>

      </div>

   </main>
   
</body>

<!-- custom script -->
</html>