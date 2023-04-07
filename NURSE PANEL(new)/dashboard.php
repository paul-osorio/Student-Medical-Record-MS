<?php 
session_start();

if (isset($_SESSION['emp_id']) && isset($_SESSION['username'])) {

  ?>

  <?php

  include('db_conn.php');
  $emp_id = $_SESSION['emp_id'];

  // SELECT ALL ADMINS
  $fetchNurseAccount = mysqli_query($conn, "SELECT * FROM `nurses` WHERE emp_id = '$emp_id'");
  $nurse = mysqli_fetch_assoc($fetchNurseAccount);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/favcon.png"/>
    <title>SMRMS | NURSE | Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./css/patients.css"/>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="action.js" defer></script>
  <script src="./js/calendar.js"></script>
  <script src="./js/time.js"></script>

</head>
<body>
    <div class="container-fluid bg-light-subtle">
        <nav class="row">
            <div class="py-2 px-3 d-flex justify-content-between align-items-center" style="background-color:#134E8E;">
                <div class="logo navbar-brand" href="#">
                    <img src="./assets/QCUClinicLogo.png" width="50" height="50" alt="" />
                    <span class="fw-regular fs-4 text-light">Student Medical Record</span>
                  </div>
                  <div class="container-fluid d-flex justify-content-start">
                    <button
                      id="sidebarCollapse"
                      class="navbar-toggle border-0 bg-dark ms-0 ms-md-2 ms-lg-0 order-1 order-md-1"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="ms-auto order-sm-0" id="navbarNav">
                      <ul
                        class="navbar-nav ms-auto text-white d-flex align-items-left align-items-lg-center"
                      >
                        <span></span>
                        <li class="nav-item px-0 mx-2 d-flex align-items-center">
                          <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
            </div>
        </nav>
        <div class="row">
          <div class="col-md-2 p-0 position-relative" style="min-height: 100vh; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px; background: #05285c;">
             <div class="w-100">
              <ul class="mt-4 list-unstyled navbar-nav ps-0 ">

                  <li  class="px-4 w-100 mb-1 nav-item active tab py-2">
                    <a href="dashboard.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-area-chart mx-2"></i><span>Home</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="student.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-users mx-2"></i><span>Students</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="Mreport.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-plus-square mx-2"></i><span>Medical Requirements</span></span></a>
                  </li>
                  <!-- <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="department.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-building-o mx-2"></i><span>Departments</span></span></a>
                  </li> -->
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="appointment.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-calendar mx-2" aria-hidden="true"></i><span>Appointments</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                   <a href="medicines.php" class="nav-link"><span class="fx-5 fw-800 text-light"> <i class="fa fa-medkit mx-2" aria-hidden="true"></i><span>Medicines</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                    <a href="report.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-book mx-2"></i><span>Reports</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                    <a href="activityLog.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-history mx-2"></i><span>Activity Log</span></span></a>
                  </li>
                  <li  id="account_btn" class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="account.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-user-o mx-2" aria-hidden="true"></i><span>Account</span></span></a>
                  </li>
                </ul>
             </div>
          </div>
            <div class="col-sm-10 p-3" >    
              <div class="container-fluid py-3">
                <div class="row d-flex">
                  <div class="col-md-8">

                    <!-- <div class="d-flex ">

                     
                      <div class="mx-2 fw-bold text-light d-flex justify-content-between w-100">
                        
                        
                        <div class="d-grid  justify-content-center text-center">
                          <p class="fs-2 p-0 m-0">20</p>
                          <p class="p-0 m-0">Consult Today</p>
                        </div>
  
                      </div>
                       </div> -->

                    <div class="px-3 rounded-3 d-flex align-items-center mt-3" style="background:#0C4079";>

                      <div class="position-relative" style="width:180px;height:150px;">
                        <img src="./assets/<?=$nurse['profile_pic']?>" class="position-absolute w-100 h-100">
                        <!-- style="top:-25%" -->
                      </div>
                      <div class="d-flex justify-content-between align-items-center w-100 mx-3">


            
                        <div class="text-light">
                          <p><?=$nurse['emp_id']?></p>
                          <p class="fw-bold"> <?=$nurse['firstname']?> <?=$nurse['lastname']?></p>
                          <p><?=$nurse['position']?></p>
                        </div>
                        <div class="text-light text-center">
                          <p class="fw-bold fs-2">20</p>
                          <p class="p-0">Consult Today</p>
                        </div>
                      </div>
                      
    


                    </div>

                    <div class="d-flex justify-content-between mt-3">
                      <p class="fw-bold">RECENT APPOINTMENTS</p>
                      <a href="#"> View All</a>
                    </div>
                    <table class="table table-borderless">
                      <thead>
                        <tr class="text-light" style="background: #2D6DB2;">
                          <th scope="col">Student No.</th>
                          <th scope="col">Name</th>
                          <th scope="col">Course</th>
                          <th scope="col">Year</th>
                          <th scope="col">status</th>
                        </tr>
                      </thead>
                      <tbody class="table-group-divider">
                        <tr class="border-bottom">
                          <td>17-1234</td>
                          <td>Juan T. Dela Cruz</td>
                          <td>BSIT</td>
                          <td>4th</td>
                          <td class="text-warning">Pending</td>
                        <tr class="border-bottom">
                          <td>17-1234</td>
                          <td>Juan T. Dela Cruz</td>
                          <td>BSIT</td>
                          <td>4th</td>
                          <td class="text-warning">Pending</td>
                        <tr class="border-bottom">
                          <td>17-1234</td>
                          <td>Juan T. Dela Cruz</td>
                          <td>BSIT</td>
                          <td>4th</td>
                          <td class="text-warning">Pending</td>
                        
                       
                      </tbody>
                    </table>

                    
                    <div class="d-flex justify-content-between mt-3">
                      <p class="fw-bold">LIST OF CONSULTED STUDENTS</p>
                      <a href="#"> View All</a>
                    </div>
                    <table class="table table-borderless">
                    <thead>
                        <tr class="text-light" style="background: #2D6DB2;">
                          <th scope="col">Student No.</th>
                          <th scope="col">Name</th>
                          <th scope="col">Course</th>
                          <th scope="col">Year</th>
                          <th scope="col">status</th>
                        </tr>
                      </thead>

                      <tbody class="table-group-divider">
                        <?php
                        include "db_conn.php";
                        $sql = "SELECT * FROM students LIMIT 4";
                        $run_sql = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                        if(mysqli_num_rows($run_sql) > 0){
                          while ($row = mysqli_fetch_array($run_sql)) {
  ?>
     <tr class="border-bottom">
                          <td><?php echo $row['student_id'] ?></td>
                          <td><?php echo $row['firstname'] ." ". $row['lastname'] ?></td>
                          <td><?php echo $row['course'] ?></td>
                          <td><?php echo $row['year_level'] ?></td>
                          <td><?php echo $row['remarks'] ?></td>
                        </tr>
 <?php }
                        }
                        
                        ?>
                      
                      
                   
                      </tbody>
                    </table>
                  </div>

                  
                  <div class="col-md-3 flex-grow-1">
                    <div class="card mb-1" style="border:none;">
                      <div class="card-header text-light" style="background-color:#134E8E;">
                        <h2 id="time-display" style="text-align:center;">Loading...</h2>
                        <h4 class="card-title text-center" id="month-year" style="background-color:#134E8E;"></h4>
                      </div>
                        <table class="table table-bordered table-hover mb-0" style="border:transparent; text-align:center;min-height: 20rem;">
                          <thead>
                            <tr style="background-color:white;">
                              <th class="text-center">Sun</th>
                              <th class="text-center">Mon</th>
                              <th class="text-center">Tue</th>
                              <th class="text-center">Wed</th>
                              <th class="text-center">Thu</th>
                              <th class="text-center">Fri</th>
                              <th class="text-center">Sat</th>
                            </tr>
                          </thead>
                          <tbody id="calendar-body">
                          </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                      <p class="fw-bold">ACTIVITY LOG</p>

                    </div>
                    <table class="table table-borderless">
                      <thead>
                        <tr class="text-light" style="background: #2D6DB2;">
                          <th scope="col">Date</th>
                          <th scope="col">Time In</th>
                          <th scope="col">Time Out</th>

                        </tr>
                      </thead>
                      <tbody class="table-group-divider text-center">
                          <tr class="border-bottom">
                          <td>March 3, 2023</td>
                          <td class="text-success">6:49</td>
                          <td class="text-danger">4:51</td>
                          </tr>
                          <tr class="border-bottom">
                          <td>March 3, 2023</td>
                          <td class="text-success">6:49</td>
                          <td class="text-danger">4:51</td>
                          </tr>
                          <tr class="border-bottom">
                          <td>March 3, 2023</td>
                          <td class="text-success">6:49</td>
                          <td class="text-danger">4:51</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
    </div>
</body>
</html>
<?php 
}
?>