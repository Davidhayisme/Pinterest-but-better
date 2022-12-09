<?php
session_start();
$conn = require __DIR__ . "/connection.php";
$sql = "SELECT file_num FROM posts";
$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result);
$_SESSION["photos"] = "";
$amount = mysqli_num_rows($result);
$otherarr = array();
$num = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $otherarr[$num] = $row["file_num"];
        $num++;
    }
$_SESSION["photos"] = $otherarr;
$_SESSION["thepost"] = "";
header("Location: homePage.php");
?>