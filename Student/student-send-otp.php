

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

  <body>
    <nav class="navbar"
    style="background: var(--primary-bg);">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="./clinic-logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top mx-2">
            <h3 class="fw-bold text-light w-100 text-wrap" style="font-size: var(--step-2);">Welcome to Quezon City University Clinic</h3>
          </a>
        </div>
      </nav>
    <div class="container" id="otp_container">
      <div class="container-fluid d-flex align-items-center justify-content-center m-auto" style="min-height:80vh">
          <div class="card" style="width: 30rem;">
              <div class="card-body">
                <h5 class="card-title">Enter your School Email</h5>

                <form  action="send-email.php" method="post">

                  <div class="form-floating mb-3">
                      <input type="email" name="email" id="email" class="form-control" required>
                      <label for="floatingInput">Email address...</label>
                    </div>
                    <button name="submit" id="send_otp" class="btn w-100 fw-bold text-light" style="background: var(--primary-bg);">SEND OTP</button>

                </form>
                
              </div>
          </div>
      </div>
    </div>
</body>

</html>