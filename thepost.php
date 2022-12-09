<?php
//begins session, which is away to store information across multiple pages
session_start();
//obtains currec7nt code working directory
$conn = require __DIR__ . "/connection.php";
//Variables to initiate photo variables
$tempnum = $_POST["photo"];
$imgarr = $_SESSION["photos"];
$filenum = $imgarr[$tempnum];
//variable in mysql that store unique id for the photo tag
$sql = "SELECT * FROM posts WHERE file_num= '" . $filenum . "'";
//runs multiple sql statements in 1 query
$result = mysqli_query($conn, $sql);
//if something is stored but the user is not trying to submit multiple photos
if(mysqli_num_rows($result) === 1){
    //associative array representing fetched rows
    $row = mysqli_fetch_assoc($result);
    //store information in session variables
    $_SESSION["pusername"] = $row["username"];
    $_SESSION["pcaption"] = $row["caption"];
    $_SESSION["pphoto"] = $row["file_num"];
    $_SESSION["pstorename"] = $row["store_name"];
    header("Location: postPage.php");
}
else{
// Points back to the homepage if there isn't a matching
// row in the database
    header("Location: homePage.php");
}

