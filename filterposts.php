<?php
session_start();
$conn = require __DIR__ . "/connection.php";
$filternum = $_POST["filter"];
echo "here";
$sql = "SELECT file_num FROM posts WHERE aesthetic = '" . $filternum . "'";
echo "     here";
$result = mysqli_query($conn, $sql);
echo "    here";
$otherarr = array();
echo "    here";
$num = 0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "here";
    $otherarr[$num] = $row["file_num"];
    $num++;
}
shuffle($otherarr);
$_SESSION["photos"] = $otherarr;
header("Location: homePage.php");