<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dog breed.css">
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
                <li><a href="disease.html">DISEASE</a></li>
                <!-- <li><a href="#">SHOP</a></li> -->
                <li><a href="ContactUs.php">CONTACT</a></li>
            </ul>
        </div>
        </div>
        <hr>
        <h1 id="head" >Dogs in Our Shelter</h1><br>
        
    <div class="dogs">
    <?php
include 'connect.php'; // Include the database connection file

// Fetching data from the database
$sql = "SELECT * FROM dog_prov ORDER BY id"; // Selecting all entries from the pet_donations table ordered by pet_id
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $petName = $row["pet_breed"];
        $id = $row["id"];
        $petImage = $row["pet_image"];
        $petDescription = $row["pet_description"];
        $petAge = $row["pet_age"];
        $petPrice = $row["price"];// Generating random price between 2000 and 20000
       
        // Outputting HTML content with fetched data for each pet donation
    //     echo '<div class="dog">';

    //     echo '<h1 id="l">' . $petName . '</h1>';
       
        
    //     echo '<img src="' . $petImage . '" alt="' . $petName . '">';
    //     echo '<h2>Desription</h2>';
    //     echo '<p>' . $petDescription . '</p>';
    //    echo '<h2>Key Features</h2>';
    //     echo '<li>' . $features . '</li>'; // Key features can be fixed or fetched from the database
    //     echo '<h2>Age</h2>';
    //     echo '<li>' . $petAge . '</li>'; // Lifespan can be fixed or fetched from the database
    //     echo '<h3>Price : ' . $petPrice . '/-</h3>';
    //     echo '<button class="cn" data-dog-id="' . $id . '"><a href="#"><b>ADOPT</b></a></button>';
    //     echo '</div>';
    echo '<div class="dog">';

        echo '<h1 id="l">' . $petName . '</h1>';
       
        
        echo '<img src="' . $petImage . '" alt="' . $petName . '">';
        echo '<h2>Description</h2>';
        echo '<p>' . $petDescription . '</p>';
        echo '<h2>Key Features</h2>';
        echo '<li>Energetic,attractice,active</li>'; // Key features can be fixed or fetched from the database
        echo '<h2>Age</h2>';
        echo '<li>' . $petAge. '</li>'; // Lifespan can be fixed or fetched from the database
        echo '<h2>Price :</h2>';
        echo '<h3>' . $petPrice . '</h3>';
        echo '<button class="cn" data-dog-id="' . $id . '"><a href="#"><b>ADOPT</b></a></button>';
        echo '</div>';
    }
} else {
    echo "No pet donations found.";
}

$con->close();
?>
    </div> 

    <!-- footer section -->

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

    <script src="youtube.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    

        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js">
            
            
        </script>
        <script>
            const buttons = document.querySelectorAll(".cn");
    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Get the parent cat element
            const dogElement = button.closest('.dog');
            // Get the cat details
            const dogName = dogElement.querySelector('h1').innerText;
            const dogPrice = dogElement.querySelector('h3').innerText;
            const dogId = button.dataset.dogId;  // Get the cat ID
            // Encode the cat details for URL
            const encodedDogName = encodeURIComponent(dogName);
            const encodedDogPrice = encodeURIComponent(dogPrice);
            const encodedDogId = encodeURIComponent(dogId);
            // Navigate to the payment page with cat details as URL parameters
            location.href = `dog_payment.php?name=${encodedDogName}&price=${encodedDogPrice}&id=${encodedDogId}`;
        });
    });

    function goBack() {
        history.go(-1);
    }
        </script>

</body>
</html>