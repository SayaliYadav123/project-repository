<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
$adminname = $_POST['adminname'];
$password = $_POST['password'];

// Protect against SQL injection
$adminname = mysqli_real_escape_string($con, $adminname);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM  adregistration WHERE adminname='$adminname' AND password ='$password'";
$result = $con->query($sql);


if ($result->num_rows == 1) {

    $login_msg="login successfully";
   
} else {
    $login_msgerror="invalid adminname and password";
    echo "hih";
}

$con->close();

}
?>