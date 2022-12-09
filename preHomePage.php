<?php
//Session start
session_start();
//Database connection
$conn = require __DIR__ . "/connection.php";
//Query to select all filenames
$sql = "SELECT file_num FROM posts";
//Getting the query results
$result = mysqli_query($conn, $sql);
//Temp array
$otherarr = array();
//Counter
$num = 0;
//Calls while there are still rows in the table
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    //Insert filename into temp array
    $otherarr[$num] = $row["file_num"];
    //Increment counter
    $num++;
}
//Randomize temp array
shuffle($otherarr);
//Store temp array in a session variable
$_SESSION["photos"] = $otherarr;
//Reset the current post in case it was stuck on one
$_SESSION["thepost"] = "";
//Go to the full home page
header("Location: homePage.php");
?>
