<?php
//Session start
session_start();
//Database connection
$conn = require __DIR__ . "/connection.php";
//Storing which photo was pressed
$tempnum = $_POST["photo"];
//Storing array of profile photos
$imgarr = $_SESSION["uphotos"];
//Getting the index of the user photos array to get
//its respective filename
$filenum = $imgarr[$tempnum];
//Query to find the file name that matches in the table
$sql = "SELECT * FROM posts WHERE file_num= '" . $filenum . "'";
//Calling the query with the connection to the database
$result = mysqli_query($conn, $sql);
//Checks if there is a row with the filename
if(mysqli_num_rows($result) === 1){
    //Fetches that row
    $row = mysqli_fetch_assoc($result);
    //Stores all of the important row information into
    //the session so it can be displayed with the post
    $_SESSION["pusername"] = $row["username"];
    $_SESSION["pcaption"] = $row["caption"];
    $_SESSION["pphoto"] = $row["file_num"];
    $_SESSION["pstorename"] = $row["store_name"];
    header("Location: postPage.php");
}
else{
    //If there isn't a post that works it will just
    //redirect to the homepage the user was on
    print_r("Location: homePage.php");
}
