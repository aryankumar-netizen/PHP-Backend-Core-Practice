<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
     <form method ="POST" enctype="multipart/form-data">
        upload Profile Image : <input type="file" name="image"><br><br>
        <button type="submit" name="S_btn">Submit</button>
     </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    

    // Debugging
    // echo "<pre>";
    // print_r($_FILES);
    // print_r($_FILES['image']);
    
    // print_r($_FILES['image']['name']);
    // print_r($_FILES['image']['tmp_name']);
    // print_r($_FILES['image']['error']);
    // print_r($_FILES['image']['size']);


    $fileName = $_FILES['image']['name'];
    $tmpFolder = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    $fileSize = $_FILES['image']['size'];

   
    $allowedFileType = ['png', 'webp', 'jpeg', 'jpg', 'jfif', 'avif'];
    
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
    if ($error !== 0) {
        echo "Error: Your Uploaded File Corrupts!";
    } elseif (!in_array($ext, $allowedFileType)) {
        echo "Error: required file Extension not match ! ('png', 'webp', 'jpeg', 'jpg', 'jfif')";
    } elseif ($fileSize > 2000000){
        echo "Error: File size must be less than 2MB";
    } else {
    
        $newFileName = uniqid('IMG_', true) . '.' . $ext;
        
        if(move_uploaded_file($tmpFolder, 'images/' . $newFileName)){
            echo "File Move Successfully ";
        } else {
            echo "Error: File could not be moved.";
        }
    }
} else {
    echo "Form Not submitted";
}
?>
