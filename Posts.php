<?php
$username = $_POST["Username"];
$caption = $_POST["caption"];
$store_name = $_POST["store_name"];
$location = $_POST["location"];
$rating = filter_input(INPUT_POST, "rating", FILTER_VALIDATE_INT);
$aesthetic = filter_input(INPUT_POST, "aesthetic", FILTER_VALIDATE_INT);
$file_name = $_POST["file_name"];

$host = "actualtesting.cwqrcac9nt4i.us-east-1.rds.amazonaws.com";
$dbname = "images";
$username = "admin";
$password = "Pinterestbutbetter";
$conn = mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_error());
}
$sql = "INSERT INTO demo (username,caption,aesthetic,file_name,store_name,location,rating) VALUES(?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssii", $username,$caption,$aesthetic,$file_name,$store_name,$location,$rating);
mysqli_stmt_execute($stmt);
echo "Record saved";