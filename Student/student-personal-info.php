<?php 

    include "../includes/db_conn.php";

    $stud_id = $_POST['stud_id'];

    $sel_stud = "SELECT *, LEFT(middlename, 1) as `mi` FROM `stud_data` WHERE `student_id` = '$stud_id'";
    $res_stud = mysqli_query($conn, $sel_stud);

    $student = mysqli_fetch_assoc($res_stud);

    


?>

<h5>PERSONAL INFORMATION</h5>

<div class="row" id="main_row">
    <div class="col-xl-8" id="col-1">
        <h4 class="fw-bold" id="student_id"> <?=$student['student_id']?> </h4>
        <p class="fw-semibold" id="student_name"> <?=$student['lastname']?>, <?=$student['firstname']?> <?=$student['mi']?> </p>
        <p class="text-secondary" id="student_course"> <?=$student['Degree Program/ Course']?> </p>
        <p class="text-secondary" id="student_email"> <?=$student['Email']?> </p>
        <p class="px-3 py-2 status success-status text-light rounded text-capitalize" id="student_status">Status : complete</p>
    </div>
    <div class="col-sm-4 py-3 d-grid justify-content-center align-items-center">
        <img src="https://images.unsplash.com/photo-1585919751768-dff94a989751?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="" width="300" height="200" alt="">
    </div>
</div>

<hr class="divider">

<div class="row">
      <span class="text-capitalize fw-bold fs-4 px-2">basic information</span>
          <div id="col" class="col-sm-1 mt-3 fw-semibold">
              <div class="child text-start">
                  <span class="text-dark">Sex</span>
                  <div class="input-group input-group-sm mb-3 my-2">
                      <input type="text" value="<?=$student['Gender']?>" aria-label="First name" id="sex" class="form-control shadow-none"  disabled>
                  </div>
              </div>
      </div>

      <div id="col" class="col-sm-1 mt-3 fw-semibold">
          <div class="child text-start">
              <span class="text-dark">Age</span>
              <div class="input-group input-group-sm  mb-3 my-2">
                  <input type="text" value="<?=$student['Age']?>" aria-label="First name" id="age" class="form-control shadow-none"  disabled>
              </div>
          </div>
      </div>
      
      <div id="col" class="col-sm-3 mt-3 fw-semibold">
          <div class="child text-start">
              <span class="text-dark">Birthdate</span>
              <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                  <input type="date" value="<?=$student['Birthday']?>" id="Birthdate" aria-label="Birthdate"  class="form-control shadow-none" placeholder="Birthdate" disabled>
              </div>
          </div>
      </div>
      <div id="col" class="col-sm-6 mt-3 fw-semibold">
          <div class="child text-start">
              <span class="text-dark">Complete Address</span>
              <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                  <input type="text" value="<?=$student['Address']?>" id="Birthdate" aria-label="Birthdate"  class="form-control shadow-none" placeholder="Complete Address" disabled>
              </div>
          </div>
      </div>
      
  </div>
  <hr class="divider">

  <div class="row">
      <span class="text-capitalize fw-bold fs-4 px-2">Emergency Contact</span>
          <div id="col" class="col-sm-6 mt-3 fw-semibold">
              <div class="child text-start">
                  <span class="text-dark">Fullname</span>
                  <div class="input-group input-group-sm mb-3 my-2">
                      <input type="text" aria-label="First name" id="sex" class="form-control shadow-none"  disabled>
                  </div>
              </div>
      </div>

      <div id="col" class="col-sm-6 mt-3 fw-semibold">
          <div class="child text-start">
              <span class="text-dark">Relationship</span>
              <div class="input-group input-group-sm  mb-3 my-2">
                  <input type="text" aria-label="First name" id="age" class="form-control shadow-none"  disabled>
              </div>
          </div>
      </div>
      <div id="col" class="col-sm-6 mt-3 fw-semibold">
          <div class="child text-start">
              <span class="text-dark">Contact Number</span>
              <div class="input-group input-group-sm mb-3 my-2">
                  <input type="text" aria-label="First name" id="sex" class="form-control shadow-none"  disabled>
              </div>
          </div>
  </div>

  <div id="col" class="col-sm-6 mt-3 fw-semibold">
      <div class="child text-start">
          <span class="text-dark">Complete Address</span>
          <div class="input-group input-group-sm  mb-3 my-2">
              <input type="text" aria-label="First name" id="age" class="form-control shadow-none"  disabled>
          </div>
      </div>
  </div>
      
  </div>
</div>
