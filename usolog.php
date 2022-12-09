<?php
// Overall Checks login

// Initializing login values
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$profile_photo = $_POST['username'];
$bio = $_POST['bio'];
//For user photo variables
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

//Turns into an array of two different things plit by "."
$fileExt = explode('.', $fileName);
//Checks the existence of file moving the pointer to end of array
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png','pdf');
$fileNameNew = $username.".".$fileActualExt;

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
            //if the there is the file destination previously stored and it is able to be put into that folder
            if (is_dir($fileDestination) && is_writable($fileDestination)) {
                //Obtains current code working directory
                require __DIR__ . "/connection.php";
                
                //Error checking
                if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                    die("work");
                }
                if(strlen($password) < 8){
                    die("MORE");
                }
                if(! preg_match("/[a-z]/i",$password)){
                    die("letter please");
                }
                /*
                if(! preg_match("/[0-9]/i",$password)){
                    die("number please");
                }
                */
                if($_POST["password"] !== $_POST["cpassword"]){
                    die("Passwords don't match");
                }
                
                //Concatinates and makes binary
                $password_hash = md5($_POST["password"]);
                //SQL query Insert variables in DB
                $sql = "INSERT INTO user (username,email,password,bio,profile_photo) VALUES(?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                // Connection test
                if(! mysqli_stmt_prepare($stmt,$sql)){
                    die(mysqli_error($conn));
                }
                
                //Inserts values into mysql
                mysqli_stmt_bind_param($stmt,"sssss", $username, $email, $password_hash, $bio, $fileNameNew);
                //correct values check
                if(!mysqli_stmt_execute($stmt)){
                    echo "Account Creation Failed";
                    header("Location: accountcreation.php");
                }
                
                //move files
                $cramp = move_uploaded_file($fileTmpName, $fileDestination.$fileNameNew);
                //Sends raw php to a client browser
                header("Location: index.php");
                exit;
            }
            else{
                echo "No directory or isn't writable";
            }
        }
        else{
            echo "TOO BIG";
        }
    }
    else{
        echo "UPLOAD DYED";
    }
} else {
    echo "BETTER FORMAT";
}
