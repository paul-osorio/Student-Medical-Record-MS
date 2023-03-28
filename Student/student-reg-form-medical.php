

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
      <div class="container-fluid " id="otp_container">
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
                    <form> <!-- form -->
                        <div class="row">
                          <div class="col-xxl-6 p-2">

                            <div class="mb-3">
                              <label for="formFileDisabled" class="form-label">Complete Blood Count (CBC)</label>
                              <input class="form-control" type="file" id="formFileDisabled" >
                            </div>

                            <div class="mb-3">
                              <label for="formFile" class="form-label">Urinalysis</label>
                              <input class="form-control" type="file" id="formFile" >
                            </div>

                            <div class="mb-3">
                              <label for="formFile" class="form-label">Chest X-ray</label>
                              <input class="form-control" type="file" id="formFile" >
                            </div>
                            
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Medical Certificate</label>
                              <input class="form-control" type="file" id="formFile" >
                            </div>

                          </div> 
                          <span class="fw-semibold my-2 text-danger fw-semibold text-center">Please make sure to upload the required document above before submitting!</span>
                        </div>
                  </form> <!-- form -->
                </div>

              
          
            </div>
          </div>
          <div class="d-flex justify-content-end p-4">
            <button class="btn btn-primary px-3 fw-bold m-2 ">NEXT</button>
          </div>
      </div>
    </div>
</body>

</html> 