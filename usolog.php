<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$profile_photo = $_POST['username'];
$bio = $_POST['bio'];
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png','pdf');
$fileNameNew = $username.".".$fileActualExt;
if(in_array($fileActualExt,$allowed)){
    if($fileError == 0){
        if($fileSize < 1000000){
            $fileDestination = '/var/www/html/ProfPhotos/';
            //Check boolean of uploaded
            if (is_dir($fileDestination) && is_writable($fileDestination)) {
                require __DIR__ . "/connection.php";
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
                $password_hash = md5($_POST["password"]);
                $sql = "INSERT INTO user (username,email,password,bio,profile_photo) VALUES(?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(! mysqli_stmt_prepare($stmt,$sql)){
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($stmt,"sssss", $username, $email, $password_hash, $bio, $fileNameNew);
                if(!mysqli_stmt_execute($stmt)){
                    echo "Account Creation Failed";
                    header("Location: accountcreation.php");
                }
                $cramp = move_uploaded_file($fileTmpName, $fileDestination.$fileNameNew);
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