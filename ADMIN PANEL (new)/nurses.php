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
    <title>SMRMS | ADMIN | Nurses</title>

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
                  <li  class="px-4 w-100 mb-1 nav-item tab py-1">
                  <a href="departments.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-building-o mx-2"></i><span>Departments</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
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

        <!-- NURSES PAGE -->
        <section id="nurses" class="nurses so_content so_active" data-tab-content>
          <div id="nurse_list">
          <div class="nurse_header d-flex justify-content-between">
            <h3 class="m-0">NURSES</h3>
          </div>
          <div class="action_header">
            <div class="filter_wrapper">
              <div class="sort flex-grow-1">
                <span>Sort by</span>
                <select name="filter" id="filter_nurse" style="width: 50%; border-radius: 3px; padding: 5px 5px; background: #f2f2f2; border: none; outline: none; height: 100%;">
                  <option value="emp_id">All</option>
                  <option value="position">Position</option>
                  <option value="schedule">Schedule</option>
                  <option value="Department">Department</option>
                  <!-- <option value="departments">Campus</option>
                  <option value="departments">Campus</option> -->
                </select>

              
              </div>


              <div>
                  <div class="search">
                    <input type="text" name="search" id="search_nurse" placeholder="&#xF002; Search Nurse" style="font-family:Poppins, FontAwesome">
                </div>

                
              </div>
            </div>
            <button class="custom_btn" style="height: 40px; margin-top: 7px;">
              <a href="#addNurseModal" class="custom_btn" data-toggle="modal"><i class="fa fa-plus"></i>Add Nurse</a>
            </button>
          </div>
          <div class="card_container">

                <?php if(mysqli_num_rows($fetchAllNurses) > 0) { 
                while ($nurses = mysqli_fetch_assoc($fetchAllNurses)) {  ?>

            <div class="card">
              <img src="./assets/<?=$nurses['profile_pic']?>" alt="" />
              <div class="card_content">
                <span class="stud_id"><?=$nurses['emp_id']?></span>
                <span class="name"><?=$nurses['firstname']?> <?=$nurses['lastname']?></span>
                <span class="nurse"><?=$nurses['position']?></span>
                <div class="card_footer">
                  <span class="date"><?=$nurses['schedule']?></span>
                    <a href="viewNurse.php" class="custom_btn nurseinfobtn" ><i class="fa fa-info-circle" aria-hidden="true" style="color: gray;"></i></a>
                    <a href="editNurse.php" class="custom_btn nurseeditbtn"><i class="fa fa-edit" aria-hidden="true" style="color: #37954B;"></i></a>
                    <a href="#delNurse" class="custom_btn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                </div>
              </div>
            </div>

                <?php } } ?>

          </div>
          </div>

<!--#################################################################################################################################################################################################################################-->

<!-- Add New Nurse Modal -->
<div id="addNurseModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="./crud/insert_new_nurse.php">
					<div class="modal-header">						
						<h4 class="modal-title" id="addnurse_title1">ADD NEW NURSE</h4>
            <h4 class="modal-title" style="display:none;" id="addnurse_title2">BASIC INFORMATION</h4>
            <h4 class="modal-title" style="display:none;" id="addnurse_title3">IN CASE OF EMERGENCY</h4>
					</div>
					<div class="modal-body">	

					<div class="addnurse_page1" id="addnurse_page1">
            <div class="addnurse_row">
              <div class="imgupload">
                <input type="file" id="selectedFile" style="display: none;" />
                <input type="button" id="imgbox" value="Upload Image" onclick="document.getElementById('selectedFile').click();" />
              </div>
              <div class="nurse_info">
                <div>
                  <span>EMP ID: </span>
                  <input type="text" class="form-control" name="emp_id" required>
                </div>
                <div>
                  <span>Email</span>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="nurse_details">
              <span>Position: </span>
              <select class="form-select" name="position" id="position">
                <option value="">---Select Position---</option>
                <option value="head">Head Nurse</option>
                <option value="nurse">Nurse</option>
              </select>
          
            </div>
            <div class="nurse_details" name="campus" id="campus">
              <span>Campus Assinged: </span>
              <select class="form-select">
                <option value="">---Select Campus---</option>
                <option value="sb">San Bartolome</option>
                <option value="b">Batasan</option>
                <option value="sf">San Francisco</option>
              </select>
            </div>
            <span>Schedule</span>
            <div class="schedule_row">
              <div class="schedule_day">
                <input type="checkbox" id="check_1" name="check_1" value="check_1">
                <label for="check_1">Monday</label>
              </div>
              <div class="schedule_day">
                <input type="checkbox" id="check_2" name="check_2" value="check_2">
                <label for="check_2">Tuesday</label>
              </div>
              <div class="schedule_day">
                <input type="checkbox" id="check_3" name="check_3" value="check_3">
                <label for="check_3">Wednesday</label>
              </div>
              <div class="schedule_day">
                <input type="checkbox" id="check_4" name="check_4" value="check_4">
                <label for="check_4">Thursday</label>
              </div>
              <div class="schedule_day">
                <input type="checkbox" id="check_5" name="check_5" value="check_5">
                <label for="check_5">Friday</label>
              </div>
            </div>
            <div class="addnurse_actionbtn">
              <input type="button" class="btn btn-danger" data-dismiss="modal" value="CANCEL">
              <input type="button" style="background-color:#3e64ff;" class="btn btn-success" id="nextpage2" value="NEXT">
					  </div>
          </div>

          <div class="addnurse_page2" id="addnurse_page2" style="display:none;">
            <div class="nurse_details_row_2">
              <div>
                <span>Firstname</span>
                <input type="text" class="form-control">
              </div>
            <div>
                <span>Lastname</span>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="nurse_details_row_3">
              <div>
                <span>Birthdate</span>
                <input type="date" class="form-control">
              </div>
              <div>
                <span>Age</span>
                <input type="text" class="form-control">
              </div>
              <div>
                <span>Sex</span>
                <select class="form-select" name="sex" id="sex">
                  <option value="">---Select Sex---</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                </select>
              </div>
            </div>
            <div>
              <span>Complete Address</span>
              <input type="text" class="form-control">
            </div>
            <div class="nurse_details_row_2">
              <div>
                <span>Contact Number</span>
                <input type="text" class="form-control">
              </div>
              <div>
                <span>Telephone No. (optional)</span>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="addnurse_actionbtn">
              <input type="button" style="background-color:gray" class="btn btn-danger" id="prevpage1" value="BACK">
              <input type="button" style="background-color:#3e64ff;" class="btn btn-success" id="nextpage3" value="NEXT">
					  </div>
          </div>
            
          <div class="addnurse_page3" id="addnurse_page3" style="display:none;">
            <div>
              <span>Fullname</span>
              <input type="text" class="form-control">
            </div>
            <div>
              <span>Contact Number</span>
              <input type="text" class="form-control">
            </div>
            <div>
              <span>Complete Address</span>
              <input type="text" class="form-control">
            </div>
            <div>
              <span>Relationship</span>
              <input type="text" class="form-control">
            </div>
            <div class="addnurse_actionbtn">
              <input type="button" style="background-color:gray" class="btn btn-danger" id="prevpage2" value="BACK">
              <input type="button" class="btn btn-success" id="nextpage3" value="ADD">
					  </div>
          </div>

					</div>
					
				</form>
			</div>
		</div>
	</div>

<!--#################################################################################################################################################################################################################################-->
        

      <!-- DELETE DATA NURSE MODAL AT NURSE PAGE-->

      <div class="modal fade" id="delNurse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  

                  <form action="./crud/delete_admin.php" method="POST">

                      <div class="modal-body delmodal">

                          <div class="del_icon"><i class="fa fa-trash"></i></div>

                          <input type="hidden" name="delete_id" id="delete_id">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Are you sure you want to remove this nurse? </h4>
                          <h4 style="color:blue; font-weight:bold; font-size:20px;">23-0003</h4>
                          <div class="modal_btn">
                            <input type="button" class="btn" style="background-color:lightgrey; color:black; font-weight:700;" id="cancel-admin-modal" data-dismiss="modal" value="No">
                            <input type="button" class="btn btn-danger" style="font-weight:700;" data-dismiss="modal" id="delNurse_btn" name="delNurse" value="Yes">
                          </div>

                      </div>
                  </form>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!--NURSE DELETED SUCCESSFULLY MODAL-->

      <div class="modal fade" id="removesuccessModalNurse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body removesuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> NURSE <span class="empid">23-0003</span> REMOVED SUCCESSFULLY </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:#3e64ff; font-weight:bold;">Redirecting...</p>

                      </div>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->


   <!-- VIEW NURSES INFORMATION -->
        
                        <div id="viewNurseInfo" style="display:none;">
                        <div class="nurse_header">
                            <h3 class="m-0">VIEW NURSE INFORMATION</h3>
                          </div>
                          <hr class="divider">
                          <div class="nurse_info">
                            <div class="nurseimg">
                                <img src="./assets/nurse.jpg">
                                <button>upload image</button>
                            </div>
                            <div class="infolist">
                                <div class="infodetails">
                                  <span>EMP ID: </span>
                                  <span>23-0003</span>
                                </div>
                                <div class="infodetails">
                                  <span>Email: </span>
                                  <input type="text" class="form-control" value="Sample.email@gmail.com">
                                </div>
                                <div class="infodetails">
                                  <span>Position: </span>
                                  <select class="form-select">
                                    <option>sample position</option>
                                  </select>
                                </div>
                                <div class="infodetails">
                                  <span>Campus Assigned: </span>
                                  <select class="form-select">
                                    <option>San Bartolome</option>
                                  </select>
                                </div>
                                <div class="infodetails">
                                  <span>Schedule </span>
                                  <div class="sched_day">
                                  <span class="day">Tuesday</span>
                                  <span class="day">Thursday</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <hr class="divider">
                          <span>Basic Information</span>
                          <div class="nurse_basicinfo">
                            <div class="row_4">
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Firstname</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Lastname</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Birthdate</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Age</span>
                              </div>
                            </div>
                            <div class="row_3">
                              <div class="basic_details">
                                <select class="form-select">
                                    <option>Sample</option>
                                  </select>
                                <span>Sex</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Phone Number</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Telephone No. (Optional)</span>
                              </div>
                            </div>
                            <div class="row_1">
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Complete Address</span>
                              </div>
                            </div>
                          </div>
                          <hr class="divider">
                          <span>In Case of Emergency</span>
                          <div class="row_4">
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Fullname</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Contact Number</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Complete Address</span>
                              </div>
                              <div class="basic_details">
                                <input type="text" class="form-control" value="Sample.email@gmail.com">
                                <span>Relationship</span>
                              </div>
                          </div>
                          <div class="actionbtn">
                              <!-- <a href="#Nurse" class="custom_btn" data-toggle="modal"><button onclick="history.back()">BACK</button></a> -->
                              <a href="#editNurseInfo" class="custom_btn" data-toggle="modal"><button style="background-color:green;">EDIT</button>
                              <a href="#delNurse" class="custom_btn" data-toggle="modal"><button style="background-color:#ED1C24;">REMOVE</button></a>
                          </div>
                      </div>



        <!-- EDIT NURSES INFORMATION -->
        
        <div id="editNurseInfo" style="display:none;">
        <div class="nurse_header">
            <h3 class="m-0">EDIT NURSE INFORMATION</h3>
          </div>
          <hr class="divider">
          <div class="nurse_info">
            <div class="nurseimg">
                <img src="./assets/nurse.jpg">
                <button>upload image</button>
            </div>
            <div class="infolist">
                <div class="infodetails">
                  <span>EMP ID: </span>
                  <span>23-0003</span>
                </div>
                <div class="infodetails">
                  <span>Email: </span>
                  <input type="text" class="form-control" value="Sample.email@gmail.com">
                </div>
                <div class="infodetails">
                  <span>Position: </span>
                  <select class="form-select">
                    <option>sample position</option>
                  </select>
                </div>
                <div class="infodetails">
                  <span>Campus Assigned: </span>
                  <select class="form-select">
                    <option>San Bartolome</option>
                  </select>
                </div>
                <div class="infodetails">
                  <span>Schedule </span>
                  <div class="sched_day">
                  <span class="day">Tuesday</span>
                  <span class="day">Thursday</span>
                  </div>
                </div>
            </div>
          </div>
          <hr class="divider">
          <span>Basic Information</span>
          <div class="nurse_basicinfo">
            <div class="row_4">
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Firstname</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Lastname</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Birthdate</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Age</span>
              </div>
            </div>
            <div class="row_3">
              <div class="basic_details">
                <select class="form-select">
                    <option>Sample</option>
                  </select>
                <span>Sex</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Phone Number</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Telephone No. (Optional)</span>
              </div>
            </div>
            <div class="row_1">
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Complete Address</span>
              </div>
            </div>
          </div>
          <hr class="divider">
          <span>In Case of Emergency</span>
          <div class="row_4">
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Fullname</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Contact Number</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Complete Address</span>
              </div>
              <div class="basic_details">
                <input type="text" class="form-control" value="Sample.email@gmail.com">
                <span>Relationship</span>
              </div>
          </div>
          <div class="actionbtn">
              <!-- <button onclick="history.back()">CANCEL</button> -->
              <button style="background-color:green;">EDIT</button>
              <a href="#delNurse" class="custom_btn" data-toggle="modal"><button style="background-color:#ED1C24;">REMOVE</button></a>
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