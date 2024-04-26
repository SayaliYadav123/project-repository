<?php
// Establish database connection (replace with your database credentials)
include 'connect.php';

// If form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $shippingAddress = $_POST['shippingAddress'];
    $permanentAddress = $_POST['permanentAddress'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $dogId = $_POST['dogId'];
    $dogName = $_POST['dogName'];
    $dogPrice = $_POST['dogPrice'];

   


    // Insert user and payment details into database (replace with your table name)
    $sql = "INSERT INTO dog_adopt_orders (userName, userEmail, shippingAddress, permanentAddress, city, pincode, dogId, dogName, dogPrice)
            VALUES ('$userName', '$userEmail', '$shippingAddress', '$permanentAddress', '$city', '$pincode', '$dogId', '$dogName', '$dogPrice')";

    if ($con->query($sql) === TRUE) {
        // echo "Order placed successfully!";
        $adopted_pet_id=$_POST['dogId'];
        $sql_delete="DELETE FROM dog_prov where id=$adopted_pet_id";
        if($con->query($sql_delete)==TRUE){
            echo "deleted successfully";
            
        }
        else{
            echo "error";
        }
        header("Location: dog_confirm_order.php?userName=$userName&userEmail=$userEmail&shippingAddress=$shippingAddress&permanentAddress=$permanentAddress&city=$city&pincode=$pincode&dogId=$dogId&dogName=$dogName&dogPrice=$dogPrice");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$con->close();
?>
