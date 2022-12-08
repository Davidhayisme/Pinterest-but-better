<?php
session_start();
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $conn = require __DIR__."/connection.php"
    #post page form
    $username = $_SESSION["username"];
    $caption = $_POST["caption"];
    $store_name = $_POST["store_name"];
    $location = $_POST["location"];
    $rating = filter_input(INPUT_POST, "rating", FILTER_VALIDATE_INT);
    $aesthetic = filter_input(INPUT_POST, "aesthetic", FILTER_VALIDATE_INT);
    $sql = "INSERT INTO posts (file_num,username,aesthetic,caption,store_name,location,rating) VALUES(?,?,?,?,?,?,?)";
    $fileNameNew = uniqid("",true).".".$fileActualExt;
    if (in_array($fileActualExt, $allowed)){
        if($fileError == 0){
            if ($fileSize < 1000000){
                $fileDestination = '/var/www/html/Photos/';
                $stmt = mysqli_stmt_init($conn);
                if(! mysqli_stmt_prepare($stmt,$sql)){
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($stmt,"isisssi", $fileNameNew, $username, $aesthetic,$caption, $store_name, $location, $rating);
                if(mysqli_stmt_execute($stmt) && move_uploaded_file($fileTmpName,$fileDestination.$fileNameNew)){
                    header("Location: preHomePage.php");
                }
            }
        }
    }
    echo "not saved";
}
?>
