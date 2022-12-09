<?php
session_start();
$conn = require __DIR__ . "/connection.php";
$tempnum = $_POST["photo"];
$imgarr = $_SESSION["uphotos"];
$filenum = $imgarr[$tempnum];
$sql = "SELECT * FROM posts WHERE file_num= '" . $filenum . "'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION["pusername"] = $row["username"];
    $_SESSION["pcaption"] = $row["caption"];
    $_SESSION["pphoto"] = $row["file_num"];
    $_SESSION["pstorename"] = $row["store_name"];
    header("Location: postPage.php");
}
else{
    print_r($_POST);
}