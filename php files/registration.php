<?php include('reg_phpcoding.php') ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
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
    <form action="registration.php" method="post" autocomplete="off">
        <div class="form">
            <h2>Registration Form </h2>
            <input type="name" name="username" placeholder="Enter  username">
            <input type="email" name="email" placeholder="Enter Email">
            <?php if (isset($email_error)): ?>
                <span style="color: white;"><?php echo $email_error; ?></span>
          <?php endif ?>
          <input type="mobileno" name="mobileno" placeholder="Enter mobile no">
            <input type="password" name="password" placeholder="Create Password">
            <?php if (isset($password_error)): ?>
                <span style="color: white;"><?php echo $password_error; ?></span>
          <?php endif ?>
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <?php if (isset($conpassword_error)): ?>
                <span style="color: white;"><?php echo $conpassword_error; ?></span>
          <?php endif ?>
            <button class="btnn">
                <a href="#">
                    Register
                </a>
            </button><br>
            <?php if (isset($submit_msg)): ?>
        <span style="color: white;"><?php header("Location:homepage.php"); ?></span>
      <?php endif ?>
      <?php if (isset($submit_errormsg)): ?>
        <span style="color: white;"><?php echo $submit_errormsg; ?></span>
      <?php endif ?>
            <p class="link">Already have an account?<br>
                <a href="SeparateLogin.php">Log In</a> here</a>
            </p>

        </div>
    </form>



    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>