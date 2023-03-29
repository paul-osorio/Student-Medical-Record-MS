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
                <h5 class="fw-bold mb-0 text-light" style="pointer-events: none;" > Quezon City University Clinics</h5>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <nav class="py-3 px-2" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Medical Information</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Survey Form / Medical History</li>
                </ol>
              </nav>
            <div class="p-4">
                  <span class="fs-3 fw-semibold ">Medical List</span>
                  <div class="mt-3 d-flex">
                        <div class="card p-4" style="width:25rem;height:25rem;">
                            <div class="d-flex justify-content-between mb-3"><span>November 25, 2022</span><span>11:22 AM</span></div>
                           <div class=" overflow-auto">
                            <span class="fw-semibold">Type of illness:</span><p class="my-2 mx-4">Asthma</p>
                            <span class="fw-semibold">Medication:</span><p class="my-2 mx-4">Inhaled Corticosteroid</p>
                            <span class="fw-semibold">Last Attack:</span><p class="my-2 mx-4">November 20, 2022</p>
                            <span class="fw-semibold">Type of illness:</span><p class="my-2 mx-4">Eye Problem</p>
                            <span class="fw-semibold">Wearing removable lenses?</span><p class="my-2 mx-4">No</p>
                            <span class="fw-semibold">Type of illness:</span><p class="my-2 mx-4">Eye Problem</p>
                            <span class="fw-semibold">Wearing removable lenses?</span><p class="my-2 mx-4">No</p>
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