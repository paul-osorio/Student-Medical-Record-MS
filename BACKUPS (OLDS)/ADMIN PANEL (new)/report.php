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
    <title>SMRMS | ADMIN | Reports</title>

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
    <link rel="stylesheet" href="./css/ReportsTab.css"/>

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

            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
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
            <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
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


<!-- ############################################################################################################################################################################################################## -->

      
           <!-- REPORTS PAGE -->
           <section id="reports" class="reports so_content so_active" data-tab-content>

                <div class="reports_header d-flex justify-content-between">
                  <h3 class="m-0 text-white">REPORTS</h3>
                  <div class="filter">
                    <select id="report_filter">
                      <option id="student_filter">Students</option>
                      <option id="appointment_filter">Appointments</option>
                      <option id="medicine_filter">Medicine</option>
                    </select>
                    <select>
                      <option>Campus</option>
                    </select>
                    <select>
                      <option>Select a date</option>
                    </select>
                  </div>
                </div>


                <div class="reports_table_details table-dark table-responsive" id="student_report">
                  <h1 class="container-title">STUDENTS CONSULTATION REPORT</h1>
                  <div class="charts-row">
                    <div class="bar-col">
                      <p class="chart-title">TOTAL NUMBER OF CONSULTATIONS</p>
                      <canvas id="report_student_chart" class="chart"></canvas>
                    </div>
                    <div class="pie-col">
                      <p class="chart-title">5 MOST COMMON SYMPTOMS</p>
                      <canvas id="report_student_pie" class="circle_chart"></canvas>
                    </div>
                  </div>
                  <div class="table-container">
                  <table class="table table-striped">
                    <tr id="table_header">
                        <th> Student No. </th>
                        <th> Student Name </th>
                        <th> Section </th>
                        <th> Consultation Date </th>
                        <th> Temperature </th>
                        <th> Symptoms </th>
                        <th> Medicine Given </th>
                        <th> Duration </th>
                        <th> Nurse Assisted </th>
                        <th> Remarks </th>
                    </tr>
                    <tr class="container">
                        <td> 19-0249 </td>
                        <td> Dela Cruz, Juan </td>
                        <td> SBIT-3A </td>
                        <td> March 3, 2023 </td>
                        <td> 35 </td>
                        <td> Headache </td>
                        <td> Biogesic </td>
                        <td> 1 Hour </td>
                        <td> Nr. John Nicole Ablhay </td>
                        <td style="color:lightgreen"> Cleared </td>
                    </tr>

                    <tr class="container">
                        <td> 19-0249 </td>
                        <td> Dela Cruz, Juan </td>
                        <td> SBIT-3A </td>
                        <td> March 3, 2023 </td>
                        <td> 35 </td>
                        <td> Headache </td>
                        <td> Biogesic </td>
                        <td> 1 Hour </td>
                        <td> Nr. John Nicole Ablhay </td>
                        <td style="color:lightgreen"> Cleared </td>
                    </tr>

                    <tr class="container">
                        <td> 19-0249 </td>
                        <td> Dela Cruz, Juan </td>
                        <td> SBIT-3A </td>
                        <td> March 3, 2023 </td>
                        <td> 35 </td>
                        <td> Headache </td>
                        <td> Biogesic </td>
                        <td> 1 Hour </td>
                        <td> Nr. John Nicole Ablhay </td>
                        <td style="color:lightgreen"> Cleared </td>
                    </tr>

                    <tr class="container">
                        <td> 19-0249 </td>
                        <td> Dela Cruz, Juan </td>
                        <td> SBIT-3A </td>
                        <td> March 3, 2023 </td>
                        <td> 35 </td>
                        <td> Headache </td>
                        <td> Biogesic </td>
                        <td> 1 Hour </td>
                        <td> Nr. John Nicole Ablhay </td>
                        <td style="color:lightgreen"> Cleared </td>
                    </tr>

                    <tr class="container">
                        <td> 19-0249 </td>
                        <td> Dela Cruz, Juan </td>
                        <td> SBIT-3A </td>
                        <td> March 3, 2023 </td>
                        <td> 35 </td>
                        <td> Headache </td>
                        <td> Biogesic </td>
                        <td> 1 Hour </td>
                        <td> Nr. John Nicole Ablhay </td>
                        <td style="color:lightgreen"> Cleared </td>
                    </tr>

                    <tr class="container">
                        <td> 19-0249 </td>
                        <td> Dela Cruz, Juan </td>
                        <td> SBIT-3A </td>
                        <td> March 3, 2023 </td>
                        <td> 35 </td>
                        <td> Headache </td>
                        <td> Biogesic </td>
                        <td> 1 Hour </td>
                        <td> Nr. John Nicole Ablhay </td>
                        <td style="color:lightgreen"> Cleared </td>
                    </tr>
                    
                  </table>
                  </div>
                </div>
                <div>

                <div class="reports_table_details table-dark table-responsive" id="appointment_report">
                  <h1 class="container-title">APPOINTMENTS REPORT</h1>
                  <div class="charts-row">
                    <div class="bar-col">
                      <p class="chart-title">TOTAL NUMBER OF APPOINTMENTS</p>
                      <canvas id="report_appointment_chart" class="chart"></canvas>
                    </div>
                    <div class="pie-col">
                      <p class="chart-title">SERVICES</p>
                      <canvas id="report_appointment_pie" class="circle_chart"></canvas>
                    </div>
                  </div>
                  <div class="table-container">
                  <table class="table table-striped">
                  <tr id="table_header">
                        <th> Student No. </th>
                        <th> Student Name </th>
                        <th> Section </th>
                        <th> Appointment Type </th>
                        <th> Reason </th>
                        <th> Date </th>
                        <th> Time </th>
                        <th> Reference No. </th>
                        <th> Nurse Assisted </th>
                        <th> Remarks </th>
                    </tr>

                    <tr class="container">
                        <td> 19-0249 </td>
                        <td> Dela Cruz, Juan </td>
                        <td> SBIT-3A </td>
                        <td> Medical Services </td>
                        <td> Follow-up medical requirements </td>
                        <td> March 3, 2023 </td>
                        <td> 1:00 PM </td>
                        <td> asd3ja </td>
                        <td> Nr. John Nicole Ablhay </td>
                        <td style="color:lightgreen"> Completed </td>
                    </tr>

                  </table>
                  </div>
                </div>
                <div>

                <div class="reports_table_details table-dark table-responsive" id="medicine_report">
                  <h1 class="container-title">MEDICINE INVENTORY REPORT</h1>
                  <div class="charts-row">
                    <div class="bar-col">
                      <p class="chart-title">TOTAL NUMBER OF MEDICINES</p>
                      <canvas id="report_medicine_chart" class="chart"></canvas>
                    </div>
                    <div class="pie-col">
                      <p class="chart-title">MOSTLY USED MEDICINES</p>
                      <canvas id="report_medicine_pie" class="circle_chart"></canvas>
                    </div>
                  </div>
                  <div class="table-container">
                  <table class="table table-striped">
                  <tr id="table_header">
                        <th> Medicine Name </th>
                        <th> Stocks </th>
                        <th> Expiration Date </th>
                        <th> Description </th>
                    </tr>

                    <tr class="container">
                        <td> Biogesic </td>
                        <td> 1,000 </td>
                        <td> April 2025 </td>
                        <td> Lorem Ipsum Dolor Iset </td>
                    </tr>
                    
                  </table>
                  </div>
                </div>
                <div>

                <div class="nav-row">
                <div></div>
                <div class="pagination">
                  <div class="paginate-btn">
                    <i class="fa fa-backward"></i>
                  </div>
                  <div class="paginate-btn">
                    1
                  </div>
                  <div class="paginate-btn">
                    2
                  </div>
                  <div class="paginate-btn">
                    3
                  </div>
                  <div class="paginate-btn">
                    <i class="fa fa-forward"></i>
                  </div>
                </div>
                <span class="export"><p>Print or </p><a href="#"> Download</a></span>
                </div>

                </div>



<!--#################################################################################################################################################################################################################################-->

</div>
    </div>
    <!-- custom js -->
    <script src="./js/app.js"></script>
    <script src="./js/status_color.js"></script>
    <!-- <script src="./js/line_graph.js"></script>
    <script src="./js/circle_graph.js"></script>
    <script src="./js/bar_graph.js"></script> -->

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


<!--#################################################################################################################################################################################################################################-->
  
  <!-- REPORT'S GRAPHS JS -->

  <!-- bar graph js -->
  <script>
      var xValues = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
          var yValues = [200,100,170,270,250,290,240,210,280,320,450,200];

          new Chart("myChart3", {
              type: "bar",
              data: {
              labels: xValues,
              datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(0,0,255,1.0)",
              borderColor: "#7B89AD",
              data: yValues
              }]
          },
              options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  aspectRatio: 5,
                  legend: {display: false},
                  scales: {
                  yAxes: [{ticks: {min: 0, max:700}}],
              }
          }
      });

      var xValues = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
          var yValues = [200,100,170,270,250,290,240,210,280,320,450,200];

          new Chart("report_student_chart", {
              type: "bar",
              data: {
              labels: xValues,
              datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(0,0,255,1.0)",
              borderColor: "#7B89AD",
              data: yValues
              }]
          },
              options: {
                  responsive: true,
                  maintainAspectRatio: true,
                  aspectRatio: 3,
                  legend: {display: false},
                  scales: {
                  yAxes: [{ticks: {min: 0, max:700}}],
              }
          }
      });

        var xValues = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
          var yValues = [200,100,170,270,250,290,240,210,280,320,450,200];

          new Chart("report_appointment_chart", {
              type: "bar",
              data: {
              labels: xValues,
              datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(0,0,255,1.0)",
              borderColor: "#7B89AD",
              data: yValues
              }]
          },
              options: {
                  responsive: true,
                  maintainAspectRatio: true,
                  aspectRatio: 3,
                  legend: {display: false},
                  scales: {
                  yAxes: [{ticks: {min: 0, max:700}}],
              }
          }
      });

      var xValues = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
          var yValues = [200,100,170,270,250,290,240,210,280,320,450,200];

          new Chart("report_medicine_chart", {
              type: "bar",
              data: {
              labels: xValues,
              datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(0,0,255,1.0)",
              borderColor: "#7B89AD",
              data: yValues
              }]
          },
              options: {
                  responsive: true,
                  maintainAspectRatio: true,
                  aspectRatio: 3,
                  legend: {display: false},
                  scales: {
                  yAxes: [{ticks: {min: 0, max:700}}],
              }
          }
      });
  </script>


  <!-- circle graph js -->

  <script>
    var xValues = ["Verified", "Unverified", "Visitor", "Invalid"];
var yValues = [55, 49, 44, 24];
var barColors = [
  "#2D7538",
  "#f5c71a",
  "#5180C7",
  "#FF4646",
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: false,
      aspectRatio: 2,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});

var xValues = ["Difficulty Breathing", "Fever or Chills", "Headache", "Diarrhea", "Dizziness"];
var yValues = [55, 49, 44, 24, 35];
var barColors = [
  "#255B98",
  "#5CE1E6",
  "#2BB4D4",
  "#255B98",
  "2D306D",
];

new Chart("report_student_pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 0,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});

var xValues = ["Medical", "Dental",];
var yValues = [55, 49,];
var barColors = [
  "#5CE1E6",
  "#2BB4D4",
];

new Chart("report_appointment_pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 0,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});

var xValues = ["Difficulty Breathing", "Fever or Chills", "Headache", "Diarrhea", "Dizziness"];
var yValues = [55, 49, 44, 24, 35];
var barColors = [
  "#255B98",
  "#5CE1E6",
  "#2BB4D4",
  "#255B98",
  "2D306D",
];

new Chart("report_medicine_pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
   options: {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 0,
      legend: {
        display: true,
        position: 'left',
        maxWidth: 60,
      }
   }
});
  </script>


  <!-- line graph js -->

  <script>
    var xValues = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov"];
    var yValues = [0,100,170,270,250,290,240,210,280,320,450];

    new Chart("myChart", {
        type: "line",
        data: {
        labels: xValues,
        datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "#7B89AD",
        data: yValues
        }]
    },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                aspectRatio: 5,
                legend: {display: false},
                scales: {
                yAxes: [{ticks: {min: 0, max:700}}],
            }
        }
    });
  </script>



<!--#################################################################################################################################################################################################################################-->

<!-- REPORT FILTER JS -->
<script>
      $(document).ready(function() {
        // Show the student report div by default
        $('#student_report').show();
        $('#appointment_report').hide();
        $('#medicine_report').hide();

        // Trigger the change event for the select element
        $('#report_filter').trigger('change');

        // Call the function when the select element changes
        $('#report_filter').on('change', function() {
          if ($('#student_filter').is(':selected')) {
            $('#student_report').show();
            $('#appointment_report').hide();
            $('#medicine_report').hide();
          } else if ($('#appointment_filter').is(':selected')) {
            $('#student_report').hide();
            $('#appointment_report').show();
            $('#medicine_report').hide();
          } else if ($('#medicine_filter').is(':selected')) {
            $('#student_report').hide();
            $('#appointment_report').hide();
            $('#medicine_report').show();
          }
        });
      });

    </script>


    
  </body>

<!-- CUSTOM AJAX FILE -->
<script src="./ajax/search_admin.js"> </script>
<script src="./ajax/search_nurse.js"> </script>
<script src="./ajax/search_hospital.js"> </script>
<script src="./ajax/search_medicine.js"> </script>

</html>


<?php 
// LOGOUT
}else{
     header("Location: index.php");
     exit();
}
 ?>