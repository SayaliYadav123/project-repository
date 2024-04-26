<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cat breeds.css">
</head>
<body>
    <div class="navbar">
        <div class="icon">
            <h2 class="logo"></h2>
            <div class="content">
                <h1> 
                    PAW
                     <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
                    <span >sitive</span>ALLY
                </h1>
                </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="contactUs.php">CONTACT</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <!-- <button onclick="goBack()">Go Back</button> -->
            </ul>
        </div>
        </div>
        <hr>
        <h1 id="head" >Cats in Our Shelter</h1><br>        
    <div class="cats">
    <?php
include 'connect.php'; // Include the database connection file

// Fetching data from the database
$sql = "SELECT * FROM cat_prov ORDER BY id"; // Selecting all entries from the pet_donations table ordered by pet_id
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $petName = $row["pet_breed"];
        $id = $row["id"];
        $petImage = $row["pet_image"];
        $petDescription = $row["pet_description"];
        $pet_age= $row["pet_age"];
       
        //$petPrice = rand(2000, 20000); // Generating random price between 2000 and 20000
        $petPrice=$row["price"];
        // Outputting HTML content with fetched data for each pet donation
        echo '<div class="cat">';

        echo '<h1 id="l">' . $petName . '</h1>';
       
        
        echo '<img src="' . $petImage . '" alt="' . $petName . '">';
        echo '<h2>Description</h2>';
        echo '<p>' . $petDescription . '</p>';
        echo '<h2>Key Features</h2>';
        echo '<li>Energetic,attractive.active</li>'; // Key features can be fixed or fetched from the database
        echo '<h2>Age</h2>';
        echo '<li>' . $pet_age. '</li>'; // Lifespan can be fixed or fetched from the database
        echo '<h2>Price :</h2>';
        echo '<h3>' . $petPrice . '</h3>';
        echo '<button class="cn" data-cat-id="' . $id . '"><a href="#"><b>ADOPT</b></a></button>';
        echo '</div>';
    }
} else {
    echo "No pet donations found.";
}

$con->close();
?>
    </div>
    <section class="contact-info">
        <h2>Contact Information</h2>
        <address>
            PAWsitiveALLY<br><br>
            123 Main Street<br><br>
            Karad,415110<br><br>
            Phone: <a href="tel:1234567890">123-456-7890</a><br><br>
            Email: <a href="mailto:info@example.com">pawsitiveallyinfo@example.com</a><br>
        </address>
    </section>
    <!-- Footer section -->
    <footer>
        <p>© 2023 Your Company. All rights reserved.</p>
    </footer>
    <script>
        const buttons = document.querySelectorAll(".cn");
    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Get the parent cat element
            const catElement = button.closest('.cat');
            // Get the cat details
            const catName = catElement.querySelector('h1').innerText;
            const catPrice = catElement.querySelector('h3').innerText;
            const catId = button.dataset.catId; // Get the cat ID
            // Encode the cat details for URL
            const encodedCatName = encodeURIComponent(catName);
            const encodedCatPrice = encodeURIComponent(catPrice);
            const encodedCatId = encodeURIComponent(catId);
            // Navigate to the payment page with cat details as URL parameters
            location.href = `catpayment.php?name=${encodedCatName}&price=${encodedCatPrice}&id=${encodedCatId}`;
        });
    });

    function goBack() {
        history.go(-1);
    }
    </script>

</body>
</html>
