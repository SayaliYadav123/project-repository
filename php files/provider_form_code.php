<?php
include 'connect.php';
if(isset($_POST["submit"])) {
    $parentName = $_POST["parent_name"];
    $petCategory = $_POST["pet_category"];
    $petBreed = $_POST["pet_breed"];
    $contactNumber = $_POST["contact"];
    $petDescription = $_POST["pet_description"];
    $pet_age= $_POST["pet_age"];
   
    $pet_price= $_POST["price"];
    // $pet_image= $_POST["pet_image"];


    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["pet_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["pet_image"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "webp") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["pet_image"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["pet_image"]["name"]). " has been uploaded.";
            
            // Database connection
            
            // Insert data into appropriate table
            $tableName = ($petCategory == "Dog") ? "dog_prov" : "cat_prov";
            // $sql = "INSERT INTO $tableName (parent_name, pet_breed,pet_age,features, contact_number, pet_description, pet_image,price)
            //         VALUES ('$parentName', '$petBreed','$pet_age','$features','$contactNumber', '$petDescription', '$target_file','$pet_price')";
            $sql = "INSERT INTO $tableName (parent_name, pet_breed, pet_age, contact_number, pet_description, pet_image, price)
            VALUES ('$parentName', '$petBreed', '$pet_age','$contactNumber', '" . mysqli_real_escape_string($con, $petDescription) . "', '$target_file', '$pet_price')";
    
            if ($con->query($sql) === TRUE) {
                // echo "New record created successfully";
               header("Location:Thank_you.php");
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }

            $con->close();
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
