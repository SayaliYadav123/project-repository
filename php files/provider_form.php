<?php
include 'provider_login_code.php';
session_start();
if (!isset($_SESSION['loggedin']) ) { 
    header("Location:provider_login.php");
    e<xit;
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donate Pet</title>
    <style>
.logo{
  background-image: url("logo.jpeg");
  opacity: .5;
  border-radius: 50%;
  background-size: cover;
  /* filter: blur(2px); */
  /* color: #ff7200; */
  /* font-size: 35px; */
  /* font-family: Arial; */
  height: 40px;
  width: 40px;
  padding-left: 20px;
  float: left;
  padding-top: 10px;
  margin-top: 5px 
  
}

body {
    font-family: Arial, sans-serif;
    background-color: rgba(186, 106, 20, 0.777);    
    /* #f5f5f5 */
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    padding: 20px 0;
    color: #333;
}

form {
    padding: 20px;
}

label {
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

input[type="file"] {
    margin-bottom: 20px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: inline-block;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.error-message {
    color: #ff0000;
    margin-bottom: 10px;
}
/* styles.css */

/* styles.css */

select {
    width: 40%; /* Decrease width */
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    appearance: none; /* Removes default appearance */
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6"><path fill="%23333" d="M6 5.293l4.146-4.147.708.707L6 6.707.146 1.853l.708-.707L6 5.293z"/></svg>'); /* Arrow icon */
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px 6px;
    font-size: 16px; /* Increase font size */
}

select:focus {
    outline: none;
    border-color: #4CAF50; /* Highlight when focused */
}

/* Style options */
select option {
    padding: 10px;
    font-size: 16px; /* Increase font size */
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

nav {
    background-color: #100a0a;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px;
    height: 80px;
}



.nav-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav-links li a:hover {
    color: #4CAF50;
}
.head h2{
    color: #fff;
    
}
.main h1{
  font-family: 'Times New Roman', Times, serif;
  font-size: 30px;
  padding-left: 10px;
  margin-top: 4%;
  letter-spacing: 2px;
  margin-left: -120px;
}
.main span{
  color: #ff7200;
  font-size: 25px
}




    </style>
    
</head>
<body>
    <div class="main">

        
        <nav>
            <div class="logo"></div>
            <h1>
                <!-- <a href="@"><ion-icon name="paw-sharp" ></ion-icon></a> -->
                PAW
                <span >
                 <ion-icon name="paw-sharp"></ion-icon>
                sitive</span>ALLY
            </h1>
    

            <div class="head">
                <h2>Donate Pet</h2>
                </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    


<form id="donateForm" action="provider_form_code.php" method="post" enctype="multipart/form-data">
    <label for="parent_name">Pet Parent's Name:</label><br>
    <input type="text" id="parent_name" name="parent_name" required><br><br>

    <label for="pet_category">Pet Category:</label><br>
    <select id="pet_category" name="pet_category" required>
        <option value="">Select Pet Category</option>
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
        
    </select><br><br>
    
    <label for="pet_breed">Pet Breed:</label><br>
    <input type="text" id="pet_breed" name="pet_breed" required><br><br>

    <label for="pet_age">Pet Age:</label><br>
    <input type="text" id="pet_age" name="pet_age" required><br><br>

    

    
    <label for="pet_description">Pet Description:</label><br>
    <textarea id="pet_description" name="pet_description" rows="4" required></textarea><br><br>
    
    <label for="pet_image">Pet Image:</label><br>
    <input type="file" id="pet_image" name="pet_image" accept="image/*" required><br><br>

    <label for="price">Pet Price:</label><br>
    <input type="number" id="price" name="price"  required><br><br>

    <label for="contact">contact No:</label><br>
    <input type="mobileno" id="contact" name="contact" required><br><br>

    <p>Please note that payment will be collected upon delivery (Cash on Delivery).</p>
    
    <!-- Additional Instructions -->
    <p>Kindly ensure that you have the necessary arrangements ready for the pet's pickup or drop-off.</p>
    <p>If you have any specific instructions or preferences, please mention them in the "Pet Description" field.</p>
    
    <p>The admin will send you an email with the delivery date and further instructions once your donation is processed.</p>
    <input type="submit" value="Submit " name="submit">
</form>
</div>

<script >
    document.getElementById("donateForm").addEventListener("submit", function(event) {
    var petImage = document.getElementById("pet_image");
    if (petImage.files.length === 0) {
        alert("Please select a pet image.");
        event.preventDefault();
    }
});

</script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>