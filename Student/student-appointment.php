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
            <li class="sidebar-menu-item active">
                <a href="#">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6 ">Dashboard</span>
                </a>
            </li>
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
    <style>
        .title{
            margin: 10px 0 0 10px;
        }
        .content{

        }
        .content iframe{
            width: 100%;
            height: 80vh;
        }
    </style>
    <!-- start: Main -->
    <main class="bg-light">
        <div class="">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 d-flex justify-content-center" style="background: var(--primary-bg);">
                <!-- <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i> -->
                <img src="./clinic-logo.png" class="img-thumbnail bg-transparent border-0" style="pointer-events: none;" width="50" height="50" alt="...">
                <h5 class="fw-bold mb-0 text-light" style="pointer-events: none;" > Quezon City University Clinic</h5>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="container">
                <div class="title">
                    <h3>Appointment</h3>
                </div>
                <div class="content">
                    <iframe src="../Appointment/index.php" frameborder="0"></iframe>
                </div>
            </div>
            <!-- <div class="p-5 ">
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
                                    <iframe src="../../Appointment/index.php" frameborder="0"></iframe>
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

        
            </div> -->
            <!-- end: Content -->
    </main>
    <div class="sidenav-toggle px-3 py-2 rounded-circle fs-4 bg-primary fw-bold text-white" id="sidenav-toggle"><i class="fa-solid fa-bars"></i></div>
    <!-- <script src="../assets/js/jquery.min.js"></script> -->

    <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="javascript/script.js"></script>
</body>
</html>