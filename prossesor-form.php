<?php
$name = $_POST["name"];
$description = $_POST["description"];
$aesthetic = filter_input(INPUT_POST, "aesthetic", FILTER_VALIDATE_INT);
$file_name = $_POST["file_name"];
$terms = filter_input(INPUT_POST,"terms",FILTER_VALIDATE_BOOL);
if(! $terms){
    die("Please accept terms.");
}
$host = "actualtesting.cwqrcac9nt4i.us-east-1.rds.amazonaws.com";
$dbname = "images";
$username = "admin";
$password = "Pinterestbutbetter";
$conn = mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_error());
}
$sql = "INSERT INTO message (name,description,aesthetic,file_name) VALUES(?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssii", $name,$message,$aesthetic,$type);
mysqli_stmt_execute($stmt);
echo "Record saved";