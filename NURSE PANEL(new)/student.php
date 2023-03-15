<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./css/patients.css"/>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="action.js" defer></script>

</head>
<body>
    <div class="container-fluid">
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
            <div class="col-md-2 p-0 position-relative" style="min-height:100vh;box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;background: #05285c;">
               <div class="w-100">
                <ul class="mt-4 list-unstyled navbar-nav ps-0 ">

                    <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                     <span class="fx-5 fw-800 text-light"><i class="fa fa-area-chart mx-2"></i><a>Home</a></span>
                    </li>
                    <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                     <span class="fx-5 fw-800 text-light"><i class="fa fa-users mx-2"></i><span>Students</span></span>
                    </li>
                    <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                     <span class="fx-5 fw-800 text-light"><i class="fa fa-plus-square mx-2"></i><span>Medical Reports</span></span> 
                    </li>
                    <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                        <span class="fx-5 fw-800 text-light"><i class="fa fa-building-o mx-2"></i><span>Departments</span></span>
                    </li>
                    <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                      <span class="fx-5 fw-800 text-light"><i class="fa fa-calendar mx-2" aria-hidden="true"></i><span>Appointments</span></span>
                    </li>
                    <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                     <span class="fx-5 fw-800 text-light"> <i class="fa fa-medkit mx-2" aria-hidden="true"></i><span>Medicines</span></span>
                    </li>
                    <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                      <span class="fx-5 fw-800 text-light"><i class="fa fa-book mx-2"></i><span>Reports</span></span>
                    </li>
                    <li  id="account_btn" class="px-4 w-100 mb-1 nav-item tab py-2">
                      <span class="fx-5 fw-800 text-light"><i class="fa fa-user-o mx-2" aria-hidden="true"></i><span> Account</span></span>
                    </li>
                  </ul>
               </div>
            </div>
              <div class="col-sm-10" id="student">
                  <div class="container-fluid py-3">
                      <div class="container-fluid bg-secondary-subtle d-flex justify-content-between align-items-center py-2 rounded-1">
                          <h3 class="fw-semibold m-0 p-0">STUDENTS</h3>
                          <div class="d-flex align-items-center">
                              <span>Sort by</span>
                              <input type="button" class="px-2 mx-2" value="Recent"> 
                            </div>
                            <div>
                              <div class="input-group form-input-sma">
                                  <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                                  <button class="btn bg-secondary fw-bold text-light" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
                                </div>
                            </div>
                      </div>
                      <div class="patient_table_details table-responsive mt-3" >
                          <table class="table table-hover table-striped text-center fw-semibold">  
                              <?php 
                                include 'db_conn.php';
                                $sql = "SELECT * FROM stud_data LIMIT 5";
                                $run_sql = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                if(mysqli_num_rows($run_sql) > 0){
                                  while ($row = mysqli_fetch_array($run_sql)) {
                                    echo '

                                    <tr>
                                    <td class="py-2 text-light" style="background-color: #163666;"><span>'.$row['student_id'].'</span></td>
                                    <td class="py-2"><span class="name">'.$row['firstname'].'</span></td>
                                    <td class="py-2"><span class="course">'.$row['Section'].'</span></td>
                                    <td class="py-2"><span class="email">'.$row['Email'].'</span></td>
                                    <td class="py-2"><button class="addpatient-btn px-2" style="background-color: #163666;" id="view"  data-id="'.$row['student_id'].'">View</button></td>
                                    <td class="py-2"><span class="name d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa fa-edit fs-4 mx-2" aria-hidden="true" style="color: #163666"></i></a>
                                    <a href="#addAdminModal" class="custom_btn" data-toggle="modal"><i class="fa fa-trash fs-4 mx-2" aria-hidden="true" style="color: #163666"></i></a>
                                    </span></td>
                                    </tr>

                                    ';
                                  }
                                }

                              ?>
                            
                          </table>
                      </div>
                  </div> 
              </div>
         
        </div>
    </div>
</body>
</html>