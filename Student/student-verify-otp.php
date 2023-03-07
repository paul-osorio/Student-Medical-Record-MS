<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="custom-properties.css">
  <title>STUDENT | VERIFY OTP</title>
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
  <title>STUDENT | VERIFY OTP</title>

  <body>
    <nav class="navbar"
    style="background: var(--primary-bg);">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="./clinic-logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top mx-2">
            <h3 class="fw-bold text-light w-100 text-wrap" style="font-size: 25px;">Welcome to Student Medical Record MS</h3>
          </a>
        </div>
      </nav>
    <div class="container-fluid d-flex align-items-center justify-content-center m-auto" style="min-height:80vh">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h6 class="card-title py-4"><center>Enter the 6-digit code sent to john.nicole.abihay@gmail.com. Don’t see the email? Send a new code.</center></h6>
              <form>
                <div class="mb-3 ">
                    <input type="text" class="form-control" id="otp_input" placeholder="Enter your OTP" maxlength="6" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    <p class="float-end p-2"><span id="count" data-count="0">0</span>/6</p>
                  </div>
                <button type="submit" class="btn w-100 fw-bold text-light" style="background: var(--primary-bg);">VERIFY OTP</button>
              </form>
            </div>
          </div>
    </div>
</body>

</html>