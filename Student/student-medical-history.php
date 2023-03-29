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
<?php include "./nav-layout.php"; ?>

    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="bg-light" id="history_content">
        <div >
            <!-- start: Navbar -->
            <nav class="px-3 py-2 d-flex justify-content-center" style="background: var(--primary-bg);">
                <!-- <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i> -->
                <img src="./clinic-logo.png" class="img-thumbnail bg-transparent border-0" style="pointer-events: none;" width="50" height="50" alt="...">
                <h5 class="fw-bold mb-0 text-light" style="pointer-events: none;" > Quezon City University Clinics</h5>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <nav class="py-3 px-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Medical History</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Survey Form / Medical History</li>
                </ol>
              </nav>
            <div class="px-4">
                  <span class="fs-3 fw-semibold ">Medical History</span>
                  <div class="mt-3 d-flex">
                        <div class="card p-4" style="width:25rem;height:20rem;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                <span>Status: </span>
                                <span class="rounded-pill px-2 mx-2 bg-danger text-light">Not Cleared</span>
                                </div>
                                <div>
                                <button class="btn" id="view_history"><i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                                </div>
                           </div>
                            <!-- <div class="d-flex justify-content-between mb-3"><span></span><span>11:22 AM</span></div> -->
                           <div class="overflow-y-scroll">
                            <span class="fw-semibold">Date: </span><p class="my-2 mx-4">November 25, 2022</p>
                            <span class="fw-semibold">Time: </span><p class="my-2 mx-4">11:22 AM</p>
                           
                            <span class="fw-semibold">Nurse Assisted:</span><p class="my-2 mx-4">Nr. Nene D. Lisangan</p>
                            <span class="fw-semibold">Temperature:</span><p class="my-2 mx-4">37.5</p>
                            <span class="fw-semibold">Length of Confinement:</span><p class="my-2 mx-4">1 hr</p>
                           
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