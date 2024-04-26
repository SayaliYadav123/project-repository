<?php
include 'question_phpcode.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questionire.css">
    <title>Questionaire</title>
</head>
<body>
   <div class="content">
    <div class="icon">
        <h2 class="logo"></h2>
        <div class="menu">
            <ul>
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="adoptioncategory.php">Adopt</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="ContactUs.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <h1>
    PAW<span>
    <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
    sitive</span>ALLY</h1>
   </div>
   <form action="questionaire.php" method="post">
    <div class="wrapper">
        <h2 style="margin-bottom: -10px;"> Pet Adoption Questionaire</h2>
        <p style="margin-bottom: -10px;margin-top:14px;"><i>We <span class="Quote">Care</span> For Your Pet</i></p><br>
        <label for="adopt_for">Are you financially prepared to take care of a pet?</label><br>
            <select name="adopt_for">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="primary_caregiver">Are you willing to commit to providing proper veterinary care for the pet?</label><br>
            <select name="primary_caregiver">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="children_at_home">Is your living situation suitable for having a pet?</label><br>
            <select name="children_at_home">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="pet_allergies">Will you be able to provide a stable and loving environment for the pet?</label><br>
            <select name="pet_allergies">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            
            <label for="residence_type">Do you understand the potential behavioral issues that may arise with the type of pet you are considering?</label><br>
            <select name="residence_type">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="pet_stay">Are all members of your household on board with adopting a pet?
            </label><br>
            <select name="pet_stay">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="pet_sleep">Are you willing to make necessary adjustments to your lifestyle to accommodate the needs of the pet?</label><br>
            <select name="pet_sleep">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="residence_type">Are you prepared to handle any potential allergies or health issues related to having a pet?</label><br>
            <select name="residence_type">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="residence_type">Can you ensure that your home environment is safe and secure for the pet?</label><br>
            <select name="residence_type">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="residence_type">Are you committed to providing socialization opportunities for your pet to interact with other animals and people?</label><br>
            <select name="residence_type">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
            <label for="residence_type">Will you make arrangements for proper care of your pet if you need to travel or are otherwise unavailable?</label><br>
            <select name="residence_type">
                <option value="yes">Yes</option>
                
                <option value="no">no</option>
            </select>
            <br><br>
        <button type="submit" class="submit-button">SUBMIT</button>
        <?php if (isset($not_elligible)): ?>
            <span style="color: red;"><?php echo $not_elligible; ?></span>
        <?php endif ?> 
        <p>Thank you for taking the time to complte our pet adoption questionaire.Your intrest in providing a loving
            home to a furry friend means a lot!</p>
        </div>
    
   </form>

        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>