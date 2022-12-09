<?php
//Connects to database
$host = "actualtesting.cwqrcac9nt4i.us-east-1.rds.amazonaws.com";
                $dbname = "images";
                $usernames = "admin";
                $passwords = "Pinterestbutbetter";
                $conn = mysqli_connect($host,$usernames,$passwords,$dbname);
                if(mysqli_connect_errno()){
                    die("Connection error: " . mysqli_connect_error());
                }
return $conn;
