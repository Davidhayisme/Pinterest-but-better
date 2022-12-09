<?php
//Session starts
session_start();
//Database connection
$conn = require __DIR__ . "/connection.php";
//Username and hashed password
$uname = $_POST["username"];
$passwrd = md5($_POST["password"]);
//Query which checks from user if the password and username 
//matches the ones given by the user on the login screen
$sql = "SELECT * FROM user WHERE password='".$passwrd."' AND username = '".$uname."'";
//Query call
$result = mysqli_query($conn, $sql);
//If one account matches 
if(mysqli_num_rows($result) === 1){
    //Get the account
    $row = mysqli_fetch_assoc($result);
    //Double check
    if($row["username"] === $uname && $row["password"] === $passwrd){
        //Set session variables equal to the account fetched
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["bio"] = $row["bio"];
        $_SESSION["profile_photo"] = $row["profile_photo"];
        header("Location: preHomePage.php");
        exit();

    }
    else{
        //error checking
        header("Location: index.php?incorrect");
        exit();
    }
}
else{
    //error checking
    header("Location: index.php?incorrect");
        exit();;
}
