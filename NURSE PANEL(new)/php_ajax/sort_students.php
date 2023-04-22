<?php
    include "../includes/db_conn.php";

   if(isset($_POST['sort'])){
      $sort = $_POST['sort'];

      $sort_by_query = "SELECT * FROM `stud_data` ORDER BY `$sort`"; 
      
      $fetchAllStudents = mysqli_query($conn, $sort_by_query);
      1
      ?>



              <div class="students">
                      <!-- <div class="patient_table_details table-responsive mt-3" >
                          <table class="table table-hover table-striped text-center fw-semibold">   -->
                         

                                <?php if(mysqli_num_rows($fetchAllStudents) > 0) { 
                                  while ($studs = mysqli_fetch_assoc($fetchAllStudents)) {  ?>


                                  <table class="table table-borderless shadow mt-3 text-center align-middle">
                                    <tbody>
                                      <tr class="">
                                        <td class="col-2  text-light fw-bold" style="background:#5D8FD9;width:max-content"><span><?=$studs['student_id']?></span></td>
                                        <td class="col-3 text-start"><span class="name"><?=$studs['firstname']?> <?=$studs['middlename']?> <?=$studs['lastname']?></span></td>
                                        <td class="col-1"><span class="course"><?=$studs['Section']?></span></td>
                                        <td class="col-5 text-start"><span class="email"><?=$studs['Email']?></span></td>
                                        <td class="col-1"><button class="addpatient-btn px-2" style="background-color: #163666;" id="view" data-id="<?=$studs['student_id']?>">View</button></td>
                                        <td class="col"><span class="name position-relative d-flex align-items-center justify-content-center">
                                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical " style="color: #163666"></i></a>
                                        <ul class="dropdown-menu" data-popper-placement="left-start" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-106.667px, 0px, 0px);width:max-content;">
                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-edit mx-2"></i>Edit</a></li>
                                        </ul>
                                        </span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <?php } } ?>
                  
                            <div>
   <?php }

?>