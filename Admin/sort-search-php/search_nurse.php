<?php
    include "../includes/function-header.php";

   if(isset($_POST['search'])){
      $search = $_POST['search'];

      $search_nurse_query = "SELECT * FROM `nurses` WHERE  `emp_id` LIKE '%$search%' OR `email` LIKE '%$search%' OR `firstname` LIKE '%$search%' OR `midllename` LIKE '%$search%' OR `lastname` LIKE '%$search%';"; 
      
      $total_nurse = mysqli_query($conn, $search_nurse_query);
      
      ?>



            
      <div class="nurse-list-container">

               <div class="card_container">

                  <!-- loop here -->

                  <?php 
                     if($total_nurse > 0) {

                        while($nurse_row = mysqli_fetch_assoc($nurse_result)) {
                           
                           $nurseSched_res = fetchScheduleByNurse($conn, $nurse_row['emp_id']);



                           ?>

                           <!-- <a href="./veiw-nurse.php?emp_id=<?=$nurse_row['emp_id']?>" class="card-holder"> -->

                              <div class="card">

                                 <img src="../assets/<?=$nurse_row['profile_pic']?>" alt="" />

                                 <div class="card_content">

                                    <span class="stud_id"> <?=$nurse_row['emp_id']?> </span>
                                    <!-- <span class="name"> <?=$nurse_row['firstname']?> <?=$nurse_row['lastname']?> </span> -->

                                     <span class="name"> <?=$nurse_row['username']?> </span>
                                    <span class="nurse"> <?=$nurse_row['position']?> </span>

                                    <div class="card_footer">
                                   
                                       <span class="date">

                                          

                                          <?php
                                             if(mysqli_num_rows($nurseSched_res) > 0){
                                                while($nurseSched_row = mysqli_fetch_assoc($nurseSched_res)){

                                                   echo "<span>".$nurseSched_row['day']."</span>";

                                                }
                                             } else {

                                                echo "No Schedule";
                                             }
                                          ?>
                                       </span>

                                       <span class="form-button">

                                          <a href="./veiw-nurse.php?emp_id=<?=$nurse_row['emp_id']?>" class="custom_btn nurseinfobtn" >

                                             
                                             <i class="fas fa-info-circle    "></i>
                                          </a>

                                          <button data-role="del-nurse" data-emp_id="<?=$nurse_row['emp_id']?>" data-uname="<?=$nurse_row['username']?>">

                                             <i class="fas fa-trash-alt"></i>
                                          </button>

                                       </span>

                                    </div>
                                 </div>
                              </div>

                           <!-- </a> -->

                           <?php


                        }

                     }
                  
                  ?>
         
                 
                  
                  <!-- loop here -->
               </div>
            </div>

      
   <?php }

?>