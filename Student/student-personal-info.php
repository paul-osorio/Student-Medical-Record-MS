

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="custom-properties.css">

        <link rel="stylesheet" href="mediaQueries.css">
        <link rel="stylesheet" href="nav-layout.css">

        <script src="javascript/action.js" defer></script>
        
        <title>Document</title>
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
                <h5 class="fw-bold mb-0 text-light " style="pointer-events: none;" > Quezon City University Clinics</h5>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="p-5">
                <h5>PERSONAL INFORMATION</h5>

                <div class="row" id="main_row">
                    <div class="col-xl-8" id="col-1">
                        <h4 class="fw-bold" id="student_id"> <?=$stud_logged['student_id']?> </h4>
                        <p class="fw-semibold" id="student_name"> <?=$stud_logged['lastname']?>, <?=$stud_logged['firstname']?> <?=$stud_logged['middlename']?> </p>
                        <p class="text-secondary" id="student_course">  <?=$stud_logged['degree']?> (<?=$stud_logged['code']?>)</p>
                        <p class="text-secondary" id="student_email"> <?=$stud_logged['email']?> </p>
                        <p class="px-3 py-2 status success-status text-light rounded text-capitalize" id="student_status">Status :  <?=$stud_logged['remarks']?></p>
                    </div>
                    <div class="col-sm-4 py-3 d-grid justify-content-center align-items-center">
                        <img src="../ADMIN PANEL (UPDATED UI)/assets/<?=$stud_logged['image']?>" class="" width="300" height="200" alt="">
                    </div>
                </div>

              <hr class="divider">

              <div class="row">
                    <span class="text-capitalize fw-bold fs-4 px-2">basic information</span>
                        <div id="col" class="col-sm-1 mt-3 fw-semibold">
                            <div class="child text-start">
                                <span class="text-dark">Sex</span>
                                <div class="input-group input-group-sm mb-3 my-2">
                                    <input type="text" aria-label="First name" id="sex" class="form-control shadow-none"  value="<?=$stud_logged['gender']?>" disabled>
                                </div>
                            </div>
                    </div>

                    <div id="col" class="col-sm-1 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Age</span>
                            <div class="input-group input-group-sm  mb-3 my-2">
                                <input type="text" aria-label="First name" id="age" class="form-control shadow-none" value="<?=$stud_logged['age']?>" disabled>
                            </div>
                        </div>
                    </div>
                    
                    <div id="col" class="col-sm-3 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Birthdate</span>
                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                <input type="date" id="Birthdate" aria-label="Birthdate"  class="form-control shadow-none" value="<?=$stud_logged['birthdate']?>" placeholder="Birthdate" disabled>
                            </div>
                        </div>
                    </div>
                    <div id="col" class="col-sm-6 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Complete Address</span>
                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                <input type="text" id="Birthdate" aria-label="Birthdate"  class="form-control shadow-none" placeholder="Complete Address" value="<?=$stud_logged['address']?>" disabled>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <hr class="divider">

                <div class="row">
                    <span class="text-capitalize fw-bold fs-4 px-2">Emergency Contact</span>
                        <div id="col" class="col-sm-6 mt-3 fw-semibold">
                            <div class="child text-start">
                                <span class="text-dark">Fullname</span>
                                <div class="input-group input-group-sm mb-3 my-2">
                                    <input type="text" aria-label="First name" id="sex" class="form-control shadow-none"  disabled>
                                </div>
                            </div>
                    </div>

                    <div id="col" class="col-sm-6 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Relationship</span>
                            <div class="input-group input-group-sm  mb-3 my-2">
                                <input type="text" aria-label="First name" id="age" class="form-control shadow-none"  disabled>
                            </div>
                        </div>
                    </div>
                    <div id="col" class="col-sm-6 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Contact Number</span>
                            <div class="input-group input-group-sm mb-3 my-2">
                                <input type="text" aria-label="First name" id="sex" class="form-control shadow-none"  disabled>
                            </div>
                        </div>
                </div>

                <div id="col" class="col-sm-6 mt-3 fw-semibold">
                    <div class="child text-start">
                        <span class="text-dark">Complete Address</span>
                        <div class="input-group input-group-sm  mb-3 my-2">
                            <input type="text" aria-label="First name" id="age" class="form-control shadow-none"  disabled>
                        </div>
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