<?php
  error_reporting(0);
  session_start(); 

  $stud_id = $_SESSION['student_id'];

  if(!empty($stud_id)){

    header("location: ./redo/pages/personal-information.php");

  }

?>


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
  <title>SMRMS | STUDENT | LOGIN</title>
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
  <title>SMRMS | STUDENT | LOGIN</title>

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
      <main class="p-4" style="height:80vh;">
        <div class="row border mt-5 border-3 text-center align-self-center justify-content-center">
          <div class="col-sm-5">
              <div class="container rounded py-5 px-4 bg-secondary-subtle shadow">

                  <form action="./process/login_auth.php" method="POST">
                    
                    <div class="form-floating mb-3">
                      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    
                    <div class="form-floating">
                      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                   <div class="text-end mt-3 py-3">
                      <a href="#">Forget Password</a>
                   </div>

                    <div class="mb-3">
                      <button type="submit" name="submit_btn" class="btn btn-primary fw-semibold px-5 rounded-pill shadow"> LOG IN</button>
                    </div>
                    <div >

                      <a href="./student-send-otp.php" class="btn btn-light fw-semibold px-5 rounded-pill"> register</a>
                      
                    </div>

                  </form>
              </div>
          </div>

          <div class="col-md-6 position-relative px-4 border border-3 border-danger">
            <div class="container bg-primary position-relative"
            style="height: 100%;">
             
            </div>
          </div>

      </div>
      </main>
</body>

</html> 