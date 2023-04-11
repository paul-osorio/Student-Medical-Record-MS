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
    <title>SMRMS | ADMIN | Appointments</title>

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
    <link rel="stylesheet" href="./css/AppointmentsTab.css"/>
    <link rel="stylesheet" href="./css/toggle-switchy.css"/>

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

    <!-- for date picker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
                  <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
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



<!--#################################################################################################################################################################################################################################-->

          <!-- APPOINTMENTS PAGE -->
          <section id="appointments" class="appointments so_content so_active" data-tab-content>

          <div class="appointments_header d-flex justify-content-between">
            <select id="appointment_filter">
              <option id="appointment_select">APPOINTMENTS</option>
              <option id="holiday_select">HOLIDAY/SUSPENSION</option>
            </select>
            <div class="header-btns">
              <button class="custom_btn">
                <a href="#addHolidayModal" class="custom_btn" data-toggle="modal"><i class="fa fa-calendar"></i>Add Holiday/Suspension</a>
              </button>
              <button class="custom_btn">
                <a href="#addAppointmentsModal" class="custom_btn" data-toggle="modal"><i class="fa fa-calendar"></i>Add Appointment</a>
              </button>
            </div>
          </div>

          <div class="appointments_table_details table-dark table-responsive" id="appointmentDiv">
            <table>
              
              <tr id="table_header">
                  <th> ID No. </th>
                  <th> Type of Appointment</th>
                  <th> Status</th>
                  <th> Date Created</th>
                  <th><span>Action</span></th>
              </tr>
              

                  <?php //if(mysqli_num_rows($fetchAddAdmins) > 0) { 
                  //while ($addAdmins = mysqli_fetch_assoc($fetchAddAdmins)) {  ?>


              <tr class="container">
                  <td> A-00001 </td>
                  <td><span class="medServices">Medical Services</span></td>
                  <td style="color:green;"><span class="status">On</span></td>
                  <td><span class="dateCreated">March 04, 2023</span></td>
                  <td>
                      <!-- <a href="#viewAdminInfo" class="custom_btn" data-toggle="modal"><i class="fa fa-info-circle" aria-hidden="true" style="color: #5D8FD9;"></i></a> -->

                      <a href="#viewAppointmentsInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: green;"></i></a>

                      <a href="#delAppointments" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                  </td>
              </tr>
              <tr class="spacing"></tr>
              <tr class="container">
                  <td> A-00001 </td>
                  <td><span class="medServices">Medical Services</span></td>
                  <td style="color:gray;"><span class="status">Disabled</span></td>
                  <td><span class="dateCreated">March 04, 2023</span></td>
                  <td>
                      <!-- <a href="#viewAdminInfo" class="custom_btn" data-toggle="modal"><i class="fa fa-info-circle" aria-hidden="true" style="color: #5D8FD9;"></i></a> -->

                      <a href="#viewAppointmentsInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: green;"></i></a>

                      <a href="#delAppointments" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                  </td>
              </tr>
              
                  <?php //} } ?>

              
            </table>
          </div>

          <div class="appointments_table_details table-dark table-responsive" style="display:none;" id="holidayDiv">
            <table>
              
              <tr id="table_header">
                  <th> ID No. </th>
                  <th> Name</th>
                  <th> Date</th>
                  <th> Day</th>
                  <th> Type</th>
                  <th> Time</th>
                  <th><span>Action</span></th>
              </tr>
              

                  <?php //if(mysqli_num_rows($fetchAddAdmins) > 0) { 
                  //while ($addAdmins = mysqli_fetch_assoc($fetchAddAdmins)) {  ?>


              <tr class="container">
                  <td> A-00001 </td>
                  <td><span class="holidayname">Christmas Day</span></td>
                  <td><span class="date">March 04, 2023</span></td>
                  <td><span class="day">Sunday</span></td>
                  <td><span class="type">Holiday</span></td>
                  <td><span class="time">-</span></td>
                  <td>
                      <!-- <a href="#viewAdminInfo" class="custom_btn" data-toggle="modal"><i class="fa fa-info-circle" aria-hidden="true" style="color: #5D8FD9;"></i></a> -->

                      <a href="#viewHolidayInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: green;"></i></a>

                      <a href="#delHoliday" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                  </td>
              </tr>
              <tr class="spacing"></tr>
              <tr class="container">
                  <td> A-00001 </td>
                  <td><span class="holidayname">Special Non-Working Day</span></td>
                  <td><span class="date">March 04, 2023</span></td>
                  <td><span class="day">Wednesday</span></td>
                  <td><span class="type">Suspension</span></td>
                  <td><span class="time">3:00 PM</span></td>
                  <td>
                      <!-- <a href="#viewAdminInfo" class="custom_btn" data-toggle="modal"><i class="fa fa-info-circle" aria-hidden="true" style="color: #5D8FD9;"></i></a> -->

                      <a href="#viewHolidayInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: green;"></i></a>

                      <a href="#delHoliday" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                  </td>
              </tr>
              
                  <?php //} } ?>

              
            </table>
          </div>
          <div>

          </div>

<!--########################################################################################################################################################################-->

          <!-- ADD NEW APPOINTMENT MODAL AT APPOINTMENT PAGE-->

          <div id="addAppointmentsModal" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">NEW APPOINTMENT</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group textfield">
                        <label>APPOINTMENT TYPE: </label>
                        <input type="text" class="form-control" name="appointment_type" required>
                      </div><br>

                      <div class="form-group">
                        <label>PICK AVAILABLE DATES </label>
                          <input type="text" class="form-control" id="date-picker" hidden>
                      </div>
                    
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-success" data-dismiss="modal" id="addsuccess_btn" name="addAppointment" value="Save">
                  </div>

                </form>
              </div>

            </div>
          </div>

<!--########################################################################################################################################################################-->

          <!-- VIEW APPOINTMENT MODAL AT APPOINTMENTS PAGE-->

          <div id="viewAppointmentsInfo" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">APPOINTMENT DETAILS</h4>
                  </div>

                  <div class="modal-body">	
                      <div class="form-group switch">
                        <span>ID No.: A-00001</span>
                        <label class="toggle-switchy" data-size="sm" data-style="rounded">
                          <input checked type="checkbox" disabled>
                          <span class="toggle">
                            <span class="switch"></span>
                          </span>
                        </label>
                      </div>


                      <div class="form-group textfield">
                        <label>APPOINTMENT TYPE: </label>
                        <input type="text" class="form-control" name="appointment_type" disabled>
                      </div><br>

                      <div class="form-group">
                        <label>PICK AVAILABLE DATES </label>
                          <input type="text" class="form-control" id="date-picker_view" hidden disabled>
                      </div>
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-primary" data-dismiss="modal" id="edit_appointment_btn" name="editAppointment" value="Edit">
                  </div>

                </form>
              </div>

            </div>

          </div>          

<!--########################################################################################################################################################################-->

          <!-- EDIT APPOINTMENT MODAL AT APPOINTMENTS PAGE-->

          <div id="editAppointmentsModal" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">APPOINTMENT DETAILS</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group switch">
                        <span>ID No.: A-00001</span>
                        <label class="toggle-switchy" data-size="sm" data-style="rounded">
                          <input checked type="checkbox">
                          <span class="toggle">
                            <span class="switch"></span>
                          </span>
                        </label>
                      </div>

                      <div class="form-group textfield">
                        <label>APPOINTMENT TYPE: </label>
                        <input type="text" class="form-control" name="appointment_type" required>
                      </div><br>

                      <div class="form-group">
                        <label>PICK AVAILABLE DATES </label>
                          <input type="text" class="form-control" id="date-picker_edit" hidden>
                      </div>
                    
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-success" data-bs-dismiss="modal" id="addsuccess_btn" name="saveAppointment" value="Save">
                  </div>

                </form>
              </div>

            </div>
          </div>              

<!--########################################################################################################################################################################-->

          <!-- ADD NEW HOLIDAY MODAL AT APPOINTMENT PAGE-->

          <div id="addHolidayModal" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">ADD HOLIDAY/SUSPENSION</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group textfield">
                        <label>HOLIDAY NAME </label>
                        <input type="text" class="form-control" name="holiday_name" required>
                      </div><br>

                      <div class="form-group">
                        <label>DATE </label>
                          <input type="date" class="form-control" name="holday_date">
                      </div>

                      <div class="form-group">
                        <div class="toggle-outline">
                          <button type="button" id="holidaybtn">Holiday</button>
                          <button type="button" id="suspensionbtn">Suspension</button>
                        </div>
                      </div>
                    
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-success" data-dismiss="modal" id="addsuccess_btn2" name="addHoliday" value="Add">
                  </div>

                </form>
              </div>

            </div>
          </div>

<!--########################################################################################################################################################################-->

          <!-- VIEW HOLIDAY MODAL AT APPOINTMENT PAGE-->

          <div id="viewHolidayInfo" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">EDIT HOLIDAY/SUSPENSION</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group textfield">
                        <label>HOLIDAY NAME </label>
                        <input type="text" class="form-control" name="holiday_name" disabled>
                      </div><br>

                      <div class="form-group">
                        <label>DATE </label>
                          <input type="date" class="form-control" name="holday_date" disabled>
                      </div>

                      <div class="form-group">
                        <div class="toggle-outline">
                          <button type="button" style="background-color:#182039; color:white;" id="holidaybtn">Holiday</button>
                          <button type="button" id="suspensionbtn">Suspension</button>
                        </div>
                      </div>
                    
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-success" data-dismiss="modal" id="edit_holiday_btn" name="addAppointment" value="Edit">
                  </div>

                </form>
              </div>

            </div>
          </div>

<!--########################################################################################################################################################################-->

          <!-- EDIT HOLIDAY MODAL AT APPOINTMENT PAGE-->

          <div id="editHolidayModal" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">EDIT HOLIDAY/SUSPENSION</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group textfield">
                        <label>HOLIDAY NAME </label>
                        <input type="text" class="form-control" name="holiday_name" required>
                      </div><br>

                      <div class="form-group">
                        <label>DATE </label>
                          <input type="date" class="form-control" name="holday_date">
                      </div>

                      <div class="form-group">
                        <div class="toggle-outline">
                          <button type="button" style="background-color:#182039; color:white;" id="holidaybtn2">Holiday</button>
                          <button type="button" id="suspensionbtn2">Suspension</button>
                        </div>
                      </div>
                    
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-success" data-dismiss="modal" id="editsuccess_btn" name="editHoliday" value="Save">
                  </div>

                </form>
              </div>

            </div>
          </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!--HOLIDAY ADDED SUCCESSFULLY MODAL-->

      <div class="modal fade" id="addsuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body addsuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Holiday Added Successfully! </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:blue; font-weight:bold;">Redirecting...</p>

                      </div>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!--SUSPENSION ADDED SUCCESSFULLY MODAL-->

      <div class="modal fade" id="addsuccessModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body addsuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Suspension Added Successfully! </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:blue; font-weight:bold;">Redirecting...</p>

                      </div>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!--SAVED CHANGES SUCCESSFULLY MODAL-->

      <div class="modal fade" id="editsuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body addsuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Saved Changes Successfully! </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:blue; font-weight:bold;">Redirecting...</p>

                      </div>

              </div>
          </div>
      </div>

          </section>


<!--########################################################################################################################################################################-->





</div>
    </div>
    <!-- custom js -->
    <script src="./js/app.js"></script>
    <script src="./js/status_color.js"></script>
    <script src="./js/line_graph.js"></script>
    <script src="./js/circle_graph.js"></script>
    <script src="./js/bar_graph.js"></script>
    <script src="./js/date_picker.js"></script>

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

<!-- DELETE ADMIN RECORD JS -->
    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#delAdmin').modal('show');

                var tr = $(this).closest('tr');

                console.log(tr);

                var data = tr.children("td").map(function () {

                    return $(this).text();

                }).get();

                console.log(data);

                $('#delete_id').val(data[1]);

            });
        });
    </script>


<!--#################################################################################################################################################################################################################################-->

  <!-- EDIT ADMIN INFO JS -->
    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editAdminInfo').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);


                $('#update_id').val(data[0]);
                $('#unique_id').val(data[1]);
                $('#email').val(data[4]);
                $('#fname').val(data[2]);
                $('#lname').val(data[3]);
                $('#contact_num').val(data[5]);
                $('#img').val(data[6]);
            });
        });

    </script>

<!--#################################################################################################################################################################################################################################-->

<!-- ADD SUCCESS -->
<script>
        $(document).ready(function() {
  
            $("#addsuccess_btn2").on('click', function () {
              
                $("#addsuccessModal").modal("show");

            });
        });


</script>

<!--#################################################################################################################################################################################################################################-->

<!-- EDIT SUCCESS -->
<script>
        $(document).ready(function() {
  
            $("#editsuccess_btn").on('click', function () {
              
                $("#editsuccessModal").modal("show");
                $("#editHolidayModal").modal("hide");

            });
        });


</script>


<!--#################################################################################################################################################################################################################################-->

<!-- DELETE ADMIN -->
<script>
        $(document).ready(function() {
  
            $("#delAdmin_btn").on('click', function () {
              
                $("#removesuccessModal").modal("show");

            });
        });


</script>

<!--#################################################################################################################################################################################################################################-->

<!-- EDIT APPOINTMENT -->
<script>
        $(document).ready(function() {
  
            $("#edit_appointment_btn").on('click', function () {
              
                $("#viewAppointmentsInfo").modal("hide");
                $("#editAppointmentsModal").modal("show");


            });
        });


</script>

<!--#################################################################################################################################################################################################################################-->

<!-- APPOINTMENT FILTER -->
<script>
  $(document).ready(function(){
  $('#appointment_filter').trigger('change');

  $('#appointment_filter').on('change', function(){
    if($('#holiday_select').is(':selected')) {
      $('#appointmentDiv').hide();
      $('#holidayDiv').show();
    } else {
      $('#appointmentDiv').show();
      $('#holidayDiv').hide();
    }
  });
});
</script>

<!--#################################################################################################################################################################################################################################-->
      <!-- toggle switch -->

      <script>
        var toggleSwitch = document.getElementById("toggle-switch");
        var onText = document.querySelector(".on-text");
        var offText = document.querySelector(".off-text");

        toggleSwitch.addEventListener("change", function() {
          if (this.checked) {
            onText.style.display = "block";
            offText.style.display = "none";
          } else {
            onText.style.display = "none";
            offText.style.display = "block";
          }
        });
      </script>
 
<!--#################################################################################################################################################################################################################################-->
      <!-- add appointment toggle -->

      <script> 
          $(document).ready(function() {
            // Set initial styles
            $('#holidaybtn').css({
              'background-color': '#182039',
              'color': 'white'
            });
            $('#suspensionbtn').css({
              'background-color': 'white',
              'color': 'black'
            });
            
            // Add click event listeners
            $('#holidaybtn').click(function() {
              $(this).css({
                'background-color': '#182039',
                'color': 'white'
              });
              $('#suspensionbtn').css({
                'background-color': 'white',
                'color': 'black'
              });
            });
            
            $('#suspensionbtn').click(function() {
              $(this).css({
                'background-color': '#182039',
                'color': 'white'
              });
              $('#holidaybtn').css({
                'background-color': 'white',
                'color': 'black'
              });
            });
          });
      </script>

<!--#################################################################################################################################################################################################################################-->
      <!-- add appointment toggle -->

      <script> 
          $(document).ready(function() {
            // Set initial styles
            $('#holidaybtn2').css({
              'background-color': '#182039',
              'color': 'white'
            });
            $('#suspensionbtn2').css({
              'background-color': 'white',
              'color': 'black'
            });
            
            // Add click event listeners
            $('#holidaybtn2').click(function() {
              $(this).css({
                'background-color': '#182039',
                'color': 'white'
              });
              $('#suspensionbtn2').css({
                'background-color': 'white',
                'color': 'black'
              });
            });
            
            $('#suspensionbtn2').click(function() {
              $(this).css({
                'background-color': '#182039',
                'color': 'white'
              });
              $('#holidaybtn2').css({
                'background-color': 'white',
                'color': 'black'
              });
            });
          });
      </script>

<!--#################################################################################################################################################################################################################################-->

<!-- EDIT HOLIDAY -->
<script>
        $(document).ready(function() {
  
            $("#edit_holiday_btn").on('click', function () {
              
                $("#viewHolidayInfo").modal("hide");
                $("#editHolidayModal").modal("show");


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