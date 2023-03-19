<?php
    include_once 'db_conn.php';
    $success  = "";
    if(isset($_POST['addmed']))
    {	 
        $box_id  = $_POST['box_id'];
        $prod_id  = $_POST['prod_id'];
        $name  = $_POST['name'];
        $brand = $_POST['brand'];
        $genericName   = $_POST['genericName'];
        $image  = $_POST['image'];
        $prescribed_for  = $_POST['prescribed_for'];
        $num_stocks  = $_POST['num_stocks'];
        $date_manufactured  = $_POST['date_manufactured'];
        $expirationDate  = $_POST['expirationDate'];
        $prodCondition  = $_POST['prodCondition'];
        $manufacturerName  = $_POST['manufacturerName'];
        $storage  = $_POST['storage'];
        $contact_info  = $_POST['contact_info'];
        $description  = $_POST['description'];
        $prod_qrcode  = $_POST['prod_qrcode'];
       
        
        $sql = "INSERT INTO `medicine` (box_id,prod_id,name,brand,genericName,image,prescribed_for,num_stocks,date_manufactured,expirationDate,prodCondition,manufacturerName,storage,contact_info,description,prod_qrcode)
        VALUES ('$box_id','$prod_id','$name','$brand','$genericName','$image','$prescribed_for','$num_stocks','$date_manufactured','$expirationDate','$prodCondition','$manufacturerName','$storage','$contact_info','$description','$prod_qrcode')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";

            header("Location:nurseDashboard.php?mess=update success");
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>