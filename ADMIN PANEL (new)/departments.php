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
    <title>SMRMS | ADMIN | Departments List</title>

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
        
        <div class="w-100">
              <!-- <ul class="list-unstyled navbar-nav ps-0"> -->
              <ul class="mt-4 list-unstyled navbar-nav ps-0 ">

                  <li  class="px-4 w-100 mb-1 nav-item tab py-1">
                    <a href="adminDashboard.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-area-chart mx-2"></i><span>Dashboard</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-1">
                  <a href="admins.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-users mx-2"></i><span>Admins</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
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
                </ul>
             </div>
             <div class="web_info">

                <!-- <div class="admin_info"><br>
                <img src="./assets/<?=$admins['img']?>" alt=""/>
                <span><?=$admins['email']?></span>
                <span><?=$admins['fname']?>&nbsp<?=$admins['lname']?></span>
                </div>
 -->


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

                        <li>
                        <a class="dropdown-item" href="#">Login As:<span id="email_span"></span></a>
                        </li>

                        <li><a class="dropdown-item" href="account.php">Manage Account</a></li>

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

      <!-- DEPARTMENTS PAGE -->
      <section id="departments" class="departments so_content so_active" data-tab-content>
          <div class="nurse_header d-flex justify-content-between">
            <h3 class="m-0 text-white">DEPARTMENTS LIST</h3>
            <button class="custom_btn">
              <a href="#addDepartmentModal" class="custom_btn" data-toggle="modal"><i class="fa fa-user-md"></i>Add Department</a>
            </button>
          </div>


          <div class="card_container">

                <?php if(mysqli_num_rows($fetchAllDepartments) > 0) { 
                while ($departments = mysqli_fetch_assoc($fetchAllDepartments)) {  ?>

            <div class="card">
              <div class="card_header">
                <span class="department_name"><?=$departments['dept_name']?></span>
                <div class="actions">
                    <a href="#editDepartmentInfo" class="custom_btn editbtndepts" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: #3e64ff; font-size: 25px"></i></a>
                    <!-- style="color: #37954B;" -->
                    <a href="#delDepartment" class="custom_btn deletebtndepts" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24; font-size: 25px"></i></a>
                </div>
              </div>
              <div class="room_info">
                <div>
                  <span style="font-weight: bold;">Building Name: </span>
                  <span><?=$departments['building_name']?></span>
                </div>
                <div>
                  <span style="font-weight: bold;">Room No.: </span>
                  <span><?=$departments['room_num']?></span>
                </div>
              </div>
              <div class="profile_img">
              <img src="./assets/<?=$departments['image']?>" alt="" />
              </div>
              <div class="card_content">
                <div>
                <span class="name" style="font-weight: bold;"><?=$departments['firstname']?> <?=$departments['lastname']?></span>
                <spa class="nurse" n><?=$departments['emp_id']?></span>
                </div>
                <span class="nurse"><?=$departments['email']?></span>
                <span class="nurse"><?=$departments['contact_num']?></span>
                <div class="position">
                <span style="font-weight: bold;">Position: </span>
                <span class="nurse"><?=$departments['position']?></span>
                </div>
              </div>
            </div>

                <?php } } ?>

          </div>


<!--#################################################################################################################################################################################################################################-->

        <!-- ADD NEW DEPARTMENT MODAL AT DEPARTMENT PAGE-->
            <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    

                    <form action="./crud/insert_department.php" method="POST">

                    <div class="modal-header">
                        <div class="imgupload">
                            <input type="file" class="form-control" name="image" id="selectedFile" style="display: none;" />
                            <input type="button" name="image" id="imgbox" value="Upload Image" onclick="document.getElementById('selectedFile').click();" />
                        </div>

                        <label> Employe ID </label>
                                <input type="text" name="emp_id" id="emp_id" class="form-control" placeholder="Employe ID">
                        <label> Position </label>
                                <input type="text" name="position" id="position" class="form-control" placeholder="Position">
                        
                                <!-- <h5 class="modal-title" id="exampleModalLabel"> 23-0001</h5>
                        <h5 class="modal-title" id="exampleModalLabel"> Department Head</h5> -->

                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>

                        <div class="modal-body">
                            
                            <input type="hidden" name="update_id" id="update_id">
                            
                            <div class="dropdown_list">
                            <div name="dept_name">
                                <label>Department</label>
                                <select name="dept_name" id="dept_name" class="form-control">
                                    <option value="">Select Department</option>
                                    <option value="BSIT Department">BSIT Department</option>
                                    <option value="BSIE Department">BSIE Department</option>
                                    <option value="BSENT Department">BSENT Department</option>
                                    <option value="BSA Department">BSA Department</option>
                                    <option value="BSECE Department">BSECE Department</option>
                                </select>
                            </div>
                            <div name="building_name">
                            <label>Building Name</label>
                                <select name="building_name" id="building_name" class="form-control">
                                    <option value="">Select Building Name</option>
                                    <option value="bautista">Bautista Building</option>
                                    <option name="techvoc">TechVoc Building</option>
                                    <option name="belmonte">Belmonte Building</option>
                                </select>
                            </div>
                            <div name="room_num">
                            <label>Room No.</label>
                                <select name="room_num" id="room_num" class="form-control">
                                    <option value="">Select Room No.</option>
                                    <option name="room1">IC301a</option>
                                    <option name="room2">IC302a</option>
                                    <option name="room3">IC304a</option>
                                    <option name="room4">IC304a</option>
                                    <option name="room5">IC305a</option>
                                    <option name="room6">IC306a</option>
                                </select>
                            </div>
                            </div>

                            <!-- <div class="form-group">
                                <label> Department Name </label>
                                <input type="text" name="dept_name" id="dept_name" class="form-control" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <label> Building Name </label>
                                <input type="text" name="building_name" id="building_name" class="form-control" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <label> Room No. </label>
                                <input type="text" name="room_num" id="room_num" class="form-control" placeholder="First Name">
                            </div>
                            -->
                            <div class="form-group">
                                <label> First Name </label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <label> Last Name </label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <label> Email Address </label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                            </div>

                            <!-- <div class="form-group">
                                <label> Upload Image </label>
                                <input type="file" name="img" id="img" class="form-control" placeholder="Enter Course">
                            </div> -->

                            <div class="form-group">
                                <label> Contact Number </label>
                                <input type="text" name="contact_num" id="contact_num" class="form-control" placeholder="Contact Number">
                            </div>

                        </div>

                        <div class="modal-footer">

                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button> -->
                            
                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">

                            <input type="submit" class="btn btn-success" name="addDept" value="Add">
                        
                        </div>
                    </form>

                </div>
                </div>
            </div>


<!--#################################################################################################################################################################################################################################-->

      <!-- EDIT DATA DEPARTMENT MODAL AT DEPARTMENT PAGE-->
      <div class="modal fade" id="editDepartmentInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">

                  <form action="./crud/edit_depts.php" method="POST">

                      <input type="hidden" name="update_id" id="update_id">

                      <div class="modal-header">
                          <center><label>Upload Image</label>
                            <input type="file" class="form-control" name="image" id="image" required></center>
                            <input type="text" name="emp_id" id="emp_id" class="form-control" placeholder="Employee ID" readonly>
                            <input type="text" name="position" id="position" class="form-control" placeholder="Position" readonly>
                      </div>

                  
                      <div class="modal-body">
                        
                        <div class="dropdown_list">
                          <div name="dept_name">
                            <label>Department</label>
                            <select name="dept_name" id="dept_name" class="form-control">
                                <option value="">Select Department</option>
                                <option name="dept_name" value="BSIT Department">BSIT Department</option>
                                <option name="dept_name" value="BSIE Department">BSIE Department</option>
                                <option name="dept_name" value="BSENT Department">BSENT Department</option>
                                <option name="dept_name" value="BSA Department">BSA Department</option>
                                <option name="dept_name" value="BSECE Department">BSECE Department</option>
                            </select>
                          </div>
                          <div name="building_name">
                          <label>Building Name</label>
                            <select name="building_name" id="building_name" class="form-control">
                                <option value="">Select Building Name</option>
                                <option name="building_name" value="Bautista Building">Bautista Building</option>
                                <option name="building_name" value="TechVoc Building">TechVoc Building</option>
                                <option name="building_name" value="Belmonte Building">Belmonte Building</option>
                            </select>
                          </div>
                          <div name="room_num">
                          <label>Room No.</label>
                            <select name="room_num" id="room_num" class="form-control">
                                <option value="">Select Room No.</option>
                                <option name="room_num" value="IC301a">IC301a</option>
                                <option name="room_num" value="IC302a">IC302a</option>
                                <option name="room_num" value="IC304a">IC304a</option>
                                <option name="room_num" value="IC304a">IC304a</option>
                                <option name="room_num" value="IC305a">IC305a</option>
                                <option name="room_num" value="IC306a">IC306a</option>
                            </select>
                          </div>
                        </div>

                        
                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <label> Email Address </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>

                        <!-- <div class="form-group">
                            <label> Upload Image </label>
                            <input type="file" name="img" id="img" class="form-control" placeholder="Enter Course">
                        </div> -->

                        <div class="form-group">
                            <label> Contact Number </label>
                            <input type="text" name="contact_num" id="contact_num" class="form-control" placeholder="Contact Number">
                        </div>

                      </div>

                      <div class="modal-footer">

                          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button> -->
                          
                          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">

                          <input type="submit" class="btn btn-success" name="updateDepts" value="Save">
                      
                      </div>
                  </form>

              </div>
            </div>
        </div>


<!--#################################################################################################################################################################################################################################-->
        

      <!-- DELETE DATA DEPARTMENT MODAL AT DEPARTMENT PAGE-->

        <div class="modal fade" id="delDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  

                  <form action="./crud/delete_department.php" method="POST">

                      <div class="modal-body delmodal">

                          <div class="del_icon"><i class="fa fa-trash"></i></div>

                          <input type="hidden" name="delete_id" id="delete_id">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Are you sure you want to remove this department? </h4>
                          <h4 style="color:blue; font-weight:bold; font-size:20px;">Name of Department</h4>
                          <div class="modal_btn">
                            <input type="button" class="btn" style="background-color:lightgrey; color:black; font-weight:700;" id="cancel-admin-modal" data-dismiss="modal" value="No">
                            <input type="submit" class="btn btn-danger" style="font-weight:700;" name="delDept" value="Yes">
                          </div>

                      </div>
                  </form>

              </div>
          </div>
      </div>

      </section>




      <!--#################################################################################################################################################################################################################################-->

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

  <!-- EDIT HOSPITAL INFO JS -->
  <script>
        $(document).ready(function () {

            $('.edithosbtn').on('click', function () {

                $('#editHospitalInfo').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);


                $('#update_id').val(data[1]);
                $('#hospi_id').val(data[0]);
                $('#hospital').val(data[3]);
                $('#hospital_add').val(data[2]);
                $('#email').val(data[5]);
                $('#contact_num').val(data[4]);
                
            });
        });

    </script>

<!--#################################################################################################################################################################################################################################-->

<!-- VIEW NURSE JS -->
<script>
        $(document).ready(function () {

            $('.nurseinfobtn').on('click', function () {

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#nurse_list').hide();
                $('#viewNurseInfo').show();
                $('#update_id').val(data[0]);
                $('#unique_id').val(data[1]);
                $('#email').val(data[4]);
                $('#fname').val(data[2]);
                $('#lname').val(data[3]);
                $('#contact_num').val(data[5]);
            });
        });

    </script>


<!-- EDIT NURSE JS -->

<script>
        $(document).ready(function () {

            $('.nurseeditbtn').on('click', function () {

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#nurse_list').hide();
                $('#editNurseInfo').show();
                $('#update_id').val(data[0]);
                $('#unique_id').val(data[1]);
                $('#email').val(data[4]);
                $('#fname').val(data[2]);
                $('#lname').val(data[3]);
                $('#contact_num').val(data[5]);
            });
        });

    </script>

<!--#################################################################################################################################################################################################################################-->

<script>
        $(document).ready(function () {

            $('#nextpage2').on('click', function () {

                $('#addnurse_title1').hide()
                $('#addnurse_page1').hide();
                $('#addnurse_page2').show();
                $('#addnurse_title2').show()
                
            });
        });

</script>

<!--#################################################################################################################################################################################################################################-->

<!-- ADD NURSE -->
<script>
        $(document).ready(function () {

            $('#prevpage1').on('click', function () {

                $('#addnurse_title2').hide()
                $('#addnurse_page2').hide();
                $('#addnurse_page1').show();
                $('#addnurse_title1').show()
                
            });
        });

</script>

<!--#################################################################################################################################################################################################################################-->

<!-- ADD NURSE -->
<script>
        $(document).ready(function () {

            $('#nextpage3').on('click', function () {

                $('#addnurse_title2').hide()
                $('#addnurse_page2').hide();
                $('#addnurse_page3').show();
                $('#addnurse_title3').show()
                
            });
        });

</script>

<!--#################################################################################################################################################################################################################################-->

<!-- ADD NURSE -->
<script>
        $(document).ready(function () {

            $('#prevpage2').on('click', function () {

                $('#addnurse_title3').hide()
                $('#addnurse_page3').hide();
                $('#addnurse_page2').show();
                $('#addnurse_title2').show()
                
            });
        });

</script>

<!--#################################################################################################################################################################################################################################-->

<!-- ADD SUCCESS -->
<script>
        $(document).ready(function() {
  
            $("#addsuccess_btn").on('click', function () {
              
                $("#addsuccessModal").modal("show");

            });
        });


</script>

<!--#################################################################################################################################################################################################################################-->

<!-- DELETE NURSE -->
<script>
        $(document).ready(function() {
  
            $("#delNurse_btn").on('click', function () {
              
                $("#removesuccessModalNurse").modal("show");
                $("#viewNurseInfo").hide();
                $("#nurse_list").show();

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

<!-- DELETE HOSPITAL RECORD JS -->
<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#delHospital').modal('show');

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

<!-- DRAFT -->
  <!-- EDIT DEPARTMENT INFO JS -->
    <script>
        $(document).ready(function () {

            $('.editbtndepts').on('click', function () {

                $('#editDepartmentInfo').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);


                $('#update_id').val(data[8]);
                $('#emp_id').val(data[0]);
                $('#dept_name').val(data[3]);
                $('#building_name').val(data[4]);
                $('#room_num').val(data[5]);
                $('#firstname').val(data[6]);
                $('#lastname').val(data[7]);
                $('#email').val(data[8]);
                $('#contact_num').val(data[9]);
                $('#position').val(data[2]);
                $('#image').val(data[10]);
            });
        });

    </script>


<!-- DELETE DEPARTMENT RECORD JS -->
<script>
        $(document).ready(function () {

            $('.deletebtndepts').on('click', function () {

                $('#delDepartment').modal('show');

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