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
    <title>SMRMS | ADMIN | Medicines</title>

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
                  <li  class="px-4 w-100 mb-1 nav-item active tab py-1">
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


  
<!--#################################################################################################################################################################################################################################-->

        <!-- MEDICINES -->
            <section id="medicine" class="medicine so_content so_active" data-tab-content>
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
                        <option value="">All</option> 
                        <!-- <option value="date_manufactured">Date Manufactured</option> -->
                        <option value="expirationDate">Expiration Date</option>
                        <option value="num_stocks">Stocks</option>
                        </select>
                    </div>
                    <div class="r">
                        <div class="search">
                        <input type="text" name="search" id="search_meds" placeholder="&#xF002; Search Medicine" style="font-family:Poppins, FontAwesome">
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
                                <td class="mdc-brand"><b>Brand:</b> <?=$med['brand']?></td>
                                <tr>
                                <td><?=$med['prod_id']?></td>
                                </table>
                            </td>
                        
                            <td style="text-align:justify;text-justify:inter-word;width:400px;">
                                <span class="mdc-stock">Desctiption: </span>
                                <span class="mdc-qty"><?=$med['description']?></span>
                            </td>
                                
                    
                            
                            <td style="width:370px;">
                            <!-- <b>Expiration Date:</b> <?=$med['expirationDate']?> -->
                                <table>
                                <td class="b1"><b>Expiration Date:</b> <?=$med['expirationDate']?></td>
                                <tr>
                                <td><b>Stocks:</b> <?=$med['num_stocks']?></td>
                                </table>
                            </td>

                            
                            <td style="width:200px;"><img src="./assets/<?=$med['prod_qrcode']?>" width="150px" height="130px"> </td>
                            

                            <td><a href="#editMedInfo" class="custom_btn editmedbtn" data-bs-toggle="modal"><i class="fa fa-edit" id="edit" aria-hidden="true" style="color: #3e64ff; font-size: 30px"></i></a></td>

                            <td><a href="#delMed" class="custom_btn deletemedbtn" data-bs-toggle="modal"><i class="fa fa-trash" id="delete" aria-hidden="true" style="color: #ED1C24; font-size: 30px"></i></a></td>
                            
                
                            </tr>
                            </tbody>
                            </table>
                            </div>
                    </label>
                
                </li>



                <?php } } ?>
              </ul>
            </div>

        </section>

<!-- ############################################################################################################################################################################################################## -->

        <!-- Add New Medicine Modal -->
          <div id="addMedicineModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="post" action="./crud/insert_medicine.php">
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
