<?php
    include('db_conn.php');

    if(isset($_POST['student_info'])){
      $student_id = $_POST['id'];
      $sql = 'SELECT * FROM `stud_data` WHERE student_id = '.$student_id.'';
      $run_query = mysqli_query($conn,$sql);
      if(mysqli_num_rows($run_query) > 0){
        while ($row = mysqli_fetch_array($run_query)) {
            echo'<h2> Patient List > '.$row['lastname'].'</h2>';
        }
      }
    }


  ?>