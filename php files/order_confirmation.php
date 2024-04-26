<?php
include 'cat_paymentdataconnection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8; /* Light gray background */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff; /* White container background */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
            padding: 20px;
        }

        h1, h2 {
            margin: 0;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            margin: 10px 0;
        }

        .detail {
            margin-bottom: 15px; /* Increased margin for better spacing */
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

    </style>
</head>
<body>
<div class="navbar">
        <a href="homepage.php">Home</a>
        <a href="adoptioncategory.php">Adopt</a>
        <a href="ContactUs.php">Contact</a>
    </div>
    <div class="container">
        <h1>Order Confirmation</h1>
        <p>Thank you, <?php echo $_GET['userName']; ?>, for your order!</p>
        
        <h2>User Details</h2>
        <div class="detail">
            <strong>Name:</strong>
            <span><?php echo $_GET['userName']; ?></span>
        </div>
        <div class="detail">
            <strong>Email:</strong>
            <span><?php echo $_GET['userEmail']; ?></span>
        </div>
        <div class="detail">
            <strong>Shipping Address:</strong>
            <span><?php echo $_GET['shippingAddress']; ?></span>
        </div>
        <div class="detail">
            <strong>Permanent Address:</strong>
            <span><?php echo $_GET['permanentAddress']; ?></span>
        </div>
        <div class="detail">
            <strong>City:</strong>
            <span><?php echo $_GET['city']; ?></span>
        </div>
        <div class="detail">
            <strong>Pincode:</strong>
            <span><?php echo $_GET['pincode']; ?></span>
        </div>

        <h2>Cat Details</h2>
        <div class="detail">
            <strong>Cat ID:</strong>
            <span><?php echo $_GET['catId']; ?></span>
        </div>
        <div class="detail">
            <strong>Cat Name:</strong>
            <span><?php echo $_GET['catName']; ?></span>
        </div>
        <div class="detail">
            <strong>Price:</strong>
            <span><?php echo $_GET['catPrice']; ?></span>
        </div>
        
        <p>An email with further details has been sent to your registered email address.</p>
    </div>
</body>
</html>
