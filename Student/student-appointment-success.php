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
            <div class="p-5" >
                <div class="row justify-content-center align-items-center" style="height:70vh">
                    <div class="col-xl-6 text-dark text-center py-3 px-2 bg-white shadow">
                        <span class="fw-bold fs-3 text-shadow">Appointed Successfully!</span>
                        <div class="p-3">
                            <i class="fa-solid fa-circle-check text-success fs-1"></i>
                        </div>
                        <p class="px-2">You can download or print the file sent to your email and bring it on the 
                            day of appointment.</p>
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