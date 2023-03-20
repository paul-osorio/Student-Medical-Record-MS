<?php 
session_start();


$id = $_SESSION['user_id'];

if(empty($id)) {
  header("location: ./index.php");
}

if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {

?>


<?php
    include_once 'insert_new_nurse.php';
    include_once 'insert_admin.php';
    include('db_conn.php');

    include_once 'edit_admin.php';
    include_once 'delete_admin.php';
?>


<?php
     include_once 'insert_data.php';
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


?>

<!--########################################################################################################################################################################-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./assets/favcon.png"/>
    <title>SMRMS | ADMIN</title>

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
          <p>Student Medical <br> Record</p>
        </div>
        
        
        <ul class="list-unstyled navbar-nav ps-0">
          
          <li
              data-tab-target="#dashboard"
              class="mt-3 px-4 w-100 mb-1 nav-item so_active tab">
              
              <i class="fa fa-area-chart"></i>
              
              <a class="nav-link align-items-center"> Dashboard </a>

          </li>

          <li data-tab-target="#admins" class="px-4 w-100 mb-1 nav-item tab">
              
              <i class="fa fa-users" aria-hidden="true"></i>
              
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Admins

              </div>

          </li>

          <li data-tab-target="#departments" class="px-4 w-100 mb-1 nav-item tab">
              
              <i class="fa fa-building-o" aria-hidden="true"></i>
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Departments

              </div>

          </li>

          <li data-tab-target="#nurses" class="px-4 w-100 mb-1 nav-item tab">
              
              <i class="fa fa-user-md" aria-hidden="true"></i>
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Nurses

              </div>
          
          </li>

          <li data-tab-target="#hospital" class="px-4 w-100 mb-1 nav-item tab">
              
              <i class="fa fa-hospital-o" aria-hidden="true"></i>
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Hospital

              </div>
          
          </li>


          <li data-tab-target="#medicine" class="px-4 w-100 mb-1 nav-item tab">
              
              <i class="fa fa-medkit"></i>
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Medicine
                
            </div>
          </li>

          <li data-tab-target="#reports" class="px-4 w-100 mb-1 nav-item tab">
              
              <i class="fa fa-book"></i>
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Reports
                
              </div>

          </li>

          <li data-tab-target="#archives" class="px-4 w-100 mb-1 nav-item tab">
            
              <i class="fa fa-folder-open-o" aria-hidden="true"></i>
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Archive

            </div>

          </li>

          <li data-tab-target="#entrancelog" class="px-4 w-100 mb-1 nav-item tab">
              
              <i class="fa fa-address-book"></i>
              <div
                class="nav-link align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#home-collapse"
                aria-expanded="true">

                Entrance Log
                
            </div>
            
          </li>

          <div class="web_info">

          <div class="admin_info"><br><br>
            <img src="./assets/<?=$admins['img']?>" alt=""/>
            <span><?=$admins['email']?></span>
            <span><?=$admins['fname']?>&nbsp<?=$admins['lname']?></span>
          </div>

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
                  <img src="./assets/<?=$admins['img']?>" alt=""/>
                </div>

                <ul
                  class="dropdown-menu dropdown-menu-end dropdown-menu-dark"
                  aria-labelledby="dropdownMenuButton1">

                  <li>
                    <a class="dropdown-item" href="#">Login As: <?=$admins['fname']?><span id="email_span"></span></a>
                  </li>

                  <li><a class="dropdown-item" href="#">Manage Account</a></li>

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

          <div class="card_container">

            <div class="card" style="background-color:#7BAD89;">

              <div class="card_content">
                <span class="number"> <?=$countAdmins['totalAd']?> </span>
                <span class="name">Admins</span>
              </div>

              <div class="icon">
                <i class="fa solid fa-user" aria-hidden="true"></i>
              </div>

            </div>

            <div class="card" style="background-color:#7B89AD;">

              <div class="card_content">
                <span class="number"> <?=$countNurses['totalNur']?> </span>
                <span class="name">Nurses</span>
              </div>

              <div class="icon">
                <i class="fa solid fa-user" aria-hidden="true"></i>
              </div>

            </div>

            <div class="card" style="background-color:#AD7B7B;">

              <div class="card_content" >
                <span class="number"> <?=$countStudents['totalStud']?> </span>
                <span class="name">Students</span>
              </div>

              <div class="icon">
                <i class="fa solid fa-user" aria-hidden="true"></i>
              </div>

            </div>

          </div>

<!--########################################################################################################################################################################-->

        <!-- SUMMARY REPORT AT DASHBOARD PAGE -->

          <div class="chart_container">
            <div class="card_content">
              <div class="chart1">
                <span>NUMBER OF PATIENTS</span>
                  <select name="filter" id="filter">
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
                  </select>
                <canvas id="myChart" style="width:80%; max-width:550px; height: 130px; padding-top: 15px;"></canvas>
              </div>
            </div>


            <!-- <div class="card_content">
              <div class="chart2">
                  <select name="filter" id="filter">
                    <option value="Year Level">Year Level</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                  </select>
                  <canvas id="myChart2" style="width:70%; max-width:500px; height: 110px; padding-left: 5px; padding-top: 15px"></canvas>
              </div>
            </div>
          </div> -->

<!--########################################################################################################################################################################-->
          
        <!-- NURSES TODAY AT DASHBOARD PAGE -->

          <!-- <div class="nurses_details">
            <span class="title">NURSES TODAY</span>

            <table>
            
                <?php if(mysqli_num_rows($fetchAllNursesToday) > 0) { 
                while ($todayNurses = mysqli_fetch_assoc($fetchAllNursesToday)) {  ?>

              <tr class="container">
                  <td class="number"><span><?=$todayNurses['emp_id']?></span></td>
                  <td class="name"><img src="./assets/<?=$todayNurses['profile_pic']?>"/><span class="name"><?=$todayNurses['firstname']?> <?=$todayNurses['lastname']?></span></td>
                  <td><span class="type"><?=$todayNurses['position']?></span></td>
                  <td><span class="date"><?=$todayNurses['schedule']?></span></td>
                    <td class="class">
                      <span>Chat Now</span>
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </td>
              </tr>

                <?php } } ?>

            </table>
          </div> -->
        </section>


<!--########################################################################################################################################################################-->

        <!-- ADMINS PAGE -->
        <section id="admins" class="admins so_content" data-tab-content>

          <div class="admins_header d-flex justify-content-between">
            <h3 class="m-0 text-white">ADMINS LIST</h3>
              <button class="custom_btn">
                <a href="#addAdminModal" class="custom_btn" data-toggle="modal"><i class="fa fa-user-md"></i>Add New Admin</a>
              </button>
          </div>

          <!-- old filter -->
          <!-- <div class="filter_wrapper">
            <div class="sort flex-grow-1">
              <span>Sort by</span>
                <select name="filter" id="filter_admin">
                  <option value="lname">Surname</option>
                  <option value="fname">Firstname</option>
                </select>
            </div>

            <div class="r">
              <div class="search">
                <input type="text" placeholder="Search" id="search_admin"/>
              </div>

              <div class="grid">
                <i class="fa fa-th-large" aria-hidden="true"></i>
              </div>

              <div class="bars">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
          </div> -->
          
          <div class="admins_table_details table-dark table-responsive">
            <table>
              
              <tr id="table_header">
                  <th> Image </th>
                  <th> Admin ID</th>
                  <th> First Name</th>
                  <th> Last Name</th>
                  <th> Email Address</th>
                  <th> Contact Number</th>
                  <th><span>Action</span></th>
              </tr>
              

                  <?php if(mysqli_num_rows($fetchAddAdmins) > 0) { 
                  while ($addAdmins = mysqli_fetch_assoc($fetchAddAdmins)) {  ?>


              <tr class="container">
                  <td> <img src="./assets/<?=$addAdmins['img']?>"/></td>
                  <td><span class="uniqueid"><?=$addAdmins['unique_id']?></span></td>
                  <td><span class="fname"><?=$addAdmins['fname']?></span></td>
                  <td><span class="lname"><?=$addAdmins['lname']?></span></td>
                  <td><span class="email"><?=$addAdmins['email']?></span></td>
                  <td><span class="contact_num"><?=$addAdmins['contact_num']?></span></td>
                  <td>
                      <!-- <a href="#viewAdminInfo" class="custom_btn" data-toggle="modal"><i class="fa fa-info-circle" aria-hidden="true" style="color: #5D8FD9;"></i></a> -->

                      <a href="#editAdminInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: #3e64ff;"></i></a>

                      <a href="#delAdmin" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                  </td>
              </tr>
              
                  <?php } } ?>

              
            </table>
          </div>
        <div>

      </div>



<!--########################################################################################################################################################################-->

      <!-- ADD NEW ADMIN MODAL AT ADMINS PAGE-->

        <div id="addAdminModal" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">ADD NEW ADMIN</h4>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                  </div>

                  <div class="modal-body">	

                      <div class="form-group">
                        <center><label>Upload Image</label>
                        <input type="file" class="form-control" name="img" required></center>
                      </div>	

                      <div class="form-group">
                        <label>Admin ID: </label>
                        <input type="text" class="form-control" name="unique_id" required>
                      </div><br>
                      <!-- <div class="form-group">
                        <label>Admin ID</label> 
                        <input type="text" class="form-control" name="unique_id" required>
                      </div>	 -->

                      <!-- <div class="form-group">
                        <label>Password</label> 
                        <input type="text" class="form-control" name="password" required>
                      </div>	 -->

                      <div class="form-group">
                        <label>First Name</label> 
                        <input type="text" class="form-control" name="fname" required>
                      </div>		

                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" required>
                      </div>

                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name="contact_num" required>
                      </div>	
          
                      <div class="form-group">
                        <label>Email Address</label> 
                        <input type="text" class="form-control" name="email" required>
                      </div>	

                      <div class="form-group">
                        <label>Password</label> 
                        <input type="password" class="form-control" name="password" required>
                      </div>	

                  
                    
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-success" data-dismiss="modal" id="addsuccess_btn" name="addAdmin" value="Add">
                  </div>

                </form>
              </div>

            </div>
          </div>
          
       
<!--#################################################################################################################################################################################################################################-->
        

      <!--ADMIN ADDED SUCCESSFULLY MODAL-->

      <div class="modal fade" id="addsuccessModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body addsuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Added Successfully! </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:blue; font-weight:bold;">A username and password was already sent to nurse's email. Redirecting...</p>

                      </div>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!--ADMIN LIMIT REACHED MODAL-->

      <div class="modal fade" id="addsuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body addsuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px; color:#ED1C24;"> WARNING!!! </h4>
                          <h4 style=" font-size: 20px;">ADMINS HAVE FULLY REACHED ITS LIMITS</h4>

                      </div>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->

      <!-- EDIT DATA ADMIN MODAL AT ADMINS PAGE-->
        <div class="modal fade" id="editAdminInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"> EDIT ADMIN DATA </h5>

                      <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button> -->
                      
                  </div>

                  <form action="edit_admin.php" method="POST">

                      <div class="modal-body">
                        
                        <input type="hidden" name="update_id" id="update_id">
                        
                        <div class="form-group">
                            <center><label>Upload Image</label>
                            <input type="file" class="form-control" name="img" id="img" required></center>
                        </div>	
                        
                        <div class="form-group">
                            <label> Admin ID </label>
                            <input type="text" name="unique_id" id="unique_id" class="form-control" placeholder="Admin ID" readonly>
                        </div>

                        <div class="form-group">
                            <label> Email Address </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
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

                          <input type="submit" class="btn btn-success" name="updateAdmin" value="Update Data">
                      
                      </div>
                  </form>

              </div>
            </div>
        </div>


<!--#################################################################################################################################################################################################################################-->
        

      <!-- DELETE DATA ADMIN MODAL AT ADMIN PAGE-->

      <div class="modal fade" id="delAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  

                  <form action="delete_admin.php" method="POST">

                      <div class="modal-body delmodal">

                          <div class="del_icon"><i class="fa fa-trash"></i></div>

                          <input type="hidden" name="delete_id" id="delete_id">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Are you sure you want to remove this admin? </h4>
                          <h4 style="color:blue; font-weight:bold; font-size:20px;">23-0003</h4>
                          <div class="modal_btn">
                            <input type="button" class="btn" style="background-color:lightgrey; color:black; font-weight:700;" id="cancel-admin-modal" data-dismiss="modal" value="No">
                            <input type="button" class="btn btn-danger" style="font-weight:700;" data-dismiss="modal" id="delAdmin_btn" name="delAdmin" value="Yes">
                          </div>

                      </div>
                  </form>

              </div>
          </div>
      </div>

<!--#################################################################################################################################################################################################################################-->
        

      <!--ADMIN DELETED SUCCESSFULLY MODAL-->

      <div class="modal fade" id="removesuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">

          <div class="modal-dialog" role="document">
              <div class="modal-content">

                      <div class="modal-body removesuccessmodal">

                          <h4 style=" font-weight:bold; padding-top:50px;"> ADMIN <span class="empid">23-0003</span> REMOVED SUCCESSFULLY </h4>
                          <div class="check_icon"><i class="fa fa-check"></i></div>
                          <p style="color:#3e64ff; font-weight:bold;">Redirecting...</p>

                      </div>

              </div>
          </div>
      </div>

      </section>








<!--#################################################################################################################################################################################################################################-->

      <!-- DEPARTMENTS PAGE -->
        <section id="departments" class="departments so_content" data-tab-content>
          <div class="nurse_header d-flex justify-content-between">
            <h3 class="m-0 text-white">DEPARTMENTS LIST</h3>
            <button class="custom_btn">
              <a href="#addDepartmentModal" class="custom_btn" data-toggle="modal"><i class="fa fa-user-md"></i>Add Department</a>
            </button>
          </div>

          <!-- <div class="filter_wrapper">
            <div class="sort flex-grow-1">
              <span>Sort by</span>
              <select name="filter" id="filter">
                <option value="departments">Type of Departments</option>
              </select>
            </div>
            <div class="r">
              <div class="search">
                <input type="text" placeholder="Search" />
              </div>
              <div class="grid">
                <i class="fa fa-th-large" aria-hidden="true"></i>
              </div>
              <div class="bars">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
          </div> -->

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
                  

                  <form action="insert_department.php" method="POST">

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
                                <option value="">---Select Department---</option>
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
                                <option value="">---Select Building Name---</option>
                                <option value="bautista">Bautista Building</option>
                                <option name="techvoc">TechVoc Building</option>
                                <option name="belmonte">Belmonte Building</option>
                            </select>
                          </div>
                          <div name="room_num">
                          <label>Room No.</label>
                            <select name="room_num" id="room_num" class="form-control">
                                <option value="">---Select Room No.---</option>
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

                  <form action="edit_depts.php" method="POST">

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
                                <option value="">---Select Department---</option>
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
                                <option value="">---Select Building Name---</option>
                                <option value="bautista">Bautista Building</option>
                                <option name="techvoc">TechVoc Building</option>
                                <option name="belmonte">Belmonte Building</option>
                            </select>
                          </div>
                          <div name="room_num">
                          <label>Room No.</label>
                            <select name="room_num" id="room_num" class="form-control">
                                <option value="">---Select Room No.---</option>
                                <option name="room1">IC301a</option>
                                <option name="room2">IC302a</option>
                                <option name="room3">IC304a</option>
                                <option name="room4">IC304a</option>
                                <option name="room5">IC305a</option>
                                <option name="room6">IC306a</option>
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
                  

                  <form action="delete_admin.php" method="POST">

                      <div class="modal-body delmodal">

                          <div class="del_icon"><i class="fa fa-trash"></i></div>

                          <input type="hidden" name="delete_id" id="delete_id">

                          <h4 style=" font-weight:bold; padding-top:50px;"> Are you sure you want to remove this department? </h4>
                          <h4 style="color:blue; font-weight:bold; font-size:20px;">BSIT Department</h4>
                          <div class="modal_btn">
                            <input type="button" class="btn" style="background-color:lightgrey; color:black; font-weight:700;" id="cancel-admin-modal" data-dismiss="modal" value="No">
                            <input type="submit" class="btn btn-danger" style="font-weight:700;" name="delAdmin" value="Yes">
                          </div>

                      </div>
                  </form>

              </div>
          </div>
      </div>

      </section>







<!--#################################################################################################################################################################################################################################-->

        <!-- NURSES PAGE -->
        <section id="nurses" class="nurses so_content" data-tab-content>
          <div id="nurse_list">
          <div class="nurse_header d-flex justify-content-between">
            <h3 class="m-0">NURSES</h3>
          </div>
          <div class="action_header">
            <div class="filter_wrapper">
              <div class="sort flex-grow-1">
                <span>Sort by</span>
                <select name="filter" id="filter" style="width: 50%;">
                  <option value="">Select</option>
                  <option value="departments">Campus</option>
                  <!-- <option value="departments">Campus</option>
                  <option value="departments">Campus</option> -->
                </select>

              
              </div>
              <div>
                  <div class="search">
                    <input type="text" name="search" id="search_nurse" placeholder="&#xF002; Search Nurse" style="font-family:Arial, FontAwesome">
                </div>

                
                <!-- <div class="grid">
                  <i class="fa fa-th-large" aria-hidden="true"></i>
                </div>
                <div class="bars">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </div> -->
              </div>
            </div>
            <button class="custom_btn">
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
                    <a href="#viewNurseInfo" class="custom_btn nurseinfobtn" ><i class="fa fa-info-circle" aria-hidden="true" style="color: gray;"></i></a>
                    <a href="#editNurseInfo" class="custom_btn nurseeditbtn"><i class="fa fa-edit" aria-hidden="true" style="color: #37954B;"></i></a>
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
				<form method="post" action="adminDashboard.php">
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
                  

                  <form action="delete_admin.php" method="POST">

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

        <!-- HOSPITAL PAGE -->
        <section id="hospital" class="hospital so_content" data-tab-content>

        <div class="hospital_header d-flex justify-content-between">
            <h3 class="m-0">HOSPITAL</h3>
          </div>
          <div class="action_header">   
             <input type="text" name="search" placeholder="&#xF002; Search Hospital" style="font-family:Arial, FontAwesome">
            <button class="custom_btn">
              <a href="#addHospitalModal" class="custom_btn" data-toggle="modal"><i class="fa fa-plus"></i>Add Hospital</a>
            </button>
          </div>

          <div class="hospital_table_details table-responsive">
            <table>
              
              <tr id="table_header">
                  <th>Hospital Name</th>
                  <th>Address</th>
                  <th>Email Address</th>
                  <th>Contact No.</th>
                  <th><span>Action</span></th>
              </tr>
              

                  <!-- <?php if(mysqli_num_rows($fetchAddAdmins) > 0) { 
                  while ($addAdmins = mysqli_fetch_assoc($fetchAddAdmins)) {  ?> -->

                  <tr class="container">
                      <td><span class="hospitalname"><?=$addAdmins['unique_id']?></span></td>
                      <td><span class="address"><?=$addAdmins['fname']?></span></td>
                      <td><span class="email"><?=$addAdmins['lname']?></span></td>
                      <td><span class="contact_num"><?=$addAdmins['contact_num']?></span></td>
                      <td>
                          <!-- <a href="#viewAdminInfo" class="custom_btn" data-toggle="modal"><i class="fa fa-info-circle" aria-hidden="true" style="color: #5D8FD9;"></i></a> -->

                          <a href="#editHospitalInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: #3e64ff;"></i></a>

                          <a href="#delHospital" class="custom_btn deletebtn" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color: #ED1C24;"></i></a>
                      </td>
                  </tr>

                  <!-- <?php } } ?> -->


                <?php if(mysqli_num_rows($fetchAllHospitals) > 0) { 
                  while ($hospital = mysqli_fetch_assoc($fetchAllHospitals)) {  ?>
              
              <tr class="container">
                  <td style="width:250px;" ><span class="hospitalname"><?=$hospital['hospital']?></span></td>
                  <td style="width:400px;"><span class="address"><?=$hospital['hospital_add']?></span></td>
                  <td><span class="email"><?=$hospital['email']?></span></td>
                  <td style="width:180px;"><span class="contact_num"><?=$hospital['contact_num']?></span></td>
                  <td>

                  <td><a href="#editHospitalInfo" class="custom_btn editbtn" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true" style="color: #3e64ff; font-size: 30px; margin-left: -95px;"></i></a></td>

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
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">ADD HOSPITAL</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group">
                        <label>Hospital Name</label> 
                        <input type="text" class="form-control" name="hospitalname" required>
                      </div>	

                      <div class="form-group">
                        <label>Address</label> 
                        <input type="text" class="form-control" name="address" required>
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
                    <input type="button" class="btn btn-success" data-dismiss="modal" id="addsuccess_hospital" name="addAdmin" value="Add">
                  </div>

                </form>
              </div>

            </div>
          </div>

<!--########################################################################################################################################################################-->

      <!-- EDIT DATA HOSPITAL MODAL AT HOSPITAL PAGE-->

      <div id="editHospitalInfo" class="modal fade">
            <div class="modal-dialog">

              <div class="modal-content">
                <form method="post" action="adminDashboard.php">

                  <div class="modal-header">						
                    <h4 class="modal-title">EDIT HOSPITAL</h4>
                  </div>

                  <div class="modal-body">	

                      <div class="form-group">
                        <label>Hospital Name</label> 
                        <input type="text" class="form-control" name="hospitalname" value="Metro North Medical Center & Hospital" required>
                      </div>	

                      <div class="form-group">
                        <label>Address</label> 
                        <input type="text" class="form-control" name="address" value="1001 Mindanao Avenue, Quezon City, 1106 Metro Manila" required>
                      </div>		

                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" name="email" value="spcustorel@mnmch.com" required>
                      </div>

                      <div class="form-group">
                        <label>Contact No.</label>
                        <input type="text" class="form-control" name="contact_num" value="(02)8426-7000" required>
                      </div>	
          
                  </div>
                  
                  <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="button" class="btn btn-success" data-dismiss="modal" id="addsuccess_hospital" name="addAdmin" value="Save">
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
                  

                  <form action="delete_admin.php" method="POST">

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

<!-- MEDICINES -->
<section id="medicine" class="medicine so_content" data-tab-content>
          <div class="medicine_landing">
            <div class="medicine_header d-flex justify-content-between">
              <h3 class="m-0" style="color: white;">MEDICINES</h3>
                <button class="custom_btn">
                  <a href="#addMedicineModal" class="custom_btn" data-toggle="modal"><i class="fa fa-medkit"></i>Add Medicine</a>
                </button>
            </div>
          </div>
          <div class="filter_wrapper">
          <div class="sort flex-grow-1">
            <span>Sort by</span>
            <select name="filter" id="filter"> 
              <option value="">Select</option> 
              <option name="filter" value="Date Manufactured">Date Manufactured</option>
              <option name="filter" value="Date Expiration">Date Expiration</option>
              <option name="filter" value="Quantity">Quantity</option>
            </select>
          </div>
          <div class="r">
            <div class="search">
              <input type="text" name="search" placeholder="&#xF002; Search Medicine" style="font-family:Arial, FontAwesome">
            </div>
            <div class="grid">
              <i class="fa fa-th-large" aria-hidden="true"></i>
            </div>
            <div class="bars">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
          </div>
          </div>


          <div>
  <ul class="accordion">

    <?php if(mysqli_num_rows($fetchAllMedicine) > 0) { 
                while ($med = mysqli_fetch_assoc($fetchAllMedicine)) {  ?>


    <li>
        <input type="radio" name="accordion" id="first" checked>
        <label for="first">
          <div class="medicine-table">
            <table class="table-mdc">
              <tbody>
                <tr class="mdc-header">
                  <td style="width:120px;"><img src="./assets/<?=$med['image']?>" width="150px" height="130px"> </td>
                  <td style="width:200px;" >
                    <table>
                      <td class="b1"><?=$med['name']?></td>
                      <tr>
                      <td class="mdc-brand">Brand: <?=$med['brand']?></td>
                      <tr>
                      <td><?=$med['prod_id']?></td>
                    </table>
                  </td>
            
                  <td style="text-align:justify;text-justify:inter-word;width:400px;">
                    <span class="mdc-stock">Desctiption: </span>
                    <span class="mdc-qty"><?=$med['description']?></span>
                  </td>
                    
          
                  
                  <td style="width:390px;"><b>Expiration Date:</b> <?=$med['expirationDate']?></td>
                  <!-- <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medModal">
                    View
                    </button> 
                  </td> -->
                  <td><a href="#medModal" class="custom_btn" data-bs-toggle="modal"><i class="fa fa-info-circle" id="view" aria-hidden="true" style="color: gray; font-size: 30px"></i></a></td>

                  <td><a href="#editMedInfo" class="custom_btn editmedbtn" data-bs-toggle="modal"><i class="fa fa-edit" id="edit" aria-hidden="true" style="color: #3e64ff; font-size: 30px"></i></a></td>

                  <td><a href="#delMed" class="custom_btn deletemedbtn" data-bs-toggle="modal"><i class="fa fa-trash" id="delete" aria-hidden="true" style="color: #ED1C24; font-size: 30px"></i></a></td>
                  
       
                </tr>
                </tbody>
                </table>
                </div>
        </label>
      
    </li>


    <div class="modal fade" id="medModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 1000px; margin-right:2.5rem;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MEDICINE INFORMATION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div class="modal-body">
            <div class="row">
              <div class="col">
                        <label for="medname" class="form-label">Medicine Name</label>
                        <input type="text" class="form-control" id="medname" style="width:200px;"readonly placeholder="<?=$med['name']?>">
              </div>

              <div class="col">
              <label style="color: white;" for="brand" class="form-label">Brand</label>
                        <input type="text" style="color: white;" class="form-control" id="brand" readonly placeholder="<?=$med['brand']?>">
                </div>

                <div class="col">
              <label for="stocks" class="form-label">Stocks</label>
                        <input type="text" class="form-control" id="stocks" readonly placeholder="<?=$med['num_stocks']?>">
                </div>

                <div class="col">
                <label for="expdate" class="form-label">Expiration Date</label>
                        <input type="date" class="form-control" id="expirationDate" readonly value="<?=$med['expirationDate']?>">
                </div>
                <!---->
            <div class="row">
            <div class="col">
            <label for="genname" class="form-label">Generic Name</label>
                        <input type="text" class="form-control" id="genname" style="width:200px;"readonly value="<?=$med['genericName']?>">
            </div>
            <div class="col">
            <label for="gendatemanu" class="form-label">Date Manufactured</label>
                        <input type="date" class="form-control" id="datemanu" style="width:200px;"readonly value="<?=$med['date_manufactured']?>">
            </div>
            <div class="col">
            <label for="prod_con" class="form-label">Product Condition</label>
                        <input type="text" class="form-control" id="prod_con" style="width:200px;"readonly value="<?=$med['prodCondition']?>">
            </div>
            <div class="col">
            <label for="storage" class="form-label">Storage</label>
                        <input type="text" class="form-control" id="storage" style="width:100px;"readonly value="<?=$med['storage']?>">
            </div>
            <div class="col">
            <label for="box_id" class="form-label">Box ID</label>
                        <input type="text" class="form-control" id="box_id" style="width:100px;"readonly value="<?=$med['box_id']?>">
            </div>

            <div class="row">
            <div class="col">
            <label for="manu_comp" class="form-label">Manufacturer's Company</label>
                        <input type="text" class="form-control" id="manu_comp" style="width:210px;"readonly value="<?=$med['manufacturerName']?>">
            </div>
            <div class="col">
            <label for="email" class="form-label">Email Address</label>
                        <input type="text" class="form-control" id="email" style="width:100px;"readonly value="<?=$med['prodCondition']?>">
            </div>
            <div class="col">
            <label for="contact_num" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_num" style="width:170px;"readonly value="<?=$med['contact_info']?>">
            </div>
            </div>
            <div class="row">
              <div class="col"></div>
            </div>

            </div>

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
        <style>
          .modal-footer{
            max-width:100%;
          }
        </style>
      </form>
    </div>
  </div>
</div>



    

    <?php } } ?>
  </ul>
</div>

        </section>

<!-- ############################################################################################################################################################################################################## -->

        <!-- Add New Medicine Modal -->
          <div id="addMedicineModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="post" action="insert_medicine.php">
                    <div class="modal-header">						
                      <h4 class="modal-title" style="color: black;">ADD MEDICINE TO INVENTORY</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">	
                    <div class="form-group">
                        <label>Product ID</label> 
                        <input type="text" class="form-control" name="prod_id" required>
                      </div>				
                      <div class="form-group">
                        <label>Medicine Name</label> 
                        <input type="text" class="form-control" name="name" required>
                      </div>
                      <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" name="brand" required>
                      </div>
                      <div class="form-group">
                        <label>Stocks</label>
                        <input type="text" class="form-control" name="num_stocks" required></input>
                      </div>
                      <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="date" class="form-control" name="expirationDate" required>
                      </div>		
                      <div class="form-group">
                        <label>Generic Name</label>
                        <input type="text" class="form-control" name="genericName" required>
                      </div>	
                      <div class="form-group">
                        <label>Date Manufactured</label>
                        <input type="date" class="form-control" name="date_manufactured" required>
                      </div>	
                      <div class="form-group">
                        <label>Product Condition</label>
                        <input type="text" class="form-control" name="prodCondition" required>
                      </div>	
                      <div class="form-group">
                        <label>Storage</label>
                        <input type="text" class="form-control" name="storage" required>
                      </div>	
                      <div class="form-group">
                        <label>Box ID</label>
                        <input type="text" class="form-control" name="box_id" required>
                      </div>	
                      <div class="form-group">
                        <label>Manufacturer's Company</label>
                        <input type="text" class="form-control" name="manufacturerName" required>
                      </div>	
                      <!-- <div class="form-group"> -->
                        <!-- <label>Email Address</label> -->
                        <!-- <input type="text" class="form-control" name="phone" required> -->
                      <!-- </div>	 -->
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name="contact_info" required>
                      </div>	
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" required></textarea>
                      </div>	

                      <div class="form-group">
                        <center><label>Upload Product Image</label>
                        <input type="file" class="form-control" name="image" required></center>
                      </div>	

                      <div class="form-group">
                        <center><label>Upload Product QR Code</label>
                        <input type="file" class="form-control" name="prod_qrcode" required></center>
                      </div>	
                      
                    </div>
                    <div class="modal-footer" style="width: 498px;">
                      <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                      <input type="submit" class="btn btn-success" name="addmed" value="Add">
                    </div>
                  </form>
                </div>
              </div>
            </div>

<!-- ############################################################################################################################################################################################################## -->




<!--#################################################################################################################################################################################################################################-->

      
      <!-- REPORTS PAGE -->
      <section id="reports" class="reports so_content" data-tab-content>
        <h3 class="m-0" style="color: white;">REPORTS</h3>
        <div class="headerpatients">
          <span class="headerpatients1">NUMBER OF PATIENTS</span>
                <select name="filter" class="reportfilter">
                  <option value="Monthly">Monthly</option>
                  <option value="Yearly">Yearly</option>
                </select>
              <div class="reportchart">
                <canvas id="lineChart" style="width:800px; height: 300px; padding-top: 15px;"></canvas>
              </div>
        </div>
      
        <div class="tbl_report table-responsive">
          <table class="report-tbl">

            <tr>
              <th>ID</th>
              <th>Nurse Name</th>
              <th>Consultation</th>
              <th>Patients</th>
              <th>Status</th>
              <th>Date & Time</th>
            <tr><td colspan="6"></td></tr>
            </tr>

            <?php if(mysqli_num_rows($fetchAllReports) > 0) { 
                while ($reports = mysqli_fetch_assoc($fetchAllReports)) {  ?>


            <tr style="padding-bottom:1em;"> 
              <td><?=$reports['data_id']?></td>
              <td><?=$reports['nurse_name']?></td>
              <td><?=$reports['consultation']?></td>
              <td><?=$reports['patient_name']?></td>
              <td class="complete"><?=$reports['status']?></td>
              <td><?=$reports['date']?> - <?=$reports['time']?></td>
            <tr><td class="colsp" colspan="6"></td></tr>
            </tr>

            <?php } } ?>

           
          
          </table>
      </div>
          <div class="button_container">
            <button onClick="window.print()" class="reportbtn">Print</button>

          </div>
          <br><br>
      </section>


<!--#################################################################################################################################################################################################################################-->

      <!-- ARCHIVE PAGE -->
      <section id="archives" class="archives so_content" data-tab-content>  
        <div class="archives_header d-flex justify-content-between">
          <h3 class="m-0" style="color: white;">ARCHIVE</h3>
        </div>
        <div class="container" style="color: white;">
          <div class="filter_wrapper">
            <div class="sort flex-grow-1">
              <span>Sort by</span>
              <select name="filter" id="filter">
                <option value="">Select</option>
                <option name="filter" value="Type of User">Type of User</option>
                <option name="filter" value="Date of Archive">Date of Archive</option>
              </select>
            </div>
            <div class="r">
              <div class="search">
              <input type="text" name="search" placeholder="&#xF002; Search Archive" style="font-family:Arial, FontAwesome">
              </div>
              <div class="scan">
                <button>Scan QR</button>
              </div>
            </div>
          </div>

          <h3 class="hh">Recent</h3>  
          <div class="archives-content table-responsive">
            <table class="archives-table">
                <tr>
                  <!--   -->
                  <th>Unique ID</th>
                  <th>Type of User</th>
                  <th>Date of Archive</th>
                  <!-- <th>Reason</th>
                  <th>Date</th> -->
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/badang.JPG"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/nurse.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>
                
                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>

                <tr class="archives-info">
                  <td><img src="./assets/biogesic.jpg"></td>
                  <td>15-2323</td>
                  <td>Analos, Miguel Santos</td>
                  <td>Student</td>
                  <td>Graudated</td>
                  <td>July 29,2019</td>
                </tr>
            </table>
          </div>
        </div>
      </section>
<!-- E N D  A R C H I V E -->


<!-- #################################################################################################################################################################################################################################-->

      <!-- ENTRANCE LOG PAGE -->


      <section id="entrancelog" class="entrancelog so_content" data-tab-content>
          <div class="entrancelog_header d-flex justify-content-between">
            <h3 class="m-0">ENTRANCE LOG</h3>
              <!-- <button class="custom_btn">
						    <a href="#addMedicineModal" class="custom_btn" data-toggle="modal"><i class="fa fa-user-md"></i>Add Medicine</a>
              </button> -->
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

                $('#delAdminInfo').modal('show');

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


                $('#update_id').val(data[0]);
                $('#emp_id').val(data[1]);
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

    
  </body>

<!-- CUSTOM AJAX FILE -->
<script src="./ajax/search_admin.js"> </script>
<script src="./ajax/search_nurse.js"> </script>

</html>


<?php 
// LOGOUT
}else{
     header("Location: index.php");
     exit();
}
 ?>