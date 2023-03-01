<?php
include '../database/connection.php';

$sqltotal = "SELECT COUNT(*) as count FROM entrance_log where date(timein)=CURRENT_DATE()";
$result = mysqli_query($conn, $sqltotal);
$count = mysqli_fetch_assoc($result);
$total = $count['count'];

$sqlverfied = "SELECT COUNT(*) as count FROM entrance_log where status = 'Verified' AND date(timein)=CURRENT_DATE()";
$result1 = mysqli_query($conn, $sqlverfied);
$count1 = mysqli_fetch_assoc($result1);
$verified =$count1['count'];

$sqlnotverified = "SELECT COUNT(*) as count FROM entrance_log where status = 'Not Verified' AND date(timein)=CURRENT_DATE()";
$result1 = mysqli_query($conn, $sqlnotverified);
$count1 = mysqli_fetch_assoc($result1);
$notverified =$count1['count'];

$sqinvalid = "SELECT COUNT(*) as count FROM entrance_log where status = 'Invalid' AND date(timein)=CURRENT_DATE()";
$result1 = mysqli_query($conn, $sqinvalid);
$count1 = mysqli_fetch_assoc($result1);
$invalid =$count1['count'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Entrance Page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="ent-das-style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="header-name">
                <!-- <img src="/Admin/assets/QCU_Logo.png" alt=""> -->
                <h3>Welcome to Quezon City University</h3>
            </div>
            <div class="time">
               <h3>Jan 1, 2023 Sunday | 0:00</h3>
            </div>
        </div>

       <div class="main-container">
         <div class="subcontainer">
           <div class="numerical">
            <ul>
              <li id="total">Total <br><?php echo $total;?></li>
              <li id="verified">Verified <br><?php echo $verified;?></li>
              <li id="problem">Not Verified <br> <?php echo $notverified?></li>
              <li id="visitor">Visitor <br> 0</li>
              <li id="invalid">Invalid <br> <?php echo $invalid;?></li>
            </ul>
           </div>

           <div class="video">
            <video id="preview" width="100%"></video>
           </div>
           <div class="form-scan">
                <form action="validation.php" method="post">
                    <input type="text" name="text" id="student_id"  placeholder="Student Number" class="form-control class" method="get" >
                </form>
            </div>

            <div class="notification">
              <table>
                <tbody>
                  <tr>
                    <?php
                      $sql ="SELECT id,student_number,lastname,firstname,middlename,Section FROM entrance_log where date(timein)=CURRENT_DATE() AND STATUS = 'Not Verified' ORDER BY id DESC";
                      
                      $query = $conn->query($sql);


                      
                      while ($row = $query->fetch_assoc()){
                        // $x = $row['id'] - 1; 
                
                    ?>
                        <tr>
                          <td><?php echo $row['student_number']?></td>
                          <td><?php echo $row['lastname'].', '.$row['firstname'].' '.$row['middlename']?></td>
                          <td><?php echo $row['Section']?></td>
                          <td>Medical Certificate</td>
                          <td>
                            <form action="update-status.php" method="post">
                              <input type="submit" name="toverify" value="Verified">
                              <input type="submit" name="tonotverifiy" value="Not Verified">
                            </form>
                          </td>
                  </tr>
                  <?php
                }
               
               
                // $abc = $row['student_number'];
                // $changestatus = "UPDATE entrance_log SET status='Verified WHERE student_number = $abc;"
                 
              ?>
                </tbody>
              </table>
           </div>
         </div>

         <div class="table">
            <table>
              <thead>
                <tr>
                  <td>Student No.</td>
                  <td>Name</td>
                  <td>Year Level</td>
                  <td>Section</td>
                  <td>Time-in</td>
                </tr>
              </thead>
              <tbody>
              <?php
                $sql ="SELECT id,student_number,lastname,firstname,middlename,yearlevel, Section,timein FROM entrance_log where date(timein)=CURRENT_DATE() AND STATUS = 'Verified' ORDER BY id DESC";
                $query = $conn->query($sql);
                
                while ($row = $query->fetch_assoc()){
                  // $x = $row['id'] - 1;
                  ?>
                  <tr>
                    <td><?php echo $row['student_number']?></td>
                    <td><?php echo $row['lastname'].', '.$row['firstname'].' '.$row['middlename']?></td>
                    <td><?php echo $row['yearlevel']?></td>
                    <td><?php echo $row['Section']?></td>
                    <td><?php echo $row['timein']?></td>
                  </tr>
                  <?php
                }
              ?>
            </tbody>
            </table>
         </div>
       </div>

       <script>
        let scanner = new Instascan.Scanner({ video:document.getElementById('preview'), scanPeriod: 10});
        Instascan.Camera.getCameras().then(function(cameras){
          if(cameras.length > 0){
            scanner.start(cameras[0]);
          }else{
            alert("No cameras found!");
          }
        }).catch(function(e){
          console.error(e);
        });
  
        scanner.addListener('scan',function(c){
          document.getElementById('student_id') .value=c;
          document.forms[0].submit();
        });
      </script>
    </body>
</html>