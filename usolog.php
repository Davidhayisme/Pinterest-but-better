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
        if($fileSize < 10000000){
            $fileDestination = '/var/www/html/ProfPhotos/';
            //Check boolean of uploaded
            if (is_dir($fileDestination) && is_writable($fileDestination)) {
                require __DIR__ . "/connection.php";
                if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("Location: accountcreation.php?invalidemail");
                }
                if(strlen($password) < 8){
                    header("Location: accountcreation.php?pswordtoosmall");
                }
                if(! preg_match("/[a-z]/i",$password)){
                    header("Location: accountcreation.php?letterneeded");;
                }
                /*
                if(! preg_match("/[0-9]/i",$password)){
                    die("number please");
                }
                */
                if($_POST["password"] !== $_POST["cpassword"]){
                    header("Location: accountcreation.php?confirmfailed");
                }
                $password_hash = md5($_POST["password"]);
                $sql = "INSERT INTO user (username,email,password,bio,profile_photo) VALUES(?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(! mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: accountcreation.php?mysqlerror");
                }
                mysqli_stmt_bind_param($stmt,"sssss", $username, $email, $password_hash, $bio, $fileNameNew);
                if(!mysqli_stmt_execute($stmt)){
                    header("Location: accountcreation.php?creationfailure");
                }
                $cramp = move_uploaded_file($fileTmpName, $fileDestination.$fileNameNew);
                header("Location: index.php");
                exit;
            }
            else{
                header("Location: accountcreation.php?incorrectdirectory");
            }
        }
        else{
            header("Location: accountcreation.php?filetoolarge");
        }
    }
    else{
        header("Location: accountcreation.php?file_error");
    }
} else {
    header("Location: accountcreation.php?incorrectformat");
}