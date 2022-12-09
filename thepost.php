<?php
//creates a session/resumes current session based on a identifier passed via a GET/POST request.
//Also could be passed via cookie if there are any
session_start();

//Obtains current code working directory
$conn = require __DIR__ . "/connection.php";

//variables storing image
$tempnum = $_POST["photo"];
//the session is a way to stroe info across multiple variables
$imgarr = $_SESSION["photos"];
$filenum = $imgarr[$tempnum];

//inserting created file name
$sql = "SELECT * FROM posts WHERE file_num= '" . $filenum . "'";
$result = mysqli_query($conn, $sql);

//if it equals something as well as only 1 value
if(mysqli_num_rows($result) === 1){
    //get values
    $row = mysqli_fetch_assoc($result);
    $_SESSION["pusername"] = $row["username"];
    $_SESSION["pcaption"] = $row["caption"];
    $_SESSION["pphoto"] = $row["file_num"];
    $_SESSION["pstorename"] = $row["store_name"];
    // fetch from the session and move to post page with new file name for unique id
    header("Location: postPage.php");
}
else{
    print_r($_POST);
}

