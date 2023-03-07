<?php

if(isset($_POST['submit_email'])){

    echo'
    <nav class="navbar"
    style="background: var(--primary-bg);">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="./clinic-logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top mx-2">
            <h3 class="fw-bold text-light w-100 text-wrap" style="font-size: var(--step-2);">Welcome to Quezon City University Clinic</h3>
          </a>
        </div>
      </nav>
    <div class="container-fluid d-flex align-items-center justify-content-center m-auto" style="min-height:80vh">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h6 class="card-title py-4">Enter the 6-digit code sent to john.nicole.abihay@gmail.com. Don’t see the email? Send a new code.</h6>
              <form>
                <div class="mb-3 ">
                    <input type="text" class="form-control" id="otp_input" placeholder="Enter OTP.." maxlength="6" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    <p class="float-end p-2"><span id="count" data-count="0">0</span>/6</p>
                  </div>
                <button type="submit" class="btn w-100 fw-bold text-light" style="background: var(--primary-bg);">VERIFY OTP</button>
              </form>
            </div>
          </div>
    </div>
    ';
}

?>