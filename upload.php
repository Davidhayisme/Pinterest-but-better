<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');
    if(in_array($fileActualExt,$allowed)){
        if($fileError == 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid("",true).".".$fileActualExt;
                $fileDestination = '/var/www/html/ProfPhotos/';
                //Check boolean of uploaded
                if (is_dir($fileDestination) && is_writable($fileDestination)) {
                    $cramp = move_uploaded_file($fileTmpName, $fileDestination.$fileNameNew);
                    if($cramp){header("Location: index.php?uploadsuccess");}
                    else{echo "Not uploaded because of error #".$fileError;}
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
}