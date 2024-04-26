
<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donate Pet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            height: auto;
        }
        form {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<h1>Cats Details</h1>
    <form method="post">
    
        <label for="searchId">Search by ID:</label>
        <input type="text" id="searchId" name="searchId" value="<?php echo isset($_POST['searchId']) ? $_POST['searchId'] : ''; ?>">
        <input type="submit" value="Search" name="submitSearch">
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pet Breed</th>
                <th>Pet Description</th>
                <th>Pet Price</th>
                <th>Pet Age</th>
                <th>Pet Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST["submitSearch"])) {
                $searchId = $_POST["searchId"];

                $sql = "SELECT id, pet_breed, pet_description, price,  pet_age, pet_image FROM cat_prov WHERE id = '$searchId'";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['pet_breed'] . "</td>";
                        echo "<td>" . $row['pet_description'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['pet_age'] . "</td>";
                        echo "<td><img src='" . $row['pet_image'] . "' height='100'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No records found</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>

   

</body>
</html>
