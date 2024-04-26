<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';session_start();
$providername = $_POST['providername'];
$password = $_POST['password'];
// Protect against SQL injection
$providername = mysqli_real_escape_string($con, $providername);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM  prov_registration WHERE providername='$providername' AND password ='$password'";
$result = $con->query($sql);


if ($result->num_rows == 1) {
    header("Location: provider_form.php"); 
} else {
    $login_msgerror="invalid providername and password";
    
}

$con->close();

}
?>
