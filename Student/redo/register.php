<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../assets/favcon.png" type="image/x-icon">
   <link rel="stylesheet" href="./css/register.css">
   <title> Regiter your Email | QCU CMS </title>
</head>
<body>

   <header>

      <div class="img-handler">
         <img src="../clinic-logo.png" alt="">
      </div>

      <div class="qcu-title">
         <h1> Welcome to Quezon City University Clinic </h1>
      </div>

   </header>
   
   <main>
      <form action="../process/check_email.php" method="POST">
         <div class="form-input">
            <label for="email"> Enter your school email </label>
            <input type="email" name="email" id="email" placeholder="juan.delacruz@gmail.com"> 
         </div>

         <div class="form-button">
            
            <input type="submit" name="reg-btn" value="Register Email" />

            <a href="./student-login.php"> Back </a>
         </div>
      </form>
   </main>
</body>
</html>