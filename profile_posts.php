<?php
//Session start
session_start();
//Database connection
$conn = require __DIR__ . "/connection.php";
//Username from session
$usernm = $_SESSION["username"];
//Query to store rows where username is same as session username
$sql = "SELECT * FROM posts WHERE username='" . $usernm . "'";
//Calling the query
$result = mysqli_query($conn, $sql);
//Temp array
$otherarr = array();
//Counter
$num = 0;
//Stores rows until there are no more rows that fit the query
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //Storing filenames into the temp array and incrementing counter
    $otherarr[$num] = $row["file_num"];
    $num++;
}
//Randomizing the order of the posts
shuffle($otherarr);
//Storing the temp array into a session variable
$_SESSION["uphotos"] = $otherarr;
//Header to the profile page
header("Location: profile.php");
