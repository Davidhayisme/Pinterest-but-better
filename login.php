<?php
session_start();
$conn = require __DIR__ . "/connection.php";
//$username = $_POST["username"];
//$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$uname = $_POST["username"];
$passwrd = md5($_POST["password"]);
$sql = "SELECT * FROM user WHERE password='".$passwrd."' AND username = '".$uname."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row["username"] === $uname && $row["password"] === $passwrd){
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["bio"] = $row["bio"];
        $_SESSION["profile_photo"] = $row["profile_photo"];
        header("Location: preHomePage.php");
        exit();

    }
    else{
        header("Location: index.php?incorrect");
        exit();
    }
}
else{
    header("Location: index.php?incorrect");
        exit();;
}