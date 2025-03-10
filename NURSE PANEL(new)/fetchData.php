<?php
     session_start();
     include('./includes/db_conn.php');

    $emp_id = $_SESSION['emp_id'];

    $sql =   "SELECT * FROM `nurses` WHERE emp_id = '$emp_id'";
    $squery = $conn->query($sql);	
		$srow = $squery->fetch_assoc();

    $Nfirstname = $srow['firstname'];
    $Nlastname = $srow['lastname'];
    $Nmiddlename = $srow['middlename'];
    $Nemail = $srow['email'];

    if (isset($_POST["fetch_stud_data"])){
      $student_id = $_POST['id'];
      $info = mysqli_query($conn1,"SELECT * FROM `student_account`
            JOIN `mis.student_info` ON `student_account`.`student_id` = `mis.student_info`.`student_id`
            JOIN `mis.enrollment_status` ON `mis.student_info`.`student_id` = `mis.enrollment_status`.`student_id` 
            JOIN `mis.student_address` ON `mis.enrollment_status`.`student_id` = `mis.student_address`.`student_id` 
            JOIN `mis.emergency_contact` ON `mis.student_address`.`student_id` = `mis.emergency_contact`.`student_id` WHERE `student_account`.`student_id` = '$student_id'");
      // $run_query = mysqli_query($conn1,$info) or die(mysqli_error($conn1));
        if(mysqli_num_rows($info) > 0){
          while($row = mysqli_fetch_array($info)){
              $student_id = $row["student_id"];
              $firstname = $row['firstname'];
              $lastname = $row['lastname'];
              $middlename = $row['middlename'];

      
    //  if (isset($_POST["fetch_stud_data"])){
    //   $student_id = $_POST['id'];
    //   $info = "SELECT * FROM `student_account` WHERE student_id = '$student_id'";
    //   $run_query = mysqli_query($conn1,$info) or die(mysqli_error($conn1));
    //   if(mysqli_num_rows($run_query) > 0){
    //       while($row = mysqli_fetch_array($run_query)){
    //           $student_id = $row["student_id"];
    //           $firstname = $row['firstname'];
    //           $lastname = $row['lastname'];
    //           $middlename = $row['middlename'];

              echo '
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="student.php"><i class="fa-solid fa-arrow-left mx-2"></i>Student List</a></li>
                  <li class="breadcrumb-item active" aria-current="page">'.$lastname.', '.$firstname.'</li>
                </ol>
              </nav>
              <hr class="border-2">
              <div class="row shadow rounded-3">
              <div class="col-md-4 d-grid text-center position-relative align-items-center justify-content-center p-4 m-auto border-end border-2">
                  <div class="mb-2">
                    <img src="./assets/'.$row['id_image'].'" width="150" height="150" class="rounded-circle">
                  </div>
                
                 <h5 class="mb-2">'.$lastname.', '.$firstname.' '.$middlename.'</h5>
                 <p class="mb-2">'.$row['email'].'</p>
                 <p class="mb-2">'.$row['section'].'</p>
                 <p class="mb-2">'.$row['student_id'].'</p>
                 <p class="mb-2">Medical Requirements: <span class="text-success">Complete</span></p>
                 <p class="mb-2">Status: <span class="text-success">Cleared</span></p>
               
              </div>
              <div class="col-md-8 px-5 py-4">
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Sex:</span><span>'.$row['gender'].'</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Age:</span><span>'.$row['age'].'</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Date of Birth:</span><span>'.$row['birthdate'].'</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Contact Number:</span><span>'.$row['contact_number'].'</span></div>
                <div class="mb-2 d-flex justify-content-between"><span class="fw-semibold">Complete Address:</span><span class="text-wrap">'.$row['house_no'].', '.$row['street'].','.$row['brgy'].', '.$row['city'].', '.$row['province'].'</span></div>
                <hr>
                <p class="fw-bold mb-2 text-center">EMERGENCY</p>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Contact: Person</span><span>'.$row['fullname'].'</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Contact Number:</span><span>'.$row['contact_number'].'</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Relationship:</span><span>'.$row['relation'].'</span></div>
                <div class="mb-2 d-flex flex-wrap justify-content-between"><span class="fw-semibold">Complete Address:</span><span>'.$row['address'].'</span></div>
              </div>
            </div>
            <div class="row mt-4 justify-content-between gap-4">
              <div class="shadow rounded-3" >
                
                <div class="d-flex justify-content-between align-items-center my-3">
                  <div class="d-flex">
                    <input type="button" class="btn btn-light px-2 mx-2" id="med-his" style="color:#0C4079";  value="Medical History">
                    <input type="button" class="btn btn-light px-2" id="med-req" style="color:#0C4079";  value="Medical Requirements">
                    <input type="button" class="btn btn-light px-2" id="health-his" style="color:#0C4079";  value="Health History">
                    <input type="button" class="btn btn-light px-2" id="family-his" style="color:#0C4079";  value="Family History">
                    <input type="button" class="btn btn-light px-2" id="covac-info" style="color:#0C4079";  value="COVID-19 Vaccine Information">
                  </div>
                  <input type="button" class="btn px-2 text-light" style="background: #0C4079;" id="consultation" value="New Consultation" data-id="'.$student_id .'">
                </div>

                <div class="p-3 overflow-y-scroll bg-body-secondary rounded-3 mb-3" style="max-height: 20rem; height:100%" id="cosultation_output" id="medical-content">
                  
                </div>
               
              </div>
              
              <div class="col-sm-4 flex-grow-1 p-3 shadow rounded-3" style="display:none">
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
      
// Medical History starts

      if (isset($_POST["consultation"])){
        $student_id = $_POST['id'];
        $info = "SELECT * FROM consultations WHERE student_id = '$student_id' ORDER BY `date_of_consultation` DESC";
        $run_query = mysqli_query($conn1,$info) or die(mysqli_error($conn1));
        if(mysqli_num_rows($run_query) > 0){
          while($row = mysqli_fetch_array($run_query)){
            //  $conDate = ($row['date_of_consultation']);
            $conDate = strtotime($row['date_of_consultation']); 
            $formattedDate = date('F d, Y g:i A', $conDate);


            
            echo'<div class="mb-3">
            <span class="float-end"><b>Date:</b> <span id="data">'.$formattedDate.'</span>
            </div>
            <div class="mb-2 d-flex flex-wrap"><span class="fw-semibold">Symptoms: </span><span class="mx-3">'.$row['symptoms'].'</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Body Temperature: </span><span class="mx-3">'.$row['body_temp'].'</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Suspected for Covid-19: </span><span class="mx-3">'.$row['suspected_covid'].'</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Been tested for Covid-19 in the past 10 days: </span><span class="mx-3">'.$row['tested_covid'].'</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Medicine Given: </span><span class="mx-3">'.$row['quantity'].' '.$row['medicine'].'</span></div>
            <div class="mb-2 d-flex"><span class="fw-semibold">Confined: </span><span class="mx-3">'.$row['confined'].'</span></div>

            <hr class="border-2">';
            
          }
        }else{
          echo'<h4 class="fw-bold text-center mt-5">No Consultation Data Yet</h4>';
        }
        
        
      }
      if (isset($_POST["new_consultation"])){
        $student_id = $_POST['id'];
        $select = "SELECT * FROM `student_account`
            JOIN `mis.student_info` ON `student_account`.`student_id` = `mis.student_info`.`student_id`
            JOIN `mis.enrollment_status` ON `mis.student_info`.`student_id` = `mis.enrollment_status`.`student_id` 
            JOIN `mis.student_address` ON `mis.enrollment_status`.`student_id` = `mis.student_address`.`student_id` 
            JOIN `mis.emergency_contact` ON `mis.student_address`.`student_id` = `mis.emergency_contact`.`student_id` WHERE `student_account`.`student_id` = '$student_id'";
        $run_query = mysqli_query($conn1,$select) or die(mysqli_error($conn1));
        if(mysqli_num_rows($run_query) > 0){
          while($row = mysqli_fetch_array($run_query)){
            $student_id = $row["student_id"];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $middlename = $row['middlename'];
            $section = $row['section'];
            
            echo'
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="student.php"><i class="fa-solid fa-arrow-left mx-2"></i>Student List</a></li>
            <li class="breadcrumb-item active" aria-current="page">'.$lastname.', '.$firstname.'</li>
            <li class="breadcrumb-item active" aria-current="page">New Consultation</li>
            </ol>
            </nav>
            <div class="container-fluid py-3 shadow bg-light overflow-y-scroll" style="height:98%">
            <div class="d-flex  justify-content-between align-items-center mb-10">
            <div><span class="fw-semibold">Name: </span><span class="mx-2">'.$lastname.', '.$firstname.' '.$middlename.'</span></div>
            <div><span class="fw-semibold">Section & Year Level:</span><span class="mx-2">'.$section.'</span></div>
            
            </div>
            
            
                <div class="row px-5 py-4 ">
                  <div class="col-md-6" >
                  <h6 class="fw-bold mb-3">Symptoms</h6>
                  <div>
                  <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                  <input class="form-check-input  rounded-0 my-2 mx-2" id="breathing" type="checkbox" name="symptoms[]" value="Difficulty breathing" >
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
                  <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                  <input class="form-check-input  rounded-0 my-2 mx-2" id="toothache" type="checkbox" name="symptoms[]" value="toothache" >
                  <label for="toothache">Toothache</label>
                  </div>
                  <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                  <input class="form-check-input  rounded-0 my-2 mx-2" id="dizziness" type="checkbox" name="symptoms[]" value="Dizziness" >
                  <label for="dizziness">Dizziness</label>
                  </div>
                  
                  </div>
                  </div>
                  <div class="col-md-6">
                  <h6 class="fw-bold mb-3">Body Temperature</h6>
                  <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" id="body_temp" name="body_temp" required maxlength="4" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46)">

                    </div>

                    <h6 class="fw-bold mb-3 text-wrap">Have you been in close contact to suspected or confirmed covid case for the past 14 days?</h6>
                    
                    
                    <div class="d-flex mb-3">
                    <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="close_contact[]" id="close_contact_yes" value="yes">
                    <label class="form-check-label" for="close_contact_yes">
                    Yes
                    </label>
                    </div>
                    <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="close_contact[]" id="close_contact_no" value="no">
                    <label class="form-check-label" for="close_contact_no">
                    No
                    </label>
                    </div>
                    
                    </div>
                    <h6 class="fw-bold mb-3 text-wrap">Have you been tested for covid in the past 10 days?</h6>
                    <div class="form-check mx-2 mt-3">
                    <input class="form-check-input" type="radio" id="AntigenTest" value="Antigen Test" name="covid_test[]">
                    <label class="form-check-label" for="AntigenTest">
                    Antigen Test
                    </label>
                    </div>
                    <div class="form-check mx-2 mt-3">
                    <input class="form-check-input" type="radio" id="RapidTest" value="Rapid Test" name="covid_test[]">
                    <label class="form-check-label" for="RapidTest">
                    Rapid Test
                    </label>
                    </div>
                    <div class="form-check mx-2 mt-3">
                    <input class="form-check-input" type="radio"  id="RTPCR" value="RT PCR" name="covid_test[]">
                    <label class="form-check-label" for="RTPCR">
                    RT PCR
                    </label>
                    </div>
                    <div class="form-check mx-2 mt-3">
                    <input class="form-check-input" type="radio"  id="No" value="No" name="covid_test[]">
                    <label class="form-check-label" for="No">
                    No
                    </label>
                    </div>
                    </div>
                    
                    </div>
                    <div class="row px-5 py-4">
                    <div class="col-md-4">
                    <h6 class="fw-bold mb-3">Injuries</h6>
                    <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                    <input class="form-check-input  rounded-0 my-2 mx-2" id="fractures" type="checkbox" name="othersymptoms[]" value="fractures" >
                    <label for="fractures">Fractures</label>
                    </div>
                    <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                    <input class="form-check-input  rounded-0 my-2 mx-2" id="sprains/strains" type="checkbox" name="othersymptoms[]" value="sprains/strains" >
                    <label for="sprains/strains">Sprains/Strains</label>
                    </div>
                    <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                      <input class="form-check-input  rounded-0 my-2 mx-2" id="contusions" type="checkbox" name="othersymptoms[]" value="contusions" >
                      <label for="contusions">Contusions</label>
                      </div>
                    <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                      <input class="form-check-input  rounded-0 my-2 mx-2" id="lacerations" type="checkbox" name="othersymptoms[]" value="lacerations" >
                      <label for="lacerations">Lacerations</label>
                      </div>
                    <div class="input-group input-group-sm mb-3 d-flex align-items-center">
                      <input class="form-check-input  rounded-0 my-2 mx-2" id="burns" type="checkbox" name="othersymptoms[]" value="burns" >
                      <label for="burns">Burns</label>
                      </div>

                      </div>
                      <div class="col-md-3">
                      <h6 class="fw-bold mb-3">Confined?</h6>
                      <div class="d-flex mb-3">
                      <div class="form-check mx-2">
                      <input class="form-check-input" type="radio" name="confined[]" id="confined_yes" value="Yes">
                      <label class="form-check-label" for="confined_yes">
                      Yes
                      </label>
                      </div>
                      <div class="form-check mx-2">
                      <input class="form-check-input" type="radio" name="confined[]" id="confined_no" value="No">
                      <label class="form-check-label" for="confined_no">
                      No
                      </label>
                      </div>
                      </div>
                      </div>
                      <div class="col-md-3">
                      <h6 class="fw-bold mb-3">How long?</h6>
                      <input type="text" class="form-control" id="how_long" name="how_long" placeholder="per Hr" maxlength="2" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                      </div>
                      </div>
                      <div class="row px-5 py-4">
                      <div class="col-md-4">
                      <h6 class="fw-bold mb-3">Referred to hospital ?</h6>
                      <div class="d-flex mb-3">
                      <div class="form-check mx-2">
                      <input class="form-check-input" type="radio" name="referred[]" id="referred_yes" value="no">
                      <label class="form-check-label" for="referred_yes">
                      Yes
                      </label>
                      </div>
                      <div class="form-check mx-2">
                      <input class="form-check-input" type="radio" name="referred[]" id="referred_no" value="yes">
                      <label class="form-check-label" for="referred_no">
                      No
                      </label>
                      </div>
                      </div>
                  </div>
                  <div class="col-md-3 position-relative">
                  <h6 class="fw-bold mb-3">Medicine Given</h6>
                    <select class="form-select" aria-label="Default select example" id="medicine">
                    <option selected>Select Medicine</option>';

                $info = "SELECT * FROM medicine";
                $run_query = mysqli_query($conn,$info) or die(mysqli_error($conn));
                if(mysqli_num_rows($run_query) > 0){
                  while($row = mysqli_fetch_array($run_query)){
                    echo  '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                  }
                }

                  echo '
                     </select>
                        <ul id="list" class="mt-3 py-2 position-absolute start-0"></ul>
                  </div>
                  <div class="col-md-3">
                  <h6 class="fw-bold mb-3">Quantity</h6>
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" maxlength="2" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                  </div>

                   <div class="col-md-2">
                      <h6 class="fw-bold mb-3">Cleared ?</h6>
                      <div class="d-flex mb-3">
                      <div class="form-check mx-2">
                      <input class="form-check-input" type="radio" name="cleared[]" id="cleared_yes" value="Cleared">
                      <label class="form-check-label" for="cleared_yes">
                      Yes
                      </label>
                      </div>
                      <div class="form-check mx-2">
                      <input class="form-check-input not-cleared-no" type="radio" name="cleared[]" id="cleared_no" value="Not CLeared">
                      <label class="form-check-label" for="cleared_no">
                      No
                      </label>
                      </div>
                      </div>
                      </div>
                  <div class="d-flex gap-3 justify-content-end mt-5">
                  <button type="button" class="btn btn-primary" data-id="'.$student_id.'" id="consultation_submit" name="confirm">Confirm</button>
                  
                  </div>
                  </div>
                  
                  </div>';
                  
                }
              }else{
                echo'<h4 class="fw-bold text-center mt-5">No Consultation Data Yet</h4>';
              }
              
            }
            
            
            if(isset($_POST['confirm'])){
              
              $student_id = $_POST['student_id'];
              $date_now = $_POST['date_now'];
              $symptoms = $_POST['symptoms'];
              $other_symptoms = $_POST['othersymptoms'];
              $body_temp = $_POST['body_temp'];
              $close_contact = $_POST['close_contact'];
              $covid_test = $_POST['covid_test'];
              $confined = $_POST['confined'];
              $how_long = $_POST['how_long'];
              $referred = $_POST['referred'];
              $medicines = $_POST['medicines'];
              $quantity = $_POST['quantity'];
              $cleared = $_POST['cleared'];
              
              

        $sql = "INSERT INTO consultations (student_id, date_of_consultation, symptoms, othersymptoms, body_temp,suspected_covid, tested_covid, confined, how_long, medicine, quantity, referred) 
                VALUES ('$student_id',NOW(),'$symptoms', '$other_symptoms','$body_temp','$close_contact','$covid_test','$confined','$how_long','$medicines','$quantity','$referred')";
        $run_query = mysqli_query($conn1,$sql) or die(mysqli_error($conn1));

        $sample_data = "INSERT INTO sample_stud_data (student_id, Status) VALUE ('$student_id','$cleared')";
        // $sample_data = "UPDATE sample_stud_data SET(student_id, Status) VALUE ('$student_id','$cleared')";
        $run_query = mysqli_query($conn1,$sample_data) or die(mysqli_error($conn1));

        $enrollment = "SELECT * FROM `mis.enrollment_status` WHERE student_id = '$student_id'";
        $dquery = $conn1->query($enrollment);
       
        if($dquery->num_rows > 0){

          $drow = $dquery->fetch_assoc();
          $dept_name = $drow['code'];
          
          $department = "SELECT * FROM departments WHERE dept_name = '$dept_name'";
          $pquery = $conn1->query($department);

          if($conn1->query($department)){

          $prow = $pquery->fetch_assoc();
          $dept_email = $prow['email'];

          $info = "SELECT * FROM `mis.student_info`
            JOIN `mis.enrollment_status` ON `mis.student_info`.`student_id` = `mis.enrollment_status`.`student_id` 
            JOIN `mis.student_address` ON `mis.enrollment_status`.`student_id` = `mis.student_address`.`student_id` WHERE `mis.student_info`.`student_id` = '$student_id'";
          $run_query = mysqli_query($conn1,$info) or die(mysqli_error($conn1));
 

          $query = $conn1->query($info);
          $row = $query->fetch_assoc();
        
			if($conn->query($sql)){

          $date_now = date("Y");
          $date_past = date("Y") - 1;

          $S_Y =  $date_past . " - " .  $date_now;
          $firstname = $row['firstname'];
          $lastname = $row['lastname'];
          $middlename = $row['middlename'];
          
           echo ' <div class="container-fluid shadow p-4 d-grid" id="certificate">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <div style="width: 500px">
                <img src="./assets/cert_logo.png" class="w-100 h-100" alt="" />
              </div>
            </div>
            <div class="text-center">
              <h3 class="fw-bold">Medical Certificate</h3>
              <span class="fw-regular">SY: '.$S_Y.'</span>
            </div>
            <table
              class="table table-borderless mt-5"
              style="min-height: 250px"
            >
              <tbody>
                <tr>
                  <td>
                    <span class="fw-semibold text-nowrap" >Name:  </span><span id="student_name">'.$lastname.', '.$firstname.' '.$middlename.'</span>
                  </td>
                  <td><span class="fw-semibold text-nowrap">Course:  </span> <span id="degree">'.$row['program'].'</span></td>
                  <td><span class="fw-semibold text-nowrap">Year Level: </span></span> <span id="yrLvl">'.$row['year_level'].'</span></td>

                  <td>
                    <span class="fw-semibold text-nowrap">Campus: </span> <span id="campus">San Bartolome</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold text-nowrap">Contact No.: </span> <span id="contact">'.$row['contact_number'].'</span>
                  </td>
                  <td colspan="4" style="min-width: 300px">
                    <span class="fw-semibold text-nowrap">Complete Address : </span>
                  <span id="address"> '.$row['house_no'].', '.$row['street'].','.$row['brgy'].', '.$row['city'].', '.$row['province'].'</span>
                  </td>
                </tr>
                <tr>
                  <td colspan="4" class="text-center">
                    <div class="d-grid">
                      <p>
                        I certify that the mentioned name above is medically
                        qualified to enroll for the 1st semester of
                      </p>
                     SY: <span id="yr">'.$S_Y.'</span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col">
                <span class="fw-semibold text-nowrap">Remarks : </span>
                <span id="remark">Cleared</span>
              </div>
              <div class="col text-center">
                <div class="d-grid">
                  <span class="fw-semibold text-nowrap" id="nurse">'.$Nfirstname.' '.$Nmiddlename.' '.$Nlastname.'</span>
                  <hr class="border border-1 border-dark" />
                  <span class="fw-semibold text-nowrap">University Nurse</span>
                </div>
              </div>
              <div class="col text-center">qr</div>
            </div>
          </div>
          <div class="d-flex gap-2 mt-3 justify-content-end">
            <button
              class="btn rounded-0 text-light px-5 fw-semibold"
              style="background-color: #134e8e" data-email="'.$dept_email.'" data-bs-toggle="modal" data-bs-target="#email" id="send-email"
            >
              Send
            </button>
            <button
              class="btn rounded-0 text-light px-5 fw-semibold"
              style="background-color: #134e8e"
              id="close-cert"
            >
              Close
            </button>
          </div>
          
          <div class="modal fade"  id="email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                      <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-grid justify-content-center">
                          <h4 class="fw-semibold text-center">SUCCESSFULLY SENT TO THE EMAIL OF BSIT DEPARTMENT!</h4>
                          <div class="container-fluid d-flex justify-content-center align-items-center">
                            <img src="assets/email-success.svg" class="w-50 h-50" alt="">
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="donwload-cert">Download</button>
                      <button type="button" class="btn btn-success" id="print-cert">Print</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>';
        }

          }
          

        }else{
          echo 'Please check if the student is officially enrolled. Thank You';
        }
      }

      function get_data(){
        class Data_file {
            private $student_id;
            private $docu_type;
            private $file_name;
            private $submitted_date;
            private $status;
            private $status_column;
            private $reason_column;

            public function __construct($student_id,$docu_type,$file_name,$submitted_date,$status,$status_column,$reason_column){
              $this->student_id = $student_id;
              $this->docu_type = $docu_type;
              $this->file_name = $file_name;
              $this->submitted_date = $submitted_date;
              $this->status = $status;
              $this->status_column = $status_column;
              $this->reason_column = $reason_column;
            }

          function __destruct(){

           echo "              
                <tr class='p-3'>
                <td class='col-2 py-3'>{$this->docu_type}</td>
                <td class='col-3 py-3'>{$this->submitted_date}</td>
                <td class='col-4 py-3'>
                <a target='_blank' href='./medical-requirements/{$this->file_name}'>
                                    {$this->file_name} </a></td>";


              
                 if($this->status == "approved" ){           
                    echo"<td class='text-success fw-semibold text-center py-3' colspan='2'>Approved</td>";
                  }elseif($this->status == "declined"){
                    echo"<td class='text-danger fw-semibold text-center py-3'>Declined</td>";
                  }
                  else{
                    echo "<td class='p-0 text-center py-3'><button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#declined_modal'  id='declined' reason-column='{$this->reason_column}'
                    status-column='{$this->status_column}'  data-student_id='{$this->student_id}'>Decline</button></td>
                    <td class='p-0 text-center py-3'><button class='btn btn-success' id='approved'  data-column='{$this->status_column}' data-student_id='{$this->student_id}' >Approve</button></td>";
                              
                  };
         

            echo"</tr>";
            }
        }
      }

      if(isset($_POST['view'])){

        $student_id = $_POST['student_id'];
        $id = $_POST['id'];

        $sql = "SELECT * FROM stud_medical_requirements WHERE student_id  = '$student_id' ";
        // $run_query = mysqli_query($conn1,$sql) or die(mysqli_error($conn1));
        $query = $conn1->query($sql);

        $row = $query->fetch_assoc();
        
        $cbc_file = $row['cbc_file'];
        $cbc_date_submitted = $row['cbc_date_submitted'];
        $cbc_status = $row['cbc_status'];
        
        
        $uri_file = $row['uri_file'];
        $uri_date_submitted = $row['uri_date_submitted'];
        $uri_status = $row['uri_status'];
       

        $xRay_file = $row['xray_file'];
        $xRay_date_submitted = $row['xray_date_submitted'];
        $xRay_status = $row['xray_status'];
       
        $med_cert_file = $row['med_cert_file'];
        $med_cert_date_submitted = $row['med_cert_date_submitted'];
        $med_cert_status = $row['med_cert_status'];
        

        get_data();
        
        $med_cert_file = new Data_file( $student_id,"Medical Certificate",$med_cert_file,$med_cert_date_submitted,$med_cert_status,'med_cert_status','med_cert_reason');
        $xRay_file = new Data_file( $student_id,"Chest X-ray",$xRay_file,$xRay_date_submitted,$xRay_status,'xray_status','xray_reason');
        $uri_file = new Data_file( $student_id,"Urinalysis",$uri_file,$uri_date_submitted,$uri_status,'uri_status','uri_reason');
        $cbc_file = new Data_file( $student_id,"Complete Blood Count (CBC)",$cbc_file,$cbc_date_submitted,$cbc_status,'cbc_status','cbc_reason');

      }

      if(isset($_POST['update_status'])){
        $student_id = $_POST['student_id'];
        $column = $_POST['column'];

        $sql = "UPDATE stud_medical_requirements SET $column = 'approved' WHERE student_id = '$student_id'";
        $run_query = mysqli_query($conn1,$sql) or die(mysqli_error($conn1));

        get_data();

        $med_cert_file = new Data_file( $student_id,"Medical Certificate",$med_cert_file,$med_cert_date_submitted,$med_cert_status,'med_cert_status');
        $xRay_file = new Data_file( $student_id,"Chest X-ray",$xRay_file,$xRay_date_submitted,$xRay_status,'xray_status');
        $uri_file = new Data_file( $student_id,"Urinalysis",$uri_file,$uri_date_submitted,$uri_status,'uri_status');
        $cbc_file = new Data_file( $student_id,"Complete Blood Count (CBC)",$cbc_file,$cbc_date_submitted,$cbc_status,'cbc_status');
      }
      
    if(isset($_POST['send_reason'])){
    $student_id = $_POST['student_id'];
    $reason_column = $_POST['reason_column'];
    $status_column = $_POST['status_column'];
    $reason_content = $_POST['reason_content'];

    $sql = "UPDATE stud_medical_requirements SET $status_column = 'declined', $reason_column = '$reason_content' WHERE student_id = '$student_id'";
    $run_query = mysqli_query($conn1,$sql) or die(mysqli_error($conn1));

         get_data();

  } 
  ?>
   
   <?php


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

                      ?>
<script>
  
  $(document).ready(function(){
    
    $('#med-his').click(function(){
  
      $('#med-his').css('background', '#d3d4d5');
      $('#med-req').css('background', 'none');
      $('#health-his').css('background', 'none');
      $('#family-his').css('background', 'none');
      $('#covac-info').css('background', 'none');
  
      $('#medical-content').load('#');
        
    });

    $('#med-req').click(function(){
  
      $('#med-his').css('background', 'none');
      $('#med-req').css('background', '#d3d4d5');
      $('#health-his').css('background', 'none');
      $('#family-his').css('background', 'none');
      $('#covac-info').css('background', 'none');
  
      $('#medical-content').load('#');
        
    });

    $('#health-his').click(function(){
  
      $('#med-his').css('background', 'none');
      $('#med-req').css('background', 'none');
      $('#health-his').css('background', '#d3d4d5');
      $('#family-his').css('background', 'none');
      $('#covac-info').css('background', 'none');
  
      $('#medical-content').load('#');
        
    });

    $('#family-his').click(function(){
  
      $('#med-his').css('background', 'none');
      $('#med-req').css('background', 'none');
      $('#health-his').css('background', 'none');
      $('#family-his').css('background', '#d3d4d5');
      $('#covac-info').css('background', 'none');
  
      $('#medical-content').load('#');
        
    });

    $('#covac-info').click(function(){
  
      $('#med-his').css('background', 'none');
      $('#med-req').css('background', 'none');
      $('#health-his').css('background', 'none');
      $('#family-his').css('background', 'none');
      $('#covac-info').css('background', '#d3d4d5');
  
      $('#medical-content').load('#');
        
    });

  });
</script>