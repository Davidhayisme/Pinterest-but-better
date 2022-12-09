<?php
//creates a session/resumes current session based on a identifier passed via a GET/POST request.
//Also could be passed via cookie if there are any
session_start();

//Initializing file variables for storage
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];
//Error checking
$fileError = $_FILES['file']['error'];
//Turns into an array of two different things plit by "."
$fileExt = explode('.', $fileName);
//Checks the existence of file moving the pointer to end of array
$fileActualExt = strtolower(end($fileExt));

//Obtains current code working directory
require __DIR__ . "/connection.php";

// Post page variables
$username = $_SESSION["username"];
$caption = $_POST["caption"];
$store_name = $_POST["store_name"];
$location = $_POST["location"];
$rating = filter_input(INPUT_POST, "rating", FILTER_VALIDATE_INT);
$aesthetic = filter_input(INPUT_POST, "aesthetic", FILTER_VALIDATE_INT);
//SQL query Insert variables
$sql = "INSERT INTO posts (file_num,username,aesthetic,caption,store_name,location,rating) VALUES(?,?,?,?,?,?,?)";

$allowed = array('jpg','jpeg','png','pdf');
    //print_r($_POST);
//Creating the unique id for the picture to test if it exits
//and admiting different file types
$fileNameNew = uniqid("",true).".".$fileActualExt;
    //echo $fileNameNew;
    //echo $username;
//Searches in array for value and if ture
if (in_array($fileActualExt, $allowed)){
    // no file error
    if($fileError == 0){
    // size of file is less than limit
    if ($fileSize < 100000000) {
        //echo "Things working but not worked!";
        //The path to where files will be inputted
        $fileDestination = '/var/www/html/Photos/';
        //Statement of connection
        $stmt = mysqli_stmt_init($conn);
        //if the there is the file destination previously stored and it is able to be put into that folder
        if (is_dir($fileDestination) && is_writable($fileDestination)) {
            //Prepares SQL statement for execution
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                //prints error msg
                die(mysqli_error($conn));
            }
            //inserts variables into mysql db
            mysqli_stmt_bind_param($stmt, "ssisssi", $fileNameNew, $username, $aesthetic, $caption, $store_name, $location, $rating);
            //failed to exectute check
            if (!mysqli_stmt_execute($stmt)) {
                echo "ACCOUNT CREATION FAILED!";
            }
            //failed to upload picture to server
            if(!move_uploaded_file($fileTmpName, $fileDestination . $fileNameNew)){
                    echo "imagine";
            }
            //Sends raw php to a client browser
            header("Location: preHomePage.php");
        }
        else{
            echo "NO";
        }
    }
    else{
        echo "creep";
    }
        }
        else{
            echo $fileError;
        }
    }
    echo "AHH";
?>
