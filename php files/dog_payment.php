<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"] {
    width: calc(100% - 12px);
    padding: 8px; /* Increased padding for better readability */
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-bottom: 15px; /* Increased margin for better spacing */
}

input[type="submit"] {
    background-color: #6cbdbd; /* Turquoise button color */
    color: white;
    padding: 12px 24px; /* Larger button size */
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth hover transition */
}

input[type="submit"]:hover {
    background-color: #4a9a9a; /* Darker turquoise on hover */
}

#userDetails, #paymentDetails {
    margin-bottom: 20px;
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
    <form action="dog_paymentdataconnect.php" method="post" onsubmit="return setCatDetails()">>
        <div class="container">
            <h1>Order Details</h1>
            <div id="userDetails">
                <h2>User Details</h2>
                <label for="userName">Name:</label>
                <input type="text" id="userName" name="userName">
                <label for="userEmail">Email:</label>
                <input type="text" id="userEmail" name="userEmail">
                <label for="shippingAddress">Shipping Address:</label>
                <input type="text" id="shippingAddress" name="shippingAddress">
                <label for="permanentAddress">Permanent Address:</label>
                <input type="text" id="permanentAddress" name="permanentAddress">
                <label for="city">City:</label>
                <input type="text" id="city" name="city">
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode">
            </div>
            <div id="paymentDetails">
                <h2>Dog Details</h2>
                <div class="detail">
                    <strong>Dog ID:</strong>
                     <span id="dogId" name="dogId"></span>
                     <input type="hidden" name="dogId" id="dogIdInput">
                   
                    
                </div>
                <div class="detail">
                    <strong>Dog Name:</strong><span id="dogName" name="dogName"></span>
                    <input type="hidden"  name="dogName" id="dogNameInput">
                   
                </div>
                <div class="detail">
                    <strong>Price:</strong>
                     <span id="dogPrice" name="dogPrice"></span>
                    <input type="hidden"  name="dogPrice" id="dogPriceInput">
                   
                </div>
            </div>
            <input type="submit" name="submit" value="Place Order">
            <?php if (isset($order_msg)): ?>
                <span style="color: white;"><?php echo $order_msg; ?></span>
          <?php endif ?>
        </div>
    
    </form>
    <script>
    
        const urlParams = new URLSearchParams(window.location.search);
        const dogName = urlParams.get('name');
        const dogPrice = urlParams.get('price');
        const dogId = urlParams.get('id');

        const decodedDogName = decodeURIComponent(dogName);
        const decodedDogPrice = decodeURIComponent(dogPrice);
        const decodedDogId = decodeURIComponent(dogId);

        document.getElementById('dogId').innerText = decodedDogId;
        document.getElementById('dogName').innerText = decodedDogName;
        document.getElementById('dogPrice').innerText = decodedDogPrice;

        document.getElementById('dogIdInput').value = decodedDogId;
    document.getElementById('dogNameInput').value = decodedDogName;
    document.getElementById('dogPriceInput').value = decodedDogPrice;
   
</script>
   
</body>
</html>
