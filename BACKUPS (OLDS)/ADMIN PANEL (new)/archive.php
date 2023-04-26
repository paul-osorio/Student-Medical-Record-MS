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
    <title>SMRMS | ADMIN | Archive</title>

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
            <li  class="px-4 w-100 mb-1 nav-item tab py-1">
              <a href="report.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-book mx-2"></i><span>Reports</span></span></a>
            </li>
            <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
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

       <!-- ARCHIVE PAGE -->
       <section id="archives" class="archives so_content so_active" data-tab-content>  
        <div class="archives_header d-flex justify-content-between" style="margin-bottom: -50px;">
          <h3 class="m-0" >ARCHIVE</h3>
        </div>
        <div class="container">
          <div class="filter_wrapper">
            <div class="sort flex-grow-1">
              <span>Sort by</span>
              <select name="filter" id="filter">
                <option value="">Select</option>
                <option value="Type of User">Type of User</option>
                <option value="Date of Archive">Date of Archive</option>
              </select>
            </div>
            <div class="r">
              <div class="search">
                <input type="text" placeholder="&#xF002; Search Patients" class="searchicon" style="font-family:Poppins, FontAwesome">
              </div>
              <div class="scan">
                <button>Scan QR</button>
              </div>
            </div>
          </div>

          <div class="archives-content table-responsive">
            <table class="archives-table">
                <tr>
                  <th>Image</th>
                  <th>ID No.</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Date of Archive</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/badang.JPG"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/nurse.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>
                
                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graduated</td>
                  <td>July 29, 2019</td>
                  <td>

                      <a href="#restoreArch" class="custom_btn restorebtn" data-toggle="modal"><i class="fa fa-rotate-right" aria-hidden="true"></i></a>

                      <a href="#delArch" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                
                  </td>
                </tr>
            </table>
          </div>
        </div>
      </section>
<!-- E N D  A R C H I V E -->

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