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
    <div class="sidebar position-fixed top-0 bottom-0" style=background:var(--primary-bg)> 
        <div class="d-flex flex-column justify-content-center align-items-center p-3">
            <!-- <img src="./clinic-logo.png" class="img-thumbnail border-0 bg-transparent" width="100" height="100" alt="..."> -->
          <div class="d-flex flex-column justify-content-center align-items-center mt-4 p-2">
            <i class="fa-solid fa-user"  style="font-size: var(--step-5);"></i>
            <p class="text-white my-3" style="font-size: var(--step--1);">Student Name</p>
            <p class="text-white" style="font-size: var(--step--0)">School Email Address</p>
          </div>

        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <!-- <li class="sidebar-menu-item active">
                <a href="#">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6 ">Dashboard</span>
                </a>
            </li> -->
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase text-light">Main</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6 ">Medical Status</span>
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                        <a href="#">
                           Personal Information
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                        <a href="#">
                           Medical Requirements
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                        <a href="#">
                            Medical Information
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                        <a href="#">
                           Appointment
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase text-white">Settings</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-shopping-cart-2-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6">Manage Account</span>

                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <!-- <li class="sidebar-dropdown-menu-item">
                        <a href="#">
                            Shop
                        </a>
                    </li> -->
                </ul>
            </li>
            <li class="sidebar-menu-item">
                <a href="#">
                    <i class="ri-calendar-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>

    <!-- end: Sidebar -->

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
                        <h4 class="fw-bold" id="student_id">19-1220</h4>
                        <p class="fw-semibold" id="student_name">Arnejo, Clifford Dle M.</p>
                        <p class="text-secondary" id="student_course">Bachelor of Science in Information Technology (BSIT)</p>
                        <p class="text-secondary" id="student_email">clifford.dle.arnejo@gmail.com</p>
                        <p class="px-3 py-2 status success-status text-light rounded text-capitalize" id="student_status">Status : complete</p>
                    </div>
                    <div class="col-sm-4 py-3 d-grid justify-content-center align-items-center">
                        <img src="https://images.unsplash.com/photo-1585919751768-dff94a989751?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="" width="300" height="200" alt="">
                    </div>
                </div>

              <hr class="divider">

              <div class="row">
                    <span class="text-capitalize fw-bold fs-4 px-2">basic information</span>
                        <div id="col" class="col-sm-1 mt-3 fw-semibold">
                            <div class="child text-start">
                                <span class="text-dark">Sex</span>
                                <div class="input-group input-group-sm mb-3 my-2">
                                    <input type="text" aria-label="First name" id="sex" class="form-control shadow-none"  disabled>
                                </div>
                            </div>
                    </div>

                    <div id="col" class="col-sm-1 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Age</span>
                            <div class="input-group input-group-sm  mb-3 my-2">
                                <input type="text" aria-label="First name" id="age" class="form-control shadow-none"  disabled>
                            </div>
                        </div>
                    </div>
                    
                    <div id="col" class="col-sm-3 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Birthdate</span>
                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                <input type="date" id="Birthdate" aria-label="Birthdate"  class="form-control shadow-none" placeholder="Birthdate" disabled>
                            </div>
                        </div>
                    </div>
                    <div id="col" class="col-sm-6 mt-3 fw-semibold">
                        <div class="child text-start">
                            <span class="text-dark">Complete Address</span>
                            <div class="input-group input-group-sm col-xxl-3 mb-3 my-2">
                                <input type="text" id="Birthdate" aria-label="Birthdate"  class="form-control shadow-none" placeholder="Complete Address" disabled>
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