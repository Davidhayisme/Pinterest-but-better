<?php
/**
 * @var mixed $host The DNS name of hosting service
 */
$host = "actualtesting.cwqrcac9nt4i.us-east-1.rds.amazonaws.com";
//Database name
                $dbname = "images";
                //Username
                $usernames = "admin";
                //Password
                $passwords = "Pinterestbutbetter";
                //Actual connection to the database
                $conn = mysqli_connect($host,$usernames,$passwords,$dbname);
                //Connection error checking
                if(mysqli_connect_errno()){
                    die("Connection error: " . mysqli_connect_error());
                }
                //Returning the connection to the database
return $conn;
