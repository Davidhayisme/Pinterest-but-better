<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">    
        <style>
            /* Header: Hidden Treasures */
        .header {
            background-color: #57427e;
            text-align: center;
            padding: 20px;
            font-family: "Sofia", sans-serif;
        }
        .header h1 {
            color: #eeeeee;
            font-size: 30px;
            font-family: "Sofia", sans-serif;
        }
        /* Format for links */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #4D5F0F;
            font-family: Georgia, serif;
        }
        li {
            float: left;
            text-decoration: none;
        }
        li a {
            display: block;
            padding: 8px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: Georgia, serif;
        }
        
        li a:hover {
            background-color: #52554a;
        }
        a:visited {
            text-decoration: none;
        }
        a.one:link {
            color: black;
            font-size: 20px;
            font-family: Georgia, serif;
            text-decoration: none;}
        .active {
            background-color: #4D5F0F;
        }

        /* Header format */
        h2 {
            color: black;
            font-size: 25px;
            font-family: Georgia, serif;
        }
        h3 {
            color: black;
            font-size: 15px;
            font-family: Georgia, serif;
            text-decoration: none;
        }

        /* Image format */
        img {
            width: 500px;
            height: auto;
        }
        
        
        </style>
    </head>
    <body>
        <!-- create header and navigation tab -->
        <div class="header">
            <h1>Hidden Treasures</h1>
        </div>
        <ul>
            <!-- links for tabs -->
        <li><a href="preHomePage.php">Home</a></li>
        <li style="float:right"><a class="active" href="profile.php">Profile</a></li>
        <li style="float:right"><a class="active" href="posting.php">Post</a></li>
        </ul>

    </body> 
    <!-- get all information from database/server using php -->
    <a class="one" href="userPage.html"><p id="demo"></p></a>
    <h1><?php echo $_SESSION["pusername"];?></h1> <!-- display username -->
    <a class="one" href="storePage.html"><h3><?php echo $_SESSION["pstorename"]?></h3></a>  <!-- display storepage -->
    <img src="Photos/<?=$_SESSION["pphoto"]?>" alt="Azzuro" width="500" height="500">   <!-- display image -->
    <h3><?php echo $_SESSION["pcaption"]?></h3> <!-- display caption -->
    
    
</html> 
