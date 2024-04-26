<?php
// Form submission
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($con->query($sql) === TRUE) {
        
        $submit_msg="msg submitted successfully";
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        
        $submit_error="can't submitted";
    }
}

// Admin interface to view messages
// $sql = "SELECT * FROM messages";
// $result = $con->query($sql);
?>

