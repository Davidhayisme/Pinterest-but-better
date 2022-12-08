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


$statusMsg = '';
    // $aesthetic_name = "";
    // if ($aesthetic == 1):
    //     $aesthetic_name = "Indie";
    // if ($aesthetic_value == 2):
    //     $aesthetic_name = "Grunge";
    // if ($aesthetic_value == 3):
    //     $aesthetic_name = "Soft";
    // if ($aesthetic_value == 4):
    //     $aesthetic_name = "Dark & light academia";
    // if ($aesthetic_value == 5):
    //     $aesthetic_name = "Baddie";
    // if ($aesthetic_value == 6):
    //     $aesthetic_name = "VISCO";
    // if ($aesthetic_value == 7):
    //     $aesthetic_name = "EMO";
    // if ($aesthetic_value == 8):
    //     $aesthetic_name = "Fairycore";
    // if ($aesthetic_value == 9):
    //     $aesthetic_name = "Goth";
    // if ($aesthetic_value == 10):
    //     $aesthetic_name = "Cottagecore";
    // if ($aesthetic_value == 11):
    //     $aesthetic_name = "Y2K";
    // if ($aesthetic_value == 12):
    //     $aesthetic_name = "90's";
    // if ($aesthetic_value == 13):
    //     $aesthetic_name = "80's";
    // if ($aesthetic_value == 14):
    //     $aesthetic_name = "70's";
    // if ($aesthetic_value == 15):
    //     $aesthetic_name = "60's";
    // if ($aesthetic_value == 16):
    //     $aesthetic_name = "50's";
    // if ($aesthetic_value == 17):
    //     $aesthetic_name = "40's";
    // if ($aesthetic_value == 18):
    //     $aesthetic_name = "30's";
    // if ($aesthetic_value == 19):
    //     $aesthetic_name = "20's";

    $sql = "INSERT INTO posts (file_num,username,aesthetic_name,caption,store_name,location,rating) VALUES(?,?,?,?,?,?,?)";
        $allowed = array('jpg','jpeg','png','pdf');
        if(in_array($fileActualExt,$allowed)){
        }
    mysqli_stmt_bind_param($stmt,"ssii", $file_num, $username, $aesthetic,$caption, $store_name, $location, $rating);
    mysqli_stmt_execute($stmt);
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt,$sql)){
        die(mysqli_error($conn));
    }
    echo "saved";
}
?>
