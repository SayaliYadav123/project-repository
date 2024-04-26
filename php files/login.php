<?php
// session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Protect against SQL injection
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM  registration WHERE username='$username' AND password ='$password'";
$result = $con->query($sql);


if ($result->num_rows == 1) {
   
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username; 
    header("Location: homepage.php");
    exit();
} 
else {
    
    $_SESSION['loggedin'] = false;
    $login_msgerror="invalid username and password";
}


$con->close();
// header("Location: homepage.php");
}

?>
