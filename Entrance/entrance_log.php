<?php 
   // session_start(); 
   include "./connection.php";
   include './queries.php';
?>
<!-- <link rel="stylesheet" href="../student/css-student.css"> -->
<link rel="stylesheet" href="table.css">
<div class="message"> </div>

<div class="reg-container">
   <div class="reg-form">
      <ul>
         <li onclick="showPanel(0,'#4EC745')">Students</li>
         <li onclick="showPanel(1,'#DCED31')">Pending</li>
         <li onclick="showPanel(2,'#f58800')">Visitors</li>
         <li onclick="showPanel(3,'#FF0022')">Archive</li>
      </ul>
      <!-- STUDENT ENTRANCE LOG -->
<div class="tabPanel">
   <table>
      <thead>
         <!-- <tr>
            <th colspan="5"> Students </th>
         </tr> -->

         <tr>
            <td>Student No.</td>
            <td>Name</td>
            <td>Year Level</td>
            <td>Section</td>
            <td>Time-in</td>
         </tr>
      </thead>

      <tbody>
         <?php
            if(mysqli_num_rows($res_entrance_log) > 0){
            while($entered_student = mysqli_fetch_assoc($res_entrance_log)) {
               
               $student_name = $entered_student['lastname'].", ".$entered_student['firstname']." ".$entered_student['middle_initial'];

               
               $time_in = $entered_student['timein'];
               $time_in = new DateTime("$time_in");
               
               $time_in = $time_in->format("h:i A"); 
               
               
               if($entered_student['Status'] == 'Verified') { ?>

                  <tr>
                     <td style="background-color:#4EC745 "><?=$entered_student['student_number']?></td>
                     <td><?=$student_name?> </td>
                     <td><?=$entered_student['year_level']?></td>
                     <td><?=$entered_student['Section']?></td>
                     <td><?=$time_in?></td>
                  </tr>

               <?php } else if ($entered_student['Status'] == 'Pending') { ?>
                  <tr >
                     <td style="background-color: rgb(232, 214, 110)" ><?=$entered_student['student_number']?></td>
                     <td><?=$student_name?> </td>
                     <td><?=$entered_student['year_level']?></td>
                     <td><?=$entered_student['Section']?></td>
                     <td><?=$time_in?></td>
                  </tr>
                  
               <?php }?>

               

               

            <?php }

            } else { ?>

               <tr>
                  <td colspan="5"> No student yet </td>
               </tr>
               
            <?php }
         ?>
      </tbody>
   </table>
</div>
<!-- END VERIFIED -->

<!-- PENDING -->
<div class="tabPanel">
   <table>
      <thead>
         <!-- <tr>
            <th colspan="5"> Students </th>
         </tr> -->

         <tr>
            <td>Student No.</td>
            <td>Name</td>
            <td>Year Level</td>
            <td>Section</td>
            <td>Time-in</td>
         </tr>
      </thead>

      <tbody>
         <tr>
            <td>23</td>
            <td>23</td>
            <td>23</td>
            <td>23</td>
            <td>23</td>
         </tr>
      </tbody>
   </table>
</div>
<!-- END OF PENDING -->

<!-- VISITOR -->
<div class="tabPanel">
   <table>
      <thead>
         <!-- <tr>
            <th colspan="5"> Students </th>
         </tr> -->

         <tr>
            <td>Name.</td>
            <td>Purpose</td>
            <td>Contact Number</td>
            <td>Time-In</td>
            <td>Time-Out</td>
         </tr>
      </thead>

      <tbody>
         <tr>
            <td>23</td>
            <td>23</td>
            <td>23</td>
            <td>23</td>
            <td>23</td>
         </tr>
      </tbody>
   </table>
</div>
<!-- END OF VISITOR -->

<!-- ARCHIVE -->
<div class="tabPanel">
   <table>
      <thead>
         <!-- <tr>
            <th colspan="5"> Students </th>
         </tr> -->

         <tr>
            <td>QR Code Value</td>
            <td>Name</td>
            <td>Year Level</td>
            <td>Section</td>
            <td>Time-in</td>
         </tr>
      </thead>

      <tbody>
         <tr>
            <td>MAMAMIYA MAMASITA</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>12:46pm</td>
         </tr>
      </tbody>
   </table>
</div>
<!-- END OF ARCHIVE -->

<!-- STUDENT INFO -->
<div class="stud-info">
   <div class="stud-img">
      <img src="../assets/user-icon.png" alt="">
   </div>
   <div class="stud-ent-info">
      <h2>19-1214</h2>

      <h4>Abihay, John Nicole</h4>
      <h4>Bachelor of Science in Information and Technology</h4>
      <h4>BSIT4E</h4>
   </div>
</div>
<!-- END OF STUDENT INFO -->
<script>
            var tabButtons=document.querySelectorAll(".reg-container .reg-form ul li");
            var tabPanels=document.querySelectorAll(".reg-container  .tabPanel");

        function showPanel(panelIndex,colorCode) {
            tabButtons.forEach(function(node){
                node.style.backgroundColor="";
                node.style.color="";
            });
            tabButtons[panelIndex].style.backgroundColor=colorCode;
            tabButtons[panelIndex].style.color="#000000";
            tabPanels.forEach(function(node){
                node.style.display="none";
            });
            tabPanels[panelIndex].style.display="block";
            tabPanels[panelIndex].style.backgroundColor=colorCode;
        }
        showPanel(0,'#4EC745');
        </script>