<?php
// Connect to your database
include 'connect.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['update_status'])) 
 {
    $orderId = $_POST['orderId'];
    $new_status = $_POST['new_status'];

    // Update order status in the database
    $sql = "UPDATE adopt_orders SET status='$new_status' WHERE orderId=$orderId";

    if ($con->query($sql) === TRUE) {
        // echo "Order status updated successfully";
    } else {
        echo "Error updating order status: " . $con->error;
    }
}

// Close database connection
$con->close();
?>
