<?php
session_start();
print_r($_SESSION);
$conn = require __DIR__ . "/connection.php";
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png','pdf');
$newbio = $_POST["bio"];
$password = $_SESSION["password"];
$username = $_SESSION["username"];
$fileNameNew = $username.".".$fileActualExt;
$sql = "UPDATE user SET
 bio='" . $newbio . "',
 profile_photo='".$fileNameNew."'
 WHERE password='" . $password . "'";
if (in_array($fileActualExt, $allowed)) {
    if ($fileError == 0) {
        if ($fileSize < 1000000) {
            $fileDestination = '/var/www/html/ProfPhotos/';
            //Check boolean of uploaded
            if (is_dir($fileDestination) && is_writable($fileDestination)) {
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