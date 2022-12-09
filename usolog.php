<?php
//inisialized user variables
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$profile_photo = $_POST['username'];
$bio = $_POST['bio'];
//initialize user profile picture
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
//seperates file variable and gets last element in array
$fileExt = explode('.', $fileName);
//points array to last element and returns value
$fileActualExt = strtolower(end($fileExt));
//allowed variables
$allowed = array('jpg','jpeg','png','pdf');
//if values in array and the file actually exists and the file type is allowed
$fileNameNew = $username.".".$fileActualExt;
if(in_array($fileActualExt,$allowed)){
    //no error
    if($fileError == 0){
        //within length
        if($fileSize < 10000000){
            //set destination to profile photos in server
            $fileDestination = '/var/www/html/ProfPhotos/';
            //Check boolean of uploaded
            if (is_dir($fileDestination) && is_writable($fileDestination)) {
                
                require __DIR__ . "/connection.php";
                if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("Location: accountcreation.php?invalidemail");
                }
                //password constraints
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
                //calculates hash of the password and store it
                $password_hash = md5($_POST["password"]);
                //insert user info into Mysql
                $sql = "INSERT INTO user (username,email,password,bio,profile_photo) VALUES(?,?,?,?,?)";
                //connect
                $stmt = mysqli_stmt_init($conn);
                //prepares sql statement for execution
                if(! mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: accountcreation.php?mysqlerror");
                }
                //stores the variables
                mysqli_stmt_bind_param($stmt,"sssss", $username, $email, $password_hash, $bio, $fileNameNew);
                if(!mysqli_stmt_execute($stmt)){
                    header("Location: accountcreation.php?creationfailure");
                }
                // moves uploaded file to correct location
                $cramp = move_uploaded_file($fileTmpName, $fileDestination.$fileNameNew);
                //points back to login page
                header("Location: index.php");
                exit;
            }
            else{
                //points back to account creation if incorrect directory
                header("Location: accountcreation.php?incorrectdirectory");
            }
        }
        else{
            //points back to account creation page if the file of the pfp is too large
            header("Location: accountcreation.php?filetoolarge");
        }
    }
    else{
        // points back to account creation page if there is a seperate file issue
        header("Location: accountcreation.php?file_error");
    }
} else {
    header("Location: accountcreation.php?incorrectformat");
}
