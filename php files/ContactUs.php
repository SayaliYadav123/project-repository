<?php include('codingcontactpage.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="contactUs.css">
<title>Contact us Page</title>
</head>
<body>
    <div>
        <h2 class="logo"></h2>
    </div>
     <section class="banner">
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20230822131732/images.png"
            alt="Contact Us  ">
        <h1>Get in Touch With Us</h1>       
        <h2 class="h2"><a href="homepage.php">Home</a></h2>
    </section>
<!-- Contact form -->
   <section class="contact-form">
        <div class="form-container">
            <h2>Your Details</h2>
            <form action="ContactUs.php" method="POST">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone: </label>
                <input type="tel" id="phone" name="phone">
                <label for="message">Message: </label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit" class="submit-button">Submit</button>
                <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($con->query($sql) === TRUE) {
                    echo "<p class='success-msg'>Message sent successfully!</p>";
                } else {
                    echo "<p class='error-msg'>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
            }
            ?>
            </form>

        </div>

    </section>


    <!-- Company contact info -->

    <section class="contact-info">

        <h2>Contact Information</h2>

        <address>
            PAWsitiveALLY<br>

            123 Main Street<br>

            Karad,415110<br>

            Phone: <a href="tel:1234567890">123-456-7890</a><br>

            Email: <a href="mailto:info@example.com">pawsitiveallyinfo@example.com</a>

        </address>

    </section>


    <!-- Footer section -->

    <footer>

        <p>© 2023 Your Company. All rights reserved.</p>

    </footer>

    <script src="script.js"></script>

</body>
 

</html>