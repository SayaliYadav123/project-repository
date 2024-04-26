<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'connect.php';
    $providername = $_POST['providername'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $stmt = $con->prepare("SELECT * FROM prov_registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        $email_error = "email already exists";  
    } 
    // if (mysqli_num_rows($res_u) > 0) {
    //     $email_error = "email already exists";  
    // } 

    // Validate password length
    else if (strlen($password) < 6) {
        // header("Location: registration.php?password_error=Enter at least 6 characters.");
        $password_error = "enter at least 6 characters";      
        // exit;
    }

    // Ensure password and confirm password match
    else if ($password != $confirm_password) {
        // header("Location: registration.php?conpassword_error=Password does'nt match.");
        // echo"Password not match";
        $conpassword_error = "password doesnt match";      
        // exit;
    }
  else{
    // Hash the password before saving it
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO prov_registration (providername, email, password) VALUES ('$providername', '$email', '$confirm_password')";
    
    if ($con->query($sql) === TRUE) {
        // echo "New record created successfully";
        $regis_success="sign up successfully";
        // header("Location: registration.php?submit_msg=Password does'nt match.");
        header("Location: homepage.php");
    } else {
        // echo "Error: " . $sql . "<br>" . $con->error;
         $regis_error="invalid input";
    }
  }
    $con->close();
}
?>

