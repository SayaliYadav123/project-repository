<?php
include 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SeparateLogin.css">
    <title>Document</title>
</head>
<body>
    
   <div class="content">
    <div class="icon">
        <h2 class="logo"></h2>
    </div>
    <h1>
    PAW<span>
    <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
    sitive</span>ALLY</h1>
   </div>
   
       <form action="SeparateLogin.php" method="post" autocomplete="off">
        <div class="form">
            <h2>Log In </h2>
            <input type="name" name="username" placeholder="Enter User Name">
            <input type="password" name="password" placeholder="Enter Password">
            
            <button class="btnn"><a href="#">Log In</a></button>
            
     
           <?php if (isset($login_msg)): ?>
                <span style="color: white;"><?php echo "<script>window.history.back();</script>";; ?></span>
          <?php endif ?> 
          <?php if (isset($login_msgerror)): ?>
                <span style="color: white;"><?php echo $login_msgerror; ?></span>
          <?php endif ?>
            <p class="link">Don't have an account?<br>
                <a href="registration.php">Sign Up</a> here</a>
            </p>
            
        </div>
       </form>
      
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>