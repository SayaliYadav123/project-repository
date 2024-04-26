<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login History</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>User Registration History</h2>
    <!-- Search Form -->
    <form method="get">
        <label for="date">Search by Date:</label>
        <input type="date" id="date" name="date" value="<?php echo isset($_GET['date']) ? htmlspecialchars($_GET['date']) : ''; ?>">
        <label for="Id">Search by User ID:</label>
        <input type="text" id="Id" name="Id" value="<?php echo isset($_GET['Id']) ? htmlspecialchars($_GET['Id']) : ''; ?>" >
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Register Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include database connection file
            include 'connect.php';

            // Query to fetch login history
            $query = "SELECT * FROM registration";

            // Add conditions for search
            if (isset($_GET['date']) && !empty($_GET['date'])) {
                $search_date = $_GET['date'];
                $query .= " WHERE DATE(date) = '$search_date'";
            }

            if (isset($_GET['Id']) && !empty($_GET['Id'])) {
                $user_id = $_GET['Id'];
                // $query .= " AND id = '$user_id'";
                if (strpos($query, 'WHERE') !== false) {
                    $query .= " AND Id = '$user_id'";
                } else {
                    // If WHERE clause doesn't exist, add it
                    $query .= " WHERE Id = '$user_id'";
                }
            }

            $result = mysqli_query($con, $query);

            // Check if there are any records
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['Id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No login history found</td></tr>";
            }

            // Close database connection
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</body>

</html>
