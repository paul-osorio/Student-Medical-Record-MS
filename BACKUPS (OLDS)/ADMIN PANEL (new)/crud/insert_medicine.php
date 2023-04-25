<?php
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    
    $db_name = "clinicms_db";
    
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    $success  = "";
    if(isset($_POST['addmed']))
    {	 
        $prod_id  = $_POST['prod_id'];
        // $box_id  = $_POST['box_id'];
        $name = $_POST['name'];
        $brand   = $_POST['brand'];
        // $genericName  = $_POST['genericName'];
        $image  = $_POST['image'];
        $num_stocks  = $_POST['num_stocks'];
        // $date_manufactured  = $_POST['date_manufactured'];
        $expirationDate  = $_POST['expirationDate'];
        // $prodCondition  = $_POST['prodCondition'];
        // $manufacturerName  = $_POST['manufacturerName'];
        // $storage  = $_POST['storage'];
        // $contact_info  = $_POST['contact_info'];
        $description  = $_POST['description'];
        $prod_qrcode  = $_POST['prod_qrcode'];
        
        // $sql = "INSERT INTO medicine (prod_id,box_id,name,brand,genericName,image,num_stocks,date_manufactured,expirationDate,prodCondition,manufacturerName,storage,contact_info,description)
        // VALUES ('$prod_id','$box_id','$name','$brand','$genericName','$image','$num_stocks','$date_manufactured','$expirationDate','$prodCondition','$manufacturerName','$storage','$contact_info','$description')";
        $sql = "INSERT INTO medicine (prod_id,name,brand,image,num_stocks,expirationDate,description,prod_qrcode)
        VALUES ('$prod_id','$name','$brand','$image','$num_stocks','$expirationDate','$description','$prod_qrcode')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
            header("Location: ../medicines.php");
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>