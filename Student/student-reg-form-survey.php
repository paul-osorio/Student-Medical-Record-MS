

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="custom-properties.css">
  <link rel="stylesheet" href="mediaQueries.css">

  <script src="javascript/action.js" defer></script>
  <link rel="icon" type="image/png" href="./assets/favcon.png"/>
  <title>SMRMS | STUDENT | Registration Form - Medical Information</title>

</head>
<body>
  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=.8">
  <link rel="icon" type="image/png" href="./assets/favcon.png"/>
  <title>SMRMS | STUDENT | Registration Form - Medical Information</title>

  <body class="bg-body-secondary">
    <nav class="navbar"
    style="background: var(--primary-bg);">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="./clinic-logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top mx-2">
            <h3 class="fw-bold text-light w-100 text-wrap" style="font-size: var(--step-2);">Welcome to Student Medical Record</h3>
          </a>
        </div>
      </nav>
    <div class="container-fluid" id="otp_container">
      <div class="container-fluid px-4 d-flex justify-content-center">

        <div class="container-fluid text-center">
          <div class="row mt-5 mb-2 text-light-emphasis bg-body-tertiary">
                <div id="col" class="col-md-3 p-2 fw-semibold bg-secondary-subtle" ><div class="child">Basic Information</div></div>
                <div id="col" class="col-md-3 p-2 fw-semibold bg-secondary-subtle"  ><div class="child">Covid Vaccine</div></div>
                <div id="col" class="col-md-3 p-2 fw-semibold text-white" style="background: var(--primary-bg);"><div class="child">Survey Form/ Medical Information</div></div>
                <div id="col" class="col-md-3 p-2 fw-semibold bg-secondary-subtle"><div class="child">Medical Requirements</div></div>
            </div>
            <div class="row">
                <div class="container bg-secondary-subtle p-4">
                    <div class="container text-start">
                        <div class="row p-2 text-center">
                            <h2>Medical History</h2>
                        </div>
                        <!-- form -->
                    </form> 
                        <div class="row">
                        <div class="col-md-6 p-2">


                                <div class="child text-start">
                                     <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="checkbox" type="checkbox" value="" >
                                        <label for="checkbox">Head and Neck Injury</label>
                                    </div>
                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="eye" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#eye_problem" aria-expanded="false" aria-controls="collapseExample">
                                        <label for="eye">Eye Promblem</label>
                                    </div>

                                    <div class="collapse" id="eye_problem"> 
                                        <div class="d-flex">
                                            <span class="text-dark fw-semibold mx-2">Are you wearing removable glasses?</span>
                                            <div class="form-check mx-2">
                                                <input class="form-check-input  rounded-0" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  Yes
                                                </label>
                                              </div>
                                              <div class="form-check mx-2">
                                                <input class="form-check-input  rounded-0" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  No
                                                </label>
                                              </div>
                                        </div>
                                      </div>


                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="Asthma" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#asthsma" aria-expanded="false" aria-controls="asthsma">
                                        <label for="Asthma">Asthma</label>
                                    </div>
                                    <div class="collapse" id="asthsma"> 
                                        <div class=" mb-3 mx-5">
                                            <label for="exampleFormControlInput1" class="form-label">Medication</label>
                                            <input type="email" class="form-control  shadow-none  rounded-0" id="medication">
                                          </div>
                                          <div class=" mb-3 mx-5">
                                            <label for="exampleFormControlInput1" class="form-label">Last Attack</label>
                                            <input type="email" class="form-control  shadow-none  rounded-0" id="last_attack">
                                          </div>
                                      </div>
                                 
                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="Ulcer" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#Hyperacidity" aria-expanded="false" aria-controls="Hyperacidity">
                                        <label for="Ulcer">Ulcer/Hyperacidity</label>
                                    </div>
                                    <div class="collapse" id="Hyperacidity"> 
                                        <div class=" mb-3 mx-5">
                                            <label for="exampleFormControlInput1" class="form-label">Medication</label>
                                            <input type="email" class="form-control  shadow-none  rounded-0" id="ulcer_medication">
                                          </div>
                                      </div>
                                    </div>

                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="tuberculosis" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#Tuberculosis" aria-expanded="false" aria-controls="Tuberculosis">
                                        <label for="tuberculosis">Pulmonary Tuberculosis</label>
                                    </div>
                                    <div class="collapse" id="Tuberculosis"> 
                                        <div class=" mb-3 mx-5">
                                            <label for="exampleFormControlInput1" class="form-label">Date of Diagnosis</label>
                                            <input type="email" class="form-control  shadow-none  rounded-0" id="diagnosis">
                                          </div>
                                          <div class=" mb-3 mx-5">
                                            <label for="exampleFormControlInput1" class="form-label">Date of medication Started</label>
                                            <input type="email" class="form-control  shadow-none  rounded-0" id="medication_tarted">
                                          </div>
                                        </div>

                                        <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                            <input class="form-check-input  rounded-0 my-2 mx-2" id="heart_promblem" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#heart" aria-expanded="false" aria-controls="heart">
                                            <label for="heart_promblem">Heart Problem</label>
                                        </div>
                                        <div class="collapse" id="heart"> 
                                            <div class=" mb-3 mx-5">
                                                <label for="exampleFormControlInput1" class="form-label">Please specify</label>
                                                <input type="email" class="form-control  shadow-none  rounded-0" id="heart_specify">
                                              </div>
                                              <div class=" mb-3 mx-5">
                                                <label for="exampleFormControlInput1" class="form-label">Medication</label>
                                                <input type="email" class="form-control  shadow-none  rounded-0" id="heart_medication">
                                              </div>
                                            </div>

                                            <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                                <input class="form-check-input  rounded-0 my-2 mx-2" id="Allergy" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#allergy" aria-expanded="false" aria-controls="allergy">
                                                <label for="Allergy">Allergy</label>
                                            </div>
                                            <div class="collapse" id="allergy"> 
                                                <div class=" mb-3 mx-5">
                                                    <label for="exampleFormControlInput1" class="form-label">Please specify</label>
                                                    <input type="email" class="form-control  shadow-none  rounded-0" id="heart_specify">
                                                  </div>
                                                  <div class=" mb-3 mx-5">
                                                    <label for="exampleFormControlInput1" class="form-label">Medication</label>
                                                    <input type="email" class="form-control  shadow-none  rounded-0" id="heart_medication">
                                                </div>
                                            </div>

                                            <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                                <input class="form-check-input  rounded-0 my-2 mx-2" id="Hospitalization" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#hospitalization" aria-expanded="false" aria-controls="hospitalization">
                                                <label for="Hospitalization">Hospitalization/Hospitalization</label>
                                            </div>
                                            <div class="collapse" id="hospitalization"> 
                                                <div class=" mb-3 mx-5">
                                                    <label for="floatingTextarea">Details</label>
                                                    <textarea class="form-control mt-2" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                  </div>
                                            </div>


                                </div>
                                <div class="col-md-6 p-2">
                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="Fainting" type="checkbox" value="" >
                                        <label for="Fainting">Fainting Spells (madalas na pagkahilo)/Seizure</label>
                                    </div>
                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="Fracture" type="checkbox" value="" >
                                        <label for="Fracture">Fracture, history of dengue,measles,chicken pox</label>
                                    </div>
                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="Vices" type="checkbox" value="" >
                                        <label for="Vices">Vices (alcoholic,smoker,etc.)</label>
                                    </div>
                                    <div class="input-group input-group-sm mb-2 d-flex align-items-center">
                                        <input class="form-check-input  rounded-0 my-2 mx-2" id="medical" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#significant" aria-expanded="false" aria-controls="significant">
                                        <label for="medical">Other significant medical history</label>
                                    </div>
                                    <div class="collapse" id="significant"> 
                                        <div class=" mb-3 mx-5">
                                            <label for="detail">Details</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <span class="fw-semibold my-2">Please indicate family medical history below:</span>
                                        <div id="col" class="col-xxl-6 p-2 fw-semibold ">
                                            <span class="fw-semibold">Father Side</span>
                                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                                <input type="text" aria-label="First name" name="father_history_1" id="father_medical_history_1" class="form-control shadow-none rounded-0 border-0  border-2 border-bottom bg-transparent border-bottom border-dark" >
                                            </div>
                                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                                <input type="text" aria-label="First name" name="father_history_2" id="father_medical_history_2" class="form-control shadow-none rounded-0 border-0  border-2 border-bottom bg-transparent border-bottom border-dark" >
                                            </div>
                                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                                <input type="text" aria-label="First name" name="father_history_3" id="father_medical_history_3" class="form-control shadow-none rounded-0 border-0  border-2 border-bottom bg-transparent border-bottom border-dark" >
                                            </div>
                                        </div>
                                        <div id="col" class="col-xxl-6 p-2 fw-semibold ">
                                            <span class="fw-semibold">Mother Side</span>
                                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                                <input type="text" aria-label="First name" name="mother_history_1" id="mother_medical_history_1" class="form-control shadow-none rounded-0 border-0  border-2 border-bottom bg-transparent border-bottom border-dark" >
                                            </div>
                                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                                <input type="text" aria-label="First name" name="mother_history_2" id="mother_medical_history_2" class="form-control shadow-none rounded-0 border-0  border-2 border-bottom bg-transparent border-bottom border-dark" >
                                            </div>
                                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                                <input type="text" aria-label="First name" name="mother_history_3" id="mother_medical_history_3" class="form-control shadow-none rounded-0 border-0  border-2 border-bottom bg-transparent border-bottom border-dark" >
                                            </div>
                                        </div>
                                    </div>
                                </div>   


                            <!-- </div> -->
                            
                    </div>
                </div>

                </form>
                <!-- form -->
            </div>
          </div>
          <div class="d-flex justify-content-end p-4">
            <button class="btn btn-primary px-3 fw-bold m-2 ">NEXT</button>
          </div>
      </div>
    </div>
</body>

</html> 