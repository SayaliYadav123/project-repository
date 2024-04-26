<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $yesCount = 0;
    
    // Check each select element for "Yes" options
    foreach ($_POST as $key => $value) {
        if ($value == "yes") {
            $yesCount++;
        }
    }
    
    // Check if the user has selected at least 4 "Yes" options
    if ($yesCount >= 4) {
        $_SESSION['questionnaire_completed'] = true;
        header("Location:adoptioncategory.php");
       // header("Location:catbreed.php");
        // Redirect with cat details if questionnaire completed successfully
    //  header("Location: payment3.php?name={$encodedCatName}&price={$encodedCatPrice}&id={$encodedCatId}");
  
        exit();
    } else {
        $_SESSION['questionnaire_completed'] = false;
        // User is not eligible, redirect back to questionnaire page with message
        $not_elligible= "you are not elligible to adopt the pet";
        header("Location: questionaire.php?not_eligible=1");

        // echo "hi";
        exit();
    }
    if (isset($_GET['not_eligible'])) {
        $not_elligible = "You are not eligible to adopt the pet.";
    }
}
?>
