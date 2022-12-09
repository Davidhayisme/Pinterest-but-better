<?php
//Calls current session
session_start();
//Database call
$conn = require __DIR__ . "/connection.php";
//Variable that distinguishes which filter was chosen
$filternum = $_POST["filter"];
//Query to check which posts fit our aesthetic
$sql = "SELECT file_num FROM posts WHERE aesthetic = '" . $filternum . "'";
//Calling the query with the connection
$result = mysqli_query($conn, $sql);
//Creating an temp array and counter
$otherarr = array();
$num = 0;
//Calls while there are still rows that fit aesthetic
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    //Puts the filename into the temp array and increment counter
    $otherarr[$num] = $row["file_num"];
    $num++;
}
//Randomize with shuffle function
shuffle($otherarr);
//Set temp array into a session variable
$_SESSION["photos"] = $otherarr;
//Go to the home page
header("Location: homePage.php");
