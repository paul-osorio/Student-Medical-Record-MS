<?php
   include "../includes/header_process.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/png" href="../../assets/favcon.png"/> <!-- Icon -->
   <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/med_history.css">
   <title>  Medical History | QCUCMS </title>
</head>
<body>

   
   <div class="side-panel">

      <?php include "../includes/profile_nav.php" ?>
        
      <nav class="nav primary-nav">
         
         <div class="sub-header">
         
            <p> Main </p>
         
         </div>
         
         <ul>
            <li > 
               <a href="./personal-information.php"> Personal Information </a>
            </li>
         
            <li> 
               <a href="./medical-requirements.php"> Medical Requirements</a>
            </li>
         
            <li class="selected"> 
               <a href="./medical-history.php"> Medical History  </a>
            </li>
         
            <li> 
               <a href="./health-history.php"> Health History  </a>
            </li>
         

            <li> 
               <a href="./appointment-list.php"> Appointment </a>
            </li>
         </ul>
        
      </nav>
        
      <nav class="nav secondary-nav">
        
         <div class="sub-header">
         
            <p> Settings </p>
         
         </div>
        
         <ul>
            <li> 
               <a href="./manage-account.php"> Manage Account </a>
            </li>
         
            <li> 
               <a href="../../process/logout.php"> Logout </a>
            </li>
         </ul>
        
      </nav>

   </div>

   <main>

      <header>

         <div class="logo">
            <img src="../../assets/favcon.png" alt="">
         </div>

         <div class="title">
            <h1> Quezon City University Clinic</h1>
         </div>

      </header>

      <div class="container">

         <div class="medical-history">

            <h3> Medical History </h3>
   
            <table border="0">
               <thead>
                  <tr>
                     <th> Reference No. </th>
                     <th> Date and Time  </th>
                     <th> Nurse Assisted </th>
                     <th> Body Temperature </th>
                     <th> Length </th>
                     <th width="10%"> Status </th>
                     <th> Action </th>
                  </tr>
               </thead>
   
               <tbody>
               
                  <?php 
                     if(mysqli_num_rows($res_stud_med_history) > 0){
                        while($row = mysqli_fetch_assoc($res_stud_med_history)) { 
                           
                           $date_consult = $row['date_of_consultation'];
                           $date_consult = new DateTime("$date_consult");
                           $date_consult = $date_consult->format("F d, Y");

                           ?>

                           <tr>
                              <td> <?=$row['reference_no']?> </td>
                              <td> <?=$date_consult?> </td>
                              <td> <?php if($row['position'] === 'Nurse') { echo "Nr."; } ?> <?=$row['firstname']?> <?=$row['nurse_mi']?>. <?=$row['lastname']?></td>
                              <td> <?=$row['body_temp']?> </td>
                              <td> <?=$row['how_long']?> </td>
                              <td> 
                                 <div class="status">
                                    <?=$row['status']?>
                                 </div> 
                              </td>
                              <td>
                                 <div class="form-button">
                                    <a href="./view_medical-history.php?ref_no=<?=$row['reference_no']?>"> View </a>
                                 </div>
                              </td>
                           </tr>
                           
                           <?php 
                        }
                     } else { ?>
                        <tr> 
                           <td colspan="7"> No Medical History </td>
                        </tr>
                     <?php }  ?>
                  
               </tbody>
            </table>

         </div>
            

      </div>

   </main>

</body>
</html>