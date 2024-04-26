<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobileno=$_POST['mobileno'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Email already exists
        $email_error = "email already exists";  
    } 

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
    // $sql = "INSERT INTO registration (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    $sql = "INSERT INTO registration (username, email,mobileno, password) VALUES ('$username', '$email','$mobileno', '$password')";
    if ($con->query($sql) === TRUE) {
        // echo "New record created successfully";
        $submit_msg="sign up successfully";
        // header("Location: registration.php?submit_msg=Password does'nt match.");
        // header("Location: homepage.html");
    } else {
        // echo "Error: " . $sql . "<br>" . $con->error;
         $submit_errormsg="invalid input";
    }
  }
  
    $con->close();
}
?>
