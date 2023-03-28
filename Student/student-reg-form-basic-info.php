

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
  <title>Document</title>
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
  <title>Document</title>

  <body class="bg-body-secondary">
    <nav class="navbar"
    style="background: var(--primary-bg);">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="./clinic-logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top mx-2">
            <h3 class="fw-bold text-light w-100 text-wrap" style="font-size: var(--step-2);">Welcome to Quezon City University Clinic</h3>
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


        <!-- BASIC INFORMATION -->
            <div class="row" id="row_1">

                <div class="container bg-secondary-subtle p-4">
                    <div class="container text-start">
                      <!-- form -->
                      <form> 
                        <div class="row">

                          <div class="col-md-6 p-2">
                              <div class="container-fluid w-100 d-grid justify-content-center">
                                  <img src="./clinic-logo.png" class="img-thumbnail bg-transparent border-0" width="150px" height="150px" alt="...">
                              </div>  
                            
                                  <span class="text-dark fw-semibold px-1">Firstname</span>
                                  <div class="input-group input-group-sm mb-3 my-2">
                                      <input type="text" aria-label="Last name" name="Firstname" class="form-control shadow-none" >
                                  </div>
                                  <span class="text-dark fw-semibold px-1">Lastname</span>
                                  <div class="input-group input-group-sm mb-3 my-2">
                                      <input type="text" aria-label="Last name" name="lastname" class="form-control shadow-none" >
                                  </div>
                                  <span class="text-dark fw-semibold px-1">Middlename</span>
                                  <div class="input-group input-group-sm mb-3 my-2">
                                      <input type="text" aria-label="Middle name" name="middlename" class="form-control shadow-none" >
                                  </div>
      
                                  <div class="row mb-2 text-white">
                                      <div id="col" class="col-6 p-2  fw-semibold">
                                          <div class="child text-start">
                                              <span class="text-dark">Extenstion</span>
                                              <div class="input-group input-group-sm mb-3 my-2">
                                                  <input type="text" aria-label="First name" id="extenstion" class="form-control shadow-none" >
                                              </div>
                                          </div>
                                    </div>
      
                                    <div id="col" class="col-6 p-2  fw-semibold">
                                      <div class="child text-start">
                                          <span class="text-dark">Sex</span>
                                          <div class="input-group input-group-sm mb-3 my-2">
                                              <input type="text" aria-label="First name" id="sex" class="form-control shadow-none" >
                                          </div>
                                      </div>
                                </div>
      
                                <div id="col" class="col-6 p-2  fw-semibold">
                                  <div class="child text-start">
                                      <span class="text-dark">Age</span>
                                      <div class="input-group input-group-sm  mb-3 my-2">
                                          <input type="text" aria-label="First name" id="age" class="form-control shadow-none" >
                                      </div>
                                  </div>
                                </div>
                                
                                <div id="col" class="col-6 p-2  fw-semibold">
                                  <div class="child text-start">
                                      <span class="text-dark">Birthdate</span>
                                      <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                          <input type="date" id="Birthdate" aria-label="Birthdate"  class="form-control shadow-none" placeholder="Birthdate">
                                      </div>
                                  </div>
                                </div>
                                      
                                  </div>
                                  <div class="row mb-2">
                                      <div id="col" class="col-xxl-6 p-2  fw-semibold">
                                          <div class="child text-start">
                                              <span class="text-dark">Cellphone Number</span>
                                              <div class="input-group input-group-sm mb-3 my-2">
                                                  <input type="text" aria-label="First name" id="number" class="form-control shadow-none" >
                                              </div>
                                          </div>
                                        </div>
                                        
                                        <div id="col" class="col-xxl-6 p-2  fw-semibold">
                                          <div class="child text-start">
                                              <span class="text-dark">School Email Address</span>
                                              <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                                  <input type="email" id="School_address" aria-label="Birthdate"  class="form-control shadow-none" >
                                              </div>
                                          </div>
                                        </div> 
                                                                          
                                  </div>
      
                                      <span class="text-dark fw-semibold">Complete Address</span>
                                      <div class="input-group input-group-sm col-xxl-6 mb-3 my-2">
                                          <input type="text" id="address_2" aria-label="Birthdate" class="form-control shadow-none" >
                                      </div>

                              </div>
                          <div class="col-md-6">

                            
                              <h2 class="py-4 fw-bold">IN CASE OF EMERGENCY</h2>
                                                      
                              <span class="text-dark fw-semibold">Fullname</span>
                              <div class="input-group input-group-sm  mb-3 my-2">
                                  <input type="text" aria-label="Last name" name="fullname" class="form-control shadow-none" >
                              </div>
                              <span class="text-dark fw-semibold">Relationship</span>
                              <div class="input-group input-group-sm  mb-3 my-2">
                                  <input type="text" aria-label="Last name" name="relationship" class="form-control shadow-none" >
                              </div>
                              <span class="text-dark fw-semibold">Contact Number</span>
                              <div class="input-group input-group-sm  mb-3 my-2">
                                  <input type="text" aria-label="Middle name" name="contact_2" class="form-control shadow-none" >
                              </div>
                              <span class="text-dark fw-semibold"> Complete Address</span>
                              <div class="input-group input-group-sm  mb-3 my-2">
                                  <input type="text" aria-label="Middle name" name="address_2" class="form-control shadow-none" >
                              </div>
                          </div>
                        </div>
                        
                      </form>
                    <!-- form -->
                    </div>
                </div>

            </div>


 <!-- COVID VACCINE -->


 <!-- COVID VACCINE -->


            <div class="d-flex justify-content-end p-4">
              <button class="btn btn-primary px-3 fw-bold m-2 ">NEXT</button>
            </div>
          </div>
      </div>
    </div>
</body>

</html> 