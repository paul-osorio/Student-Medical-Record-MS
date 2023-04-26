<?php 
session_start();


$id = $_SESSION['user_id'];

if(empty($id)) {
  header("location: ./index.php");
}

if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {

?>


<?php
    include_once './crud/insert_new_nurse.php';
    include_once './crud/insert_admin.php';
    include('db_conn.php');

    include_once './crud/edit_admin.php';
    include_once './crud/edit_hospital.php';
    include_once './crud/delete_admin.php';
    include_once './crud/delete_hospital.php';
    include_once './crud/delete_department.php';
?>


<?php
     include_once './crud/insert_data.php';
     include('db_conn.php');
     $email = $_SESSION['email'];

     // SELECT ALL ADMINS
     $fetchAllAdmins = mysqli_query($conn, "SELECT * FROM `admins` WHERE email = '$email'");
     $admins = mysqli_fetch_assoc($fetchAllAdmins);


     // SELECT ADD ADMINS
     $fetchAddAdmins = mysqli_query($conn, "SELECT * FROM `admins`");
     

     // SELECT ALL STUDENTS 
     $fetchAllStudents = mysqli_query($conn, "SELECT * FROM `students`");
     
     // SELECT ALL REPORTS 
     $fetchAllReports = mysqli_query($conn, "SELECT * FROM `reports`");

     // SELECT ALL DEPARTMENTS
     $fetchAllDepartments = mysqli_query($conn, "SELECT * FROM `departments`");

     // SELECT ALL NURSES 
     $fetchAllNurses = mysqli_query($conn, "SELECT * FROM `nurses`");

     // SELECT ALL NURSES TODAY
     $fetchAllNursesToday = mysqli_query($conn, "SELECT * FROM `nurses`");

     // SELECT ALL MEDICINES 
     $fetchAllMedicine = mysqli_query($conn, "SELECT * FROM `medicine`");

     // SELECT ALL HOSPITALS 
     $fetchAllHospitals = mysqli_query($conn, "SELECT * FROM `hospitals`");


     // COUNT ALL ADMINS
     $fetchAdmins = mysqli_query($conn, "SELECT COUNT(*) as totalAd FROM `admins`");
     $countAdmins = mysqli_fetch_assoc($fetchAdmins);

     // COUNT ALL DEPARTMENTS
     $fetchDepartments = mysqli_query($conn, "SELECT COUNT(*) as totalNur FROM `nurses`");
     $countDepartments = mysqli_fetch_assoc($fetchDepartments);

     // COUNT ALL NURSES
     $fetchNurses = mysqli_query($conn, "SELECT COUNT(*) as totalNur FROM `nurses`");
     $countNurses = mysqli_fetch_assoc($fetchNurses);

     // COUNT ALL STUDENTS
     $fetchStudents = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `students`");
     $countStudents = mysqli_fetch_assoc($fetchStudents);
     
     // COUNT ALL DEPARTMENTS
     $fetchDepartments = mysqli_query($conn, "SELECT COUNT(*) as totalDepts FROM `departments`");
     $countDepartments = mysqli_fetch_assoc($fetchDepartments);

     // COUNT ALL ENTRANCE LOGS
     $fetchEntrance = mysqli_query($conn, "SELECT COUNT(*) as totalEnt FROM `entrance_log`");
     $countEntrance = mysqli_fetch_assoc($fetchEntrance);

?>

<!--########################################################################################################################################################################-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./assets/favcon.png"/>
    <title>SMRMS | ADMIN | Dashboard</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>"/>
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <link rel="stylesheet" href="./css/addAdmin.css"/>
    <link rel="stylesheet" href="./css/DepartmentTab.css" />
    <link rel="stylesheet" href="./css/HospitalTab.css"/> 
    <link rel="stylesheet" href="./css/NurseTab.css" />
    <!-- <link rel="stylesheet" href="./css/DashboardTab.css"/> -->
    <link rel="stylesheet" href="./css/DashboardTab.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="./css/medicine.css"/>
    <link rel="stylesheet" href="./css/messagetab.css"/>
    <link rel="stylesheet" href="./css/reportchart.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="./css/archivesTab.css"/>
    <link rel="stylesheet" href="./css/entrancelog.css"/>

    <link rel="stylesheet" href="./css/Main.css" />
    <link rel="stylesheet" href="./css/adminPage.css" />

    

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  </head>

  <body>

    <div class="main">
      <nav
        id="sidebar"
        class="sidebar navbar-dark active"
        style="width: 225px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">

        <div class="logo navbar-brand px-3 m-0" href="#">
          <img src="./assets/QCUClinicLogo.png" alt="" />
          <center><p>Student Medical <br> Record</p></center>
        </div>
        

        <!-- <ul class="list-unstyled navbar-nav ps-0"> -->
          <ul class="mt-4 list-unstyled navbar-nav ps-0 ">

            <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
              <a href="adminDashboard.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-area-chart mx-2"></i><span>Dashboard</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="admins.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-users mx-2"></i><span>Admins</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="departments.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-building-o mx-2"></i><span>Departments</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="nurses.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-user-md mx-2"></i><span>Nurses</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="hospitals.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-hospital-o mx-2" aria-hidden="true"></i><span>Hospitals</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="medicines.php" class="nav-link"><span class="fx-5 fw-800 text-light"> <i class="fa fa-medkit mx-2" aria-hidden="true"></i><span>Medicines</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="appointment.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-calendar mx-2" aria-hidden="true"></i><span>Appointments</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
              <a href="report.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-book mx-2"></i><span>Reports</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="archive.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-folder-open-o mx-2" aria-hidden="true"></i><span>Archive</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
            <a href="entranceLog.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-address-book mx-2" aria-hidden="true"></i><span>Entrance Log</span></span></a>
            </li>

          <div class="web_info">

          <!-- <div class="admin_info"><br>
            <img src="./assets/<?=$admins['img']?>" alt=""/>
            <span><?=$admins['email']?></span>
            <span><?=$admins['fname']?>&nbsp<?=$admins['lname']?></span>
          </div> -->

          <!-- <div class="web_copyright">
            <span>Quezon City University Clinic 2022</span>
          </div> -->

          </div>

        </ul>
      </nav>

      <nav
        id="navigation"
        class="mynav px-3 navbar navbar-expand navbar-dark"
        style="z-index: 1">

        <div class="container-fluid d-flex justify-content-start">
          <button
            id="sidebarCollapse"
            class="navbar-toggle border-0 bg-dark ms-0 ms-md-2 ms-lg-0 order-1 order-md-1">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="ms-auto order-sm-0" id="navbarNav">
            <ul
              class="navbar-nav ms-auto text-white d-flex align-items-left align-items-lg-center">
              <span></span>

              <li class="nav-item px-0 d-flex align-items-center">
                <a
                  class="nav-link modal-trigger text-dark"
                  data-toggle="modal"
                  data-target="#loginmodal"
                  href="#"></a>
              </li>

              <div class="dropdown nav-item">
                <div
                  class="account background-none nav-link dropdown-toggle dropdown-toggle d-flex justify-content-center align-items-center"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  style="background: none">
                  <h5 style="margin-right: 30px; margin-top: 10px; color: white;">Hey, <?=$admins['fname']?>&nbsp<?=$admins['lname']?>!</h5> <img src="./assets/<?=$admins['img']?>" alt=""/>
                </div>

                <ul
                  class="dropdown-menu dropdown-menu-end dropdown-menu-dark"
                  aria-labelledby="dropdownMenuButton1">

                  
                  <li><a class="dropdown-item" href="account.php">Manage Account</a></li>

                  <li>
                    <a class="dropdown-item" href="activityLog.php">Activity Log<span id="email_span"></span></a>
                  </li>

                  <li id="logout">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                  </li>

                </ul>
              </div>
            </ul>
          </div>
        </div>
      </nav>
      

      <div class="content_wrapper">




<!--########################################################################################################################################################################-->


      <!-- DASHBOARD PAGE -->
        <section id="dashboard" class="dashboard so_content so_active" data-tab-content>
          <div class="dashboard_header d-flex justify-content-between">
            <h3 class="m-0">ANALYTICS</h3>
          </div>
          <div class="dashboard_container">
            <div class="card_container">

              <div class="card" style="background-color:#E74C3C;">

                <div class="card_content">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <span class="name">ADMINS</span>
                </div>

                <div class="count">
                  <span class="number"> <?=$countAdmins['totalAd']?> </span>
                </div>

              </div>

              <div class="card" style="background-color:#F3AF43;">

                <div class="card_content">
                  <i class="fa fa-user-md" aria-hidden="true"></i>
                  <span class="name">NURSES</span>
                </div>

                <div class="count">
                  <span class="number"> <?=$countNurses['totalNur']?> </span>
                </div>

              </div>

              <div class="card" style="background-color:#84BF46;">

                  <div class="card_content">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="name">STUDENTS</span>
                  </div>

                  <div class="count">
                    <span class="number"> <?=$countStudents['totalStud']?> </span>
                  </div>

              </div>
                
              <div class="card" style="background-color:#2C6AC8;">

                <div class="card_content">
                  <i class="fa fa-hospital-o" aria-hidden="true"></i>
                  <span class="name">DEPARTMENTS</span>
                </div>

                <div class="count">
                  <span class="number"> <?=$countDepartments['totalDepts']?> </span>
                </div>

                </div>

                <div class="card" style="background-color:#999999;">

                  <div class="card_content">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <span class="name">ENTRANCE LOG</span>
                  </div>

                  <div class="count">
                    <span class="number"> <?=$countEntrance['totalEnt']?> </span>
                  </div>

                </div>
             

            </div>


<!--########################################################################################################################################################################-->

       
          <!-- SUMMARY REPORT AT DASHBOARD PAGE -->

          <div class="chart_container">

              <div class="card_content">
              <div class="chart_header">
                  <span>STUDENT COVID-19 CASES</span>
                  <div class="chart_filter">
                    <select name="filter" id="filter">
                      <option value="Campus">Campus</option>
                    </select>
                    <select name="filter" id="filter">
                      <option value="Monthly">Monthly</option>
                      <option value="Yearly">Yearly</option>
                    </select>
                  </div>
                </div>
                <div class="chart1">
                  <canvas id="myChart" class="chart"></canvas>
                </div>
              </div>
            
              <div class="card_content">
              <div class="chart_header">
                  <span>ENTRANCE LOG</span>
                </div><br>
                <div class="chart1" style="display:flex; justify-content:center; align-items:center;">
                  <canvas id="myChart2" class="circle_chart"></canvas>
                </div>
              </div>

              </div>

              <div class="chart_container">

              <div class="card_content">
              <div class="chart_header">
                  <span>APPOINTMENTS</span>
                  <div class="chart_filter">
                    <select name="filter" id="filter">
                      <option value="Medical">Medical</option>
                      <option value="Dental">Dental</option>
                    </select>
                    <select name="filter" id="filter">
                      <option value="Monthly">Monthly</option>
                      <option value="Yearly">Yearly</option>
                    </select>
                  </div>
                </div>
                <div class="chart1">
                  <canvas id="myChart3" class="chart"></canvas>
                </div>
              </div>

              <div class="card_content table_card">
                <div class="chart_header">
                  <span style="font-size: 17px;">ACTIVE NURSES TODAY</span>
                </div>
                <table>
                  <tr>
                    <!-- <th>Image</th> -->
                    <th>Emp ID</th>
                    <th>Fullname</th>
                    <th>Campus</th>
                  </tr>
                  <?php for($i=0; $i<10; $i++){ ?>
                  <tr>
                    <!-- <td><img src="./assets/nurse.jpg"></td> -->
                    <td>23-0003</td>
                    <td>Juan Two T. Dela Cruz</td>
                    <td>San Francisco</td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              </div>

              </div>
 
        </section>


      </div>
    </div>
    <!-- custom js -->
    <script src="./js/app.js"></script>
    <script src="./js/status_color.js"></script>
    <script src="./js/line_graph.js"></script>
    <script src="./js/circle_graph.js"></script>
    <script src="./js/bar_graph.js"></script>

    <!-- bootstrap js -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/reportchart.js"></script>
    <script src="./js/modalSample.js"></script>


<!--#################################################################################################################################################################################################################################-->

    <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>



    
  </body>


</html>


<?php 
// LOGOUT
}else{
     header("Location: index.php");
     exit();
}
 ?>