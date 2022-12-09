<?php
//Start session
session_start();
//File variables
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
//Break into array of two
$fileExt = explode('.', $fileName);
//Get the end part of that array
$fileActualExt = strtolower(end($fileExt));
//Database connection
require __DIR__ . "/connection.php";
#post page form
//Username from session and other post information from the form
$username = $_SESSION["username"];
$caption = $_POST["caption"];
$store_name = $_POST["store_name"];
$location = $_POST["location"];
$rating = filter_input(INPUT_POST, "rating", FILTER_VALIDATE_INT);
$aesthetic = filter_input(INPUT_POST, "aesthetic", FILTER_VALIDATE_INT);
//Call to store all of the variables into a table
$sql = "INSERT INTO posts (file_num,username,aesthetic,caption,store_name,location,rating) VALUES(?,?,?,?,?,?,?)";
//Permitted file types
$allowed = array('jpg','jpeg','png','pdf');
//Unique file names
$fileNameNew = uniqid("",true).".".$fileActualExt;
//Correct format check
if (in_array($fileActualExt, $allowed)){
    //File error check
    if($fileError == 0){
        //File size check
    if ($fileSize < 100000000) {
        //File destination
        $fileDestination = '/var/www/html/Photos/';
        //Intializing the mysqli statment
        $stmt = mysqli_stmt_init($conn);
        //Checking if directory exists and is writable
        if (is_dir($fileDestination) && is_writable($fileDestination)) {
            //Checks if the statment can be prepared with
            //the previous statement and the query
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die(mysqli_error($conn));
            }
            //Setting the correct values and variables
            //to store in the table
            mysqli_stmt_bind_param($stmt, "ssisssi", $fileNameNew, $username, $aesthetic, $caption, $store_name, $location, $rating);
            //Stores statement to the database
            if (!mysqli_stmt_execute($stmt)) {
                echo "ACCOUNT CREATION FAILED!";
            }
            //Stores file into the correct folder in the server
            if(!move_uploaded_file($fileTmpName, $fileDestination . $fileNameNew)){
                header("Location: posting.php");
            }
            //Redirect to the prehome page
            header("Location: preHomePage.php");
        }
        else{
            //Error checking
                header("Location: posting.php");
        }
    }
    else{
        //Error checking
        header("Location: posting.php");
    }
        }
        else{
            //Error checking
            header("Location: posting.php");
        }
    }
    //Error checking
    header("Location: posting.php");
?>
