<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"></h2>
            </div>
            <div class="menu">
                <ul>
                    </li>
                    <li><a href="disease.php">DISEASE</a></li>
                    <li><a href="adoptionhomepage.php">ADOPT</a></li>
                    <li><a href="ContactUs.php">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                     <li><a href="report.php">REPORT</a></li>                    
                     <?php
                        session_start();
                        if(isset($_SESSION['loggedin'])) {
                            echo '<li><a href="logout.php">LOGOUT</a></li>';
                        } else {
                            echo '<li><a href="SeparateLogin.php">LOGIN</a></li>';
                        }
                    ?>                      
                        <a href="adminLogIn.php" class="search"> <button class="btn">ADMIN LOGIN</button></a>
                        <!-- <a href="SeparateLogin.php"> <button class="btn">User LOGIN</button></a> -->
                   
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>
                PAW
                <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
                <span>sitive</span>ALLY
            </h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
                expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
                <br> a quae totam ipsa illum minus laudantium?
            </p>
            <button class="cn"><a href="#">JOIN US</a></button>           
        </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>