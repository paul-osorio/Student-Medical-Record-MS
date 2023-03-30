<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1  .0">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="custom-properties.css">

        <link rel="stylesheet" href="mediaQueries.css">
        <link rel="stylesheet" href="nav-layout.css">

        <script src="javascript/action.js" defer></script>
        <link rel="icon" type="image/png" href="./assets/favcon.png"/>
        <title>SMRMS | STUDENT | Appointment</title>

    </head>
<body>
    
    <!-- Navigation -->
    <?php include "./nav-layout.php"; ?>

    <!-- start: Main -->
    <main class="bg-light">
        <div class="">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 d-flex justify-content-center" style="background: var(--primary-bg);">
                <!-- <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i> -->
                <img src="./clinic-logo.png" class="img-thumbnail bg-transparent border-0" style="pointer-events: none;" width="50" height="50" alt="...">
                <h5 class="fw-bold mb-0 text-light" style="pointer-events: none;" > Quezon City University Clinics</h5>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="p-5 ">
                <div class="row bg-white p-3 shadow">
                  
                    <div class="col-md-6">
                        <span class="text-dark fw-bold fs-4">APPOINTMENT DETAILS</span>

                        <div>
                            <select class="form-select mb-3 mt-3 rounded-0" aria-label="Default select example">
                                <option selected>TYPE OF APPOINTMENT</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                              <select class="form-select mb-3 rounded-0" aria-label="Default select example">
                                <option selected>REASON FOR APPOINTMENT</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                              <div class="border border-1 text-center text-dark">
                                <p class="p-2 fw-semibold">This box will appear only if the student 
                                    choose the ‘others’ in reason for 
                                    appointment. </p>
                              </div>
                             <div class="py-2" id="calendar">
                                <p class="fw-semibold text-start" style="color:var(--primary-bg)"> Please select your preferred date and time of appointment</p>
                                <div class="w-100 h-100  p-3  text-center bg-secondary-subtle">
                                    <span>CALENDAR</span>
                                    <p>*KAYO NA LANG MAGLAGAY :3</p>
                                </div>  
                             </div>
                        </div>
  
                    </div>
                    
                    <div class="col-md-6 text-dark">

                        <table class="table table-borderless text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Time</th>
                                    <th scope="col">Available Slots</th>
                                  </tr>
                            </thead>
                            <tbody>
                               <tr>
                                <td >
                                    <input type="radio" class="btn-check" name="options-outlined" id="8am" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="8am">8:00 am</label>
                                </td>
                                <td class="border-start border-2 border-dark">10</td>
                              </tr>
                              <tr>
                                <td >
                                    <input type="radio" class="btn-check" name="options-outlined" id="10am" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="10am">10:00 am</label>
                                </td>
                                <td class="border-start border-2 border-dark">3</td>
                              </tr>
                              <tr>
                                <td >
                                    <input type="radio" class="btn-check" name="options-outlined" id="1pm" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="1pm">1:00 pm</label>
                                </td>
                                <td class="border-start border-2 border-dark">3</td>
                              </tr>
                              <tr>
                                <td >
                                    <input type="radio" class="btn-check" name="options-outlined" id="3pm" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="3pm">3:00 pm</label>
                                </td>
                                <td class="border-start border-2 border-dark">3</td>
                              </tr>
                            </tbody>
                          </table>
                          <p class="text-start">You have set your appointment on <b>Date</b> with <b>reference no. </b> ######</p>
                          <div class="container d-flex align-items-center justify-content-center p-3">
                            <img src="./QR_code.svg.webp" width="200" height="200" class="image-fluid" alt="">
                          </div>
                         <div class="d-flex justify-content-end">
                            <button class="btn text-white fw-semibold mx-1" style="background: var(--bg-back-button)">BACK</button>
                            <button class="btn text-white fw-semibold mx-1" style="background: var(--primary-bg);">NEXT</button>
                         </div>
                        </div>

                </div>
            </div>

        
            </div>
            <!-- end: Content -->
    </main>
    <div class="sidenav-toggle px-3 py-2 rounded-circle fs-4 bg-primary fw-bold text-white" id="sidenav-toggle"><i class="fa-solid fa-bars"></i></div>
    <!-- <script src="../assets/js/jquery.min.js"></script> -->

    <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="javascript/script.js"></script>
</body>
</html>