<?php
   include "../includes/function-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> SMRMS | ADMIN | Dashboard </title>
   <?php include "../includes/head.php"; ?>

   <!-- custom css -->
   <link rel="stylesheet" href="../css/appointment.css">
   
   
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

            <li>
               <a href="./department.php" >
                  <i class="fas fa-building    "></i> Departments
               </a>
            </li>

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
               <a href="./medicine.php" >
                  <i class="fas fa-medkit    "></i> Medicines
               </a>
            </li>

            <li>
               <a href="./appointment.php" class="isSelected">
                  <i class="fas fa-calendar-check    "></i> Appointments
               </a>
            </li>

            <li>
               <a href="./reports.php">
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

         <div class="appointment-container">

            <div class="content-header">
               <select name="" id="">
                  <option value="Appointments"> Appointments </option>
                  <option value="Appointments"> Holiday/Suspension </option>
               </select>


               <div class="form-button">
                  <button class="add-admin">
                     <i class="fas fa-tree    "></i>
                     <p> Add Holiday/Suspension </p>
                  </button>

                  <button class="add-admin">
                     <i class="fas fa-calendar-plus"></i>
                     <p> Add Appointment </p>
                  </button>

               </div>
              
            </div>


            <div class="appointment-list-container">

               <table>
                   <thead>
                     <tr> 
                        <th width="10%"> ID No. </th>
                        <th width="20%"> Type of appointment </th>
                        <th width="10%"> Status </th>
                        <th width="10%"> Date Created	</th>
                        <th width="5%" style="text-align:center"> Action </th>
                     </tr>
                  </thead>
               </table>

               <table border="0"> 
                 

                  <tbody>
                     <tr>
                        <td width="10%"> A-0001 </td>
                        <td width="20%"> Medical Services	 </td>
                        <td width="10%"> 
                           
                           <div class="app-status">
                              <p> On </p>
                           </div>
                        </td>
                        <td width="10%"> March 04, 2023 </td>

                        <td width="5%">
                           <div class="action-button">
                              <button id="app-edit">
                                 <i class="fas fa-edit    "></i>
                              </button>

                              <button id="app-del">
                                <i class="fas fa-trash-alt    "></i>
                              </button>
                           </div>   
                        </td>
                     </tr>

                     
                  </tbody>
               </table>

            </div>


            
         </div>

      </div>

   </main>
   
</body>

<!-- custom script -->
</html>