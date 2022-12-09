<?php
session_start();
$conn = require __DIR__ . "/connection.php";
$usernm = $_SESSION["username"];
$sql = "SELECT * FROM posts WHERE username='" . $usernm . "'";
$result = mysqli_query($conn, $sql);
$otherarr = array();
$num = 0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $otherarr[$num] = $row["file_num"];
    $num++;
}
shuffle($otherarr);
$_SESSION["uphotos"] = $otherarr;
header("Location: profile.php");
