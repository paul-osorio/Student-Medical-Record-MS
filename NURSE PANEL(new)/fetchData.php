<?php
    include('db_conn.php');

    if (isset($_POST["fetch_stud_data"])){
      $student_id = $_POST['id'];
      $info = "SELECT * FROM stud_data WHERE student_id = '$student_id'";
      $run_query = mysqli_query($conn,$info) or die(mysqli_error($conn));
      if(mysqli_num_rows($run_query) > 0){
          while($row = mysqli_fetch_array($run_query)){
              $student_id = $row["student_id"];
              $firstname = $row['firstname'];
              $lastname = $row['lastname'];
              $middlename = $row['middlename'];

              echo '
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="student.php"><i class="fa-solid fa-arrow-left mx-2"></i>Student List</a></li>
                  <li class="breadcrumb-item active" aria-current="page">'.$firstname.', '.$lastname.'</li>
                </ol>
              </nav>
              <hr class="border-2">
              <div class="row shadow rounded-3">
              <div class="col-md-4 d-grid text-center position-relative align-items-center justify-content-center p-4 m-auto border-end border-2">
                  <div class="mb-2">
                    <img src="./assets/badang.jpg" width="150" height="150" class="rounded-circle">
                  </div>
                
                 <h5 class="mb-2">'.$firstname.', '.$lastname.' '.$middlename.'</h5>
                 <p class="mb-2">'.$row['Email'].'</p>
                 <p class="mb-2">'.$row['Section'].'</p>
                 <p class="mb-2">'.$row['student_id'].'</p>
                 <p class="mb-2">Status : <span class="text-success">Complete</span></p>
               
              </div>
              <div class="col-md-8 px-5 py-4">
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Sex</span><span>Female</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Age</span><span>21</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Date of Birth</span><span>January 01, 2001</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Contact Number</span><span>0987654321</span></div>
                <div class="mb-2 d-flex justify-content-between"><span class="fw-semibold">Complete Address</span><span class="text-wrap">123 sample address, Quezon City</span></div>
                <hr>
                <p class="fw-bold mb-2 text-center">EMERGENCY</p>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span>Contact Person</span><span>Mother</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span>Contact Number</span><span>0987654321</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span>Relationship</span><span>Parent</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span>Complete Address</span><span>123 sample address, Quezon City</span></div>
              </div>
            </div>
            <div class="row mt-4 justify-content-between gap-4">
              <div class="col-sm-7 shadow rounded-3" >
                <div class="d-flex justify-content-between align-items-center my-3">
                  <div class="d-flex">
                    <input type="button" class="btn btn-light px-2 mx-2" style="color:#0C4079";  value="Medical History">
                    <input type="button" class="btn btn-light px-2" style="color:#0C4079";  value="Medical Requirements">
                    <input type="button" class="btn btn-light px-2" style="color:#0C4079";  value="Health History">
                  </div>
                  <input type="button" class="btn px-2 text-light" style="background: #0C4079;" id="consultation" value="New Consultation" data-id="'.$student_id .'" >
                </div>

                <div class="p-3 overflow-y-scroll bg-body-secondary rounded-3 mb-3" style="max-height: 20rem; height:100%" id="cosultation_output">
                  
                </div>
               
              </div>

              <div class="col-sm-4 flex-grow-1 p-3 shadow rounded-3">
                <p class="text-center fw-bold" style="color:#0C4079;">COVID-19 Vaccine Information</p>
                <div class="p-3 overflow-y-scroll bg-body-secondary rounded-3 mb-3" style="max-height: 20rem;height:100%;">
              
                    <div class="mb-3"><span class="fw-bold ">Vaccine</span></div>
                    <div class="mb-2"><span class="fw-semibold ">1st Dose</span></div>
                    <p>Type of Vaccine : <span>Aztrazeneca</span></p>
                    <p>Date of 1st Dose : <span>January 5, 2021</span></p>
                    <div class="mb-2"><span class="fw-semibold mb-2">2st Dose</span></div>
                    <p>Type of Vaccine : <span>Aztrazeneca</span></p>
                    <p>Date of 1st Dose : <span>January 5, 2021</span></p>
                    <div class="mb-2"><span class="fw-semibold mb-2">Booster Shoot</span></div>
                    <div class="mb-2"><span class="fw-semibold mb-2">1st Dose</span></div>
                    <p>Type of Vaccine : <span>Aztrazeneca</span></p>
                    <p>Date of 1st Dose : <span>January 5, 2021</span></p>
                    <div class="mb-2"><span class="fw-semibold mb-2">2nd Dose</span></div>
                    <p>Type of Vaccine : <span>Aztrazeneca</span></p>
                    <p>Date of 1st Dose : <span>January 5, 2021</span></p>
             
                </div>
              </div>
            </div>
                ';
              }
          }
     
     
      }


      if (isset($_POST["consultation"])){
        $student_id = $_POST['id'];
        $info = "SELECT * FROM consultations WHERE student_id = '$student_id'";
        $run_query = mysqli_query($conn,$info) or die(mysqli_error($conn));
        if(mysqli_num_rows($run_query) > 0){
            while($row = mysqli_fetch_array($run_query)){
  
            echo'<div class="mb-3">
            <span class="float-end"><span id="data">March 03, 2023 - </span>00:00:00 AM</span>
            </div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Symptoms : </span><span class="mx-3">Diarrhea</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Medicine Given : </span><span class="mx-3">Diatabs</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Quantity : </span><span class="mx-3">2</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Confined : </span><span class="mx-3">No</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Sex : </span><span class="mx-3">Female</span></div>
            <hr class="border-2">';
  
                }
            }else{
              echo'<h4 class="fw-bold text-center mt-5">No Consultation Data Yet</h4>';
            }
       
       
        }
      if (isset($_POST["new_consultation"])){
        $student_id = $_POST['id'];
        $info = "SELECT * FROM stud_data WHERE student_id = '$student_id'";
        $run_query = mysqli_query($conn,$info) or die(mysqli_error($conn));
        if(mysqli_num_rows($run_query) > 0){
            while($row = mysqli_fetch_array($run_query)){
              $student_id = $row["student_id"];
              $firstname = $row['firstname'];
              $lastname = $row['lastname'];
              $middlename = $row['middlename'];
              $section = $row['Section'];
              
                echo'
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="student.php"><i class="fa-solid fa-arrow-left mx-2"></i>Student List</a></li>
                  <li class="breadcrumb-item active" aria-current="page">'.$firstname.', '.$lastname.'</li>
                  <li class="breadcrumb-item active" aria-current="page">New Consultation</li>
                </ol>
              </nav>
                <div class="container-fluid py-3 shadow bg-light overflow-y-scroll" style="height:75vh">
                <div class="d-flex  justify-content-evenly align-items-center mb-3">
                <div><span class="fw-semibold">Name: </span><span class="mx-2">'.$firstname.', '.$lastname.' '.$middlename.'</span></div>
                  <div><span class="fw-semibold">Section & Year Level:</span><span class="mx-2">'.$section.'</span></div>
                  <div><span class="fw-semibold">March 6, 2023 - 1:00 PM</span></div> 
                </div>
                <form action="" method="">
                <div class="row px-5 py-4 ">
                  
                  <div class="col-md-6" >
                    <h6 class="fw-bold mb-3">Symptoms</h6>
                    <div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="checkbox" type="checkbox" name="symptoms[]" value="Difficulty breathing" >
                        <label for="checkbox">Difficulty breathing</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="vommitting" type="checkbox" name="symptoms[]" value="Nausea or vomitting" >
                        <label for="vommitting">Nausea or vomitting</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="fever" type="checkbox" name="symptoms[]" value="Fever or chills" >
                        <label for="fever">Fever or chills</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="cough" type="checkbox" name="symptoms[]" value="Cough" >
                        <label for="cough">Cough</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="Headache" type="checkbox" name="symptoms[]" value="Headache" >
                        <label for="Headache">Headache</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="congestion" type="checkbox" name="symptoms[]" value="Congestion or runny nose" >
                        <label for="congestion">Congestion or runny nose</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="sore" type="checkbox" name="symptoms[]" value="Sore throat" >
                        <label for="sore">Sore throat</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="taste" type="checkbox" name="symptoms[]" value="New loss of taste or smell" >
                        <label for="taste">New loss of taste or smell</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="ache" type="checkbox" name="symptoms[]" value="Stomach Ache" >
                        <label for="ache">Stomach Ache</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="fatigue" type="checkbox" name="symptoms[]" value="Fatigue" >
                        <label for="fatigue">Fatigue</label>
                      </div>
                      <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                        <input class="form-check-input  rounded-0 my-2 mx-2" id="diarrhea" type="checkbox" name="symptoms[]" value="Diarrhea" >
                        <label for="diarrhea">Diarrhea</label>
                      </div>
                    
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h6 class="fw-bold mb-3">Body Temperature</h6>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text" class="form-control" id="body_temp" name="body_temp" required maxlength="2" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    </div>

                    <h6 class="fw-bold mb-3 text-wrap">Have you been in close contact to suspected or confirmed covid case for the past 14 days?</h6>
                    <div class="d-flex mb-3">
                      <div class="form-check mx-2">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="close_contacy_yes" value="no">
                          <label class="form-check-label" for="close_contacy_yes">
                            Yes
                          </label>
                        </div>
                        <div class="form-check mx-2">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="close_contacy_no" value="yes">
                          <label class="form-check-label" for="close_contacy_no">
                            No
                          </label>
                        </div>
                      </div>
                    <h6 class="fw-bold mb-3 text-wrap">Have you been tested for covid in the past 10 days?</h6>
                      <div class="form-check mx-2 mt-3">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="Antigen Test" value="Antigen Test">
                          <label class="form-check-label" for="Antigen Test">
                            Antigen Test
                          </label>
                        </div>
                        <div class="form-check mx-2 mt-3">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="Rapid Test" value="Rapid Test">
                          <label class="form-check-label" for="Rapid Test">
                            Rapid Test
                          </label>
                        </div>
                        <div class="form-check mx-2 mt-3">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="RT PCR" value="RT PCR">
                          <label class="form-check-label" for="RT PCR">
                            RT PCR
                          </label>
                        </div>
                        <div class="form-check mx-2 mt-3">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="No" value="No">
                          <label class="form-check-label" for="No">
                            No
                          </label>
                        </div>
                  </div>

                </div>
                <div class="row px-5 py-4">
                  <div class="col-md-6">
                    <h6 class="fw-bold mb-3">Other Symptoms and illness</h6>
                    <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                      <input class="form-check-input  rounded-0 my-2 mx-2" id="toothache" type="checkbox" name="othersymptoms[]" value="Toothache" >
                      <label for="toothache">Toothache</label>
                    </div>
                    <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                      <input class="form-check-input  rounded-0 my-2 mx-2" id="Dizziness" type="checkbox" name="othersymptoms[]" value="Dizziness" >
                      <label for="Dizziness">Dizziness</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                      <h6 class="fw-bold mb-3">Confined?</h6>
                      <div class="d-flex mb-3">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="confined" id="confined_yes" value="no">
                            <label class="form-check-label" for="confined_yes">
                              Yes
                            </label>
                          </div>
                          <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="confined" id="confined_no" value="yes">
                            <label class="form-check-label" for="confined_no">
                              No
                            </label>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                    <h6 class="fw-bold mb-3">How long?</h6>
                    <input type="text" class="form-control" id="quantity" name="how_long" placeholder="per Hr" maxlength="2" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                  </div>
                </div>
                <div class="row px-5 py-4">
                  <div class="col-md-6">
                    <h6 class="fw-bold mb-3">Referred to hospital ?</h6>
                      <div class="d-flex mb-3">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="referred" id="referred_yes" value="no">
                            <label class="form-check-label" for="referred_yes">
                              Yes
                            </label>
                          </div>
                          <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="referred" id="referred_no" value="yes">
                            <label class="form-check-label" for="referred_no">
                              No
                            </label>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Medicine Given</h6>
                    
                  </div>
                  <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Quantity</h6>
                    <input type="text" class="form-control" id="quantity" name="how_long" placeholder="Quantity.." maxlength="2" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                  </div>
                  <div class="d-flex gap-3 justify-content-end mt-5">
                    <button class="btn btn-danger">Cancel</button>
                    <button class="btn btn-primary">Confirm</button>
                  </div>
                </div>
              </form>
              </div>';
  
                }
            }else{
              echo'<h4 class="fw-bold text-center mt-5">No Consultation Data Yet</h4>';
            }
       
       
        }



  ?>
    <!--  -->