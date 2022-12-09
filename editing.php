<?php

//Continue session
session_start();
//Connect to database
$conn = require __DIR__ . "/connection.php";
//File variables
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
//Break filename into array of two
$fileExt = explode('.', $fileName);
//Take the second half as a variable
$fileActualExt = strtolower(end($fileExt));
//File types allowed
$allowed = array('jpg','jpeg','png','pdf');
//Username and Password for the current session and given biography
$newbio = $_POST["bio"];
$password = $_SESSION["password"];
$username = $_SESSION["username"];
//Creates new file name with filetype and username
$fileNameNew = $username.".".$fileActualExt;
//Query to update the user's bio and profile picture
$sql = "UPDATE user SET
 bio='" . $newbio . "',
 profile_photo='".$fileNameNew."'
 WHERE password='" . $password . "'";
//File type checker
if (in_array($fileActualExt, $allowed)) {
    //File error checker
    if ($fileError == 0) {
        //File size checker
        if ($fileSize < 1000000) {
            //Destination of the file
            $fileDestination = '/var/www/html/ProfPhotos/';
            //Checks if a directory exists that is writable
            if (is_dir($fileDestination) && is_writable($fileDestination)) {
                //Calls the query and the moving of the file at the same 
                //time so one isn't stored without the other
                if (mysqli_query($conn, $sql) && move_uploaded_file($fileTmpName,$fileDestination.$fileNameNew)) {
                    //Set the session bio and photo id to the given 
                    //variables and point it back to the profile page
                    $_SESSION["bio"] = $newbio;
                    $_SESSION["profile_photo"] = $fileNameNew;
                    header("Location: profile.php");
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            }
        }
    }
}
