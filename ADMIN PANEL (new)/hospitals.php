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
    <title>SMRMS | ADMIN | Hospitals</title>

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
                <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
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

        <!-- HOSPITAL PAGE -->
        <section id="hospital" class="hospital so_content so_active" data-tab-content>

        <div class="hospital_header d-flex justify-content-between">
            <h3 class="m-0">HOSPITALS</h3>
          </div>
          <div class="action_header">   
              <!-- <div class="search" style="width: 55%; border-radius: 30px; border: none; color: gray; background: white;"> -->
                <input type="text" name="search" id="search_hospital" placeholder="&#xF002; Search Hospital" style="font-family:Poppins, FontAwesome">
              <!-- </div>  -->
            <button class="custom_btn">
              <a href="#addHospitalModal" class="custom_btn" data-toggle="modal"><i class="fa fa-plus"></i>Add Hospital</a>
            </button>
          </div>

          <div class="hospital_table_details table-responsive">
            <table>
              
              <tr id="table_header">
                  <th>Hospital ID</th>
                  <th>Hospital Name</th>
                  <th>Address</th>
                  <th>Email Address</th>
                  <th>Contact No.</th>
                  <th><span>Action</span></th>
              </tr>


                <?php if(mysqli_num_rows($fetchAllHospitals) > 0) { 
                  while ($hospital = mysqli_fetch_assoc($fetchAllHospitals)) {  ?>
              
              <tr class="container">
                  <td style="width:140px;" ><span class="hospitalname"><?=$hospital['hospi_id']?></span></td>
                  <td style="width:250px;" ><span class="hospitalname"><?=$hospital['hospital']?></span></td>
                  <td style="width:400px;"><span class="address"><?=$hospital['hospital_add']?></span></td>
                  <td><span class="email"><?=$hospital['email']?></span></td>
                  <td style="width:180px;"><span class="contact_num"><?=$hospital['contact_num']?></span></td>
                  <td>

                  <td><a href="#editHospitalInfo" class="custom_btn edithosbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: #3e64ff; font-size: 30px; margin-left: -95px;"></i></a></td>

                  <td><a href="#delHospital" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24; font-size: 30px; margin-left: -75px;"></i></a></td>
                  
              </tr>

                <?php } } ?>
                  

              
            </table>
          </div>
          <div>

          </div>

<!--########################################################################################################################################################################-->

      <!-- ADD NEW HOSPITAL MODAL AT HOSPITAL PAGE-->

        <div id="addHospitalModal" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="./crud/addHospital.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">ADD HOSPITAL</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group">
                        <label>Hospital ID</label> 
                        <input type="text" class="form-control" name="hospi_id" id="hospi_id" required>
                      </div>	

                      <div class="form-group">
                        <label>Hospital Name</label> 
                        <input type="text" class="form-control" name="hospital" id="hospital" required>
                      </div>	

                      <div class="form-group">
                        <label>Address</label> 
                        <input type="text" class="form-control" name="hospital_add" required>
                      </div>		

                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" name="email" required>
                      </div>

                      <div class="form-group">
                        <label>Contact No.</label>
                        <input type="text" class="form-control" name="contact_num" required>
                      </div>	
          
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <!-- <input type="button" class="btn btn-success" data-dismiss="modal" id="addsuccess_hospital" name="addHospi" value="Add"> -->
                    <input type="submit" class="btn btn-success" name="addHospi" value="Add">
                  </div>

                </form>
              </div>

            </div>
          </div>

<!--########################################################################################################################################################################-->

    <!-- EDIT DATA HOSPITAL MODAL AT ADMINS PAGE-->
        <div class="modal fade" id="editHospitalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"> EDIT HOSPITAL DATA </h5>
                      
                  </div>

                  <form action="./crud/edit_hospital.php" method="POST">

                      <div class="modal-body">
                        
                        <input type="hidden" name="update_id" id="update_id">

                            <div class="form-group">
                              <label>Hospital ID</label> 
                              <input type="text" name="hospi_id" id="hospi_id" class="form-control" placeholder="Hospital ID" readonly>
                            </div>	

                            <div class="form-group">
                              <label>Hospital Name</label> 
                              <input type="text" name="hospital" id="hospital" class="form-control" placeholder="Hospital Name">
                            </div>	

                            <div class="form-group">
                              <label>Address</label> 
                              <input type="text" name="hospital_add" id="hospital_add" class="form-control" placeholder="Address">
                            </div>		

                            <div class="form-group">
                              <label> Email Address </label>
                              <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                              <label>Contact Number</label>
                              <input type="text" name="contact_num" id="contact_num" class="form-control" placeholder="Contact Number">
                            </div>

                     </div>

                      <div class="modal-footer">

                          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">

                          <input type="submit" class="btn btn-success" name="editHospi" value="Update Data">

                          <!-- <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                          <input type="button" class="btn btn-success" data-dismiss="modal" id="addsuccess_hospital" name="editHospi" value="Save">
                          -->
                      </div>
                  </form>

              </div>
            </div>
        </div>


<!--#################################################################################################################################################################################################################################-->
        

      <!--HOSPITAL ADDED SUCCESSFULLY MODAL-->

      <div class="modal fade" id="addsuccessModalHospital" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body addsuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Added Successfully! </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:blue; font-weight:bold;">Redirecting...</p>

                      </div>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!-- DELETE DATA HOSPITAL MODAL AT HOSPITAL PAGE-->

      <div class="modal fade" id="delHospital" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  

                  <form action="./crud/delete_hospital.php" method="POST">

                      <div class="modal-body delmodal">

                          <div class="del_icon"><i class="fa fa-trash"></i></div>

                          <input type="hidden" name="delete_id" id="delete_id">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Are you sure you want to remove this hospital? </h4>
                          <h4 style="color:blue; font-weight:bold; font-size:20px;">Metro North Medical Center & Hospital</h4>
                          <div class="modal_btn">
                            <input type="button" class="btn" style="background-color:lightgrey; color:black; font-weight:700;" id="cancel-hospital-modal" data-dismiss="modal" value="No">
                            <input type="button" class="btn btn-danger" style="font-weight:700;" data-dismiss="modal" id="delHospital_btn" name="delHospital" value="Yes">
                          </div>

                      </div>
                  </form>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!--HOSPITAL DELETED SUCCESSFULLY MODAL-->

      <div class="modal fade" id="removesuccess_hospital" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body removesuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> <span class="hospitalname">METRO NORTH MEDICAL CENTER & HOSPITAL</span> REMOVED SUCCESSFULLY </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:#3e64ff; font-weight:bold;">Redirecting...</p>

                      </div>

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


                $('#update_id').val(data[0]);
                $('#hospi_id').val(data[1]);
                $('#hospital').val(data[1]);
                $('#hospital_add').val(data[2]);
                $('#email').val(data[3]);
                $('#contact_num').val(data[4]);
                
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

<!-- ADD SUCCESS -->
<script>
        $(document).ready(function() {
  
            $("#addsuccess_btn").on('click', function () {
              
                $("#addsuccessModal").modal("show");

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