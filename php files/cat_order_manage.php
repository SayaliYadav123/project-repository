<?php
include 'connect.php';

// Fetch orders from the database
$sql = "SELECT * FROM adopt_orders";
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
    </style>
</head>
<body>
    <h1>Admin - Manage Orders</h1>
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
                <th>Cat ID</th>
                <th>Cat Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'cat_update_order_status.php';
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row["orderId"]. "</td>";
                    echo "<td>". $row["userName"]. "</td>";
                    echo "<td>". $row["userEmail"]. "</td>";
                    echo "<td>". $row["shippingAddress"]. "</td>";
                    echo "<td>". $row["permanentAddress"]. "</td>";
                    echo "<td>". $row["created_at"]. "</td>";
                    echo "<td>". $row["city"]. "</td>";
                    echo "<td>". $row["pincode"]. "</td>";
                    echo "<td>". $row["catId"]. "</td>";
                    echo "<td>". $row["catName"]. "</td>";
                    echo "<td>". $row["catPrice"]. "</td>";
                    echo "<td>". $row["status"]. "</td>"; // Display current status
                    echo "<td><form action='' method='post'>";
                    echo "<input type='hidden' name='orderId' value='" . $row["orderId"] . "'>";
                    echo "<select name='new_status'>";
                    echo "<option value='Pending'>Pending</option>";
                    echo "<option value='Processing'>Processing</option>";
                    echo "<option value='Shipped'>Shipped</option>";
                    echo "<option value='Delivered'>Delivered</option>";
                    echo "</select>";
                    echo "<input type='submit' name='update_status' value='Update'>";
                    echo "</form></td>";
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

