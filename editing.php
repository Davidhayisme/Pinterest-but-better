<?php
//creates a session/resumes current session based on a identifier passed via a GET/POST request.
//Also could be passed via cookie if there are any
session_start();

//Obtains current code working directory
$conn = require __DIR__ . "/connection.php";

//Initializing file variables for storage
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
//Error checking
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
//Turns into an array of two different things plit by "."
$fileExt = explode('.', $fileName);
//Checks the existence of file moving the pointer to end of array
$fileActualExt = strtolower(end($fileExt));
// Allowed file types
$allowed = array('jpg','jpeg','png','pdf');

// User creation variables
$newbio = $_POST["bio"];
$password = $_SESSION["password"];
$username = $_SESSION["username"];

//Creating the unique id for the picture to test if it exits
//and admiting different file types
$fileNameNew = $username.".".$fileActualExt;

//Updates User values to edit information
$sql = "UPDATE user SET
 bio='" . $newbio . "',
 profile_photo='".$fileNameNew."'
 WHERE password='" . $password . "'";
 
//Searches in array for value and if ture
if (in_array($fileActualExt, $allowed)){
    // no file error
    if($fileError == 0){
    // size of file is less than limit
    if ($fileSize < 100000000) {
        //echo "Things working but not worked!";
        //The path to where files will be inputted
            $fileDestination = '/var/www/html/ProfPhotos/';
            //Check boolean of uploaded
            if (is_dir($fileDestination) && is_writable($fileDestination)) {
                //Updates session
                if (mysqli_query($conn, $sql) && move_uploaded_file($fileTmpName,$fileDestination.$fileNameNew)) {
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
