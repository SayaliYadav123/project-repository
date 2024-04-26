<?php
include 'connect.php';

// Initialize variables for search
$searchId = $_POST["searchId"] ?? "";
$searchDate = $_POST["searchDate"] ?? "";
$sql = "SELECT * FROM dog_adopt_orders WHERE 1=1";
// Check if search form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchId = $_POST["searchId"] ?? "";
$searchDate = $_POST["searchDate"] ?? "";

    // Modify SQL query based on search criteria
    
    if (!empty($searchId)) {
        $sql .= " AND order_id = '$searchId'";
    }
    if (!empty($searchDate)) {
        $sql .= " AND DATE(created_at) = '$searchDate'";
    }
} 


// Fetch orders from the database based on search criteria
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Orders</title>
    <style>
       table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            margin-right: 10px;
        }
        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Orders(Dogs) details</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="searchId">Search by Order ID:</label>
        <input type="text" id="searchId" name="searchId" value="<?php echo $searchId; ?>">
        <label for="searchDate">Search by Date:</label>
        <input type="date" id="searchDate" name="searchDate" value="<?php echo $searchDate; ?>">
        <input type="submit" value="Search">
    </form>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Shipping Address</th>
                <th>Permanent Address</th>
                <th>ordered date</th>
                <th>City</th>
                <th>Pincode</th>
                <th>Dog ID</th>
                <th>Dog Name</th>
                <th>Price</th>
                <th>Status</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'dog_update_php_code.php';
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row["order_id"]. "</td>";
                    echo "<td>". $row["userName"]. "</td>";
                    echo "<td>". $row["userEmail"]. "</td>";
                    echo "<td>". $row["shippingAddress"]. "</td>";
                    echo "<td>". $row["permanentAddress"]. "</td>";
                    echo "<td>". $row["created_at"]. "</td>";
                    echo "<td>". $row["city"]. "</td>";
                    echo "<td>". $row["pincode"]. "</td>";
                    echo "<td>". $row["dogId"]. "</td>";
                    echo "<td>". $row["dogName"]. "</td>";
                    echo "<td>". $row["dogPrice"]. "</td>";
                    echo "<td>". $row["status"]. "</td>"; // Display current status
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No orders found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

