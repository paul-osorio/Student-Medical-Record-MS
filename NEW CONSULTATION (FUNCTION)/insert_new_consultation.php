<?php
    include_once 'db_conn.php';
    $success  = "";
    if(isset($_POST['addnewconsult']))
    {	 
        $student_id  = $_POST['student_id'];
        $symptoms  = $_POST['symptoms'];
        $othersymptoms = $_POST['othersymptoms'];
        $body_temp   = $_POST['body_temp'];
        $suspected_covid  = $_POST['suspected_covid'];
        $tested_covid  = $_POST['tested_covid'];
        $confined  = $_POST['confined'];
        $how_long  = $_POST['how_long'];
        $medicine  = $_POST['medicine'];
        $referred  = $_POST['referred'];
        $hospital  = $_POST['hospital'];
        $hospital_add  = $_POST['hospital_add'];
        $reason  = $_POST['reason'];


        if(isset($_POST['symptoms'])) {
            $selectedSymptoms = implode('<br> - ', $_POST['symptoms']);
            echo $selectedSymptoms;
            
        }

        if(isset($_POST['othersymptoms'])) {
            $selOthersymptoms = implode('<br> - ', $_POST['othersymptoms']);
            echo $selOthersymptoms;
            
        }

        
        $sql = "INSERT INTO consultations (student_id,symptoms,othersymptoms,body_temp,suspected_covid,tested_covid,confined,how_long,medicine,referred,hospital,hospital_add,reason)
        VALUES ('$student_id','$selectedSymptoms','$selOthersymptoms','$body_temp','$suspected_covid','$tested_covid','$confined','$how_long','$medicine','$referred','$hospital','$hospital_add','$reason')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully!";
            header("Location:index.php?mess=New record success");
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
  <!-- $query_run = mysqli_query($conn, $query);
if($query_run)
        {
            echo '<script> alert("Data updated!"); </script>';
            // echo $unique_id;
            header("Location:adminDashboard.php?mess=update success");
        }
        else
        {
            echo '<script> alert("Data not updated!"); </script>';
        } -->