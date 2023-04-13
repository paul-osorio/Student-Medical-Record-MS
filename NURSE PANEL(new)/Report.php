<?php 
      include "db_conn.php";
      $result = mysqli_query($conn, "SELECT * FROM consultations");
      $row_count = mysqli_num_rows($result);
      

      
      $result = mysqli_query($conn, "SELECT * FROM appointments");
      $row_count1 = mysqli_num_rows($result);


      $result = mysqli_query($conn, "SELECT * FROM stud_medical_requirements");
      $row_count2 = mysqli_num_rows($result);
    ?>
      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/favcon.png"/>
    
    <title>Report | SMRMS | NURSE</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./css/patients.css"/>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="action.js" defer></script>

</head>
<body>
    <div class="container-fluid bg-light-subtle">
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
        <div class="row bg-light">
          <div class="col-md-2 p-0 position-relative" style="min-height:100vh;box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;background: #05285c;">
             <div class="w-100">
              <ul class="mt-4 list-unstyled navbar-nav ps-0 ">

                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                    <a href="dashboard.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-area-chart mx-2"></i><span>Home</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="student.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-users mx-2"></i><span>Students</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="Mreport.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-plus-square mx-2"></i><span>Medical Reports</span></span></a>
                  </li>
                 
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="appointment.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-calendar mx-2" aria-hidden="true"></i><span>Appointments</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item tab py-2">
                   <a href="medicines.php" class="nav-link"><span class="fx-5 fw-800 text-light"> <i class="fa fa-medkit mx-2" aria-hidden="true"></i><span>Medicines</span></span></a>
                  </li>
                  <li  class="px-4 w-100 mb-1 nav-item active tab py-2">
                    <a href="Report.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-book mx-2"></i><span>Reports</span></span></a>
                  </li>
                  <li  id="account_btn" class="px-4 w-100 mb-1 nav-item tab py-2">
                  <a href="account.php" class="nav-link"><span class="fx-5 fw-800 text-light"><i class="fa fa-user-o mx-2" aria-hidden="true"></i><span>Account</span></span></a>
                  </li>
                </ul>
             </div>
          </div>
            <div class="col-sm-10 p-3">    
              <div class="container-fluid">
                <div class="container-fluid bg-secondary-subtle py-2 rounded-1">
                    <span class="fw-bold fs-5 mx-3 text-uppercase">Summart Report</span>
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 bg-body-secondary p-2 rounded-2 mt-3">
                      
                 
                    <div class="d-flex position-relative justify-content-evenly gap-4 fw-bold p-1">
                            <div class="d-flex px-2 py-1 text-center align-items-center justify-content-center bg-light rounded-2 ">
                                <div class="d-grid">
                                <span><?php echo $row_count; ?></span>
                                <span>Consultations</span>
                                </div>
                            </div>


                            <div class="d-flex px-2 py-1 text-center align-items-center justify-content-center bg-light rounded-2 ">
                                
                              <div class="d-grid">
                              <span><?php echo $row_count1; ?></span>
                              <span>Appoinment</span>
                              </div>
                          </div>
                          <div class="d-flex px-2 py-1 text-center align-items-center justify-content-center bg-light rounded-2 " style="flex-basis:200px">
                                
                            <div class="d-grid">
                            <span><?php echo $row_count2; ?></span>
                            <span>Pending medical 
                              requirements</span>
                            </div>
                        </div>
                           <div class="flex-grow-1 d-flex align-items-center" style="justify-self: end;">
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <option selected>Select Date</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                           </div>
                        </div>
                    </div>
                    <div class="container-fluid" style="max-height: 500px;">
                        <canvas id="myChart" class="w-100"></canvas>
                    </div>

                        <!-- <a href="" class="nav-link"><div class="d-flex justify-content-evenly p-2 rounded-2 shadow mt-4">
                          <div><span></span></div>
                          <div><span></span></div>
                          <div><span></span></div>
                          <div><span></span></div>
                          <div><span>jessica.bulleque@gmail.com</span></div>
                          <div><span>Pending</span></div>
                          <div><span>Close</span></div>
                        </div></a> -->
                        <!-- header -->

                        <!-- header -->
                       
                        <div class="mt-3 shadow overflow-y-scroll" style="max-height:20rem;height: 20rem;">
                            <table class="table text-center table-borderless ">
                                <thead class="bg-body-secondary">
                                  <tr>
                                    <th scope="col">Student No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Reference No.</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <?php
                        include "db_conn.php";
                        $sql = "SELECT * FROM stud_appointment";
                        $run_sql = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                        if(mysqli_num_rows($run_sql) > 0){
                          while ($row = mysqli_fetch_array($run_sql)) {
  ?>
                                <tbody>
                                        <tr>     
                                          
                                            <!-- <td colspan="2"><img src="./assets/badang.JPG"  width="65" height="65" alt=""></td> -->
                                            <td><?php echo $row['student_id'] ?></td>
                                            <td>no data in db</td>
                                            <td><?php echo $row['app_reason'] ?></td>
                                            <td><?php echo $row['app_date'] ?></td>
                                            <td><?php echo $row['app_time'] ?></td>
                                            <td><?php echo $row['reference_no'] ?></td>
                                            <td class="text-danger"><?php echo $row['app_status'] ?></td>
                                        </tr>
                                        <?php }
                        }
                        
                        ?>                                   
                                     
                                </tbody>
                              </table>
                        </div>

                  </div>
    </div>
    <script>
     const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July','Aug','Sept','Oct','Nov','Dec'],
        datasets: [{
            label: 'Student',
            data: [0, 6,10,20],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)',
                'rgba(255, 99, 132)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
    </script>
</body>
</html>