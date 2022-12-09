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
        
        :root {
            --username: JohnDoe22;
        }
        </style>
    </head>
    <body>
        <!-- create header and navigation tab -->
        <div class="header">
            <h1>Hidden Treasures</h1>
        </div>
        <ul>
        <!-- links for the tabs -->
        <li><a href="preHomePage.php">Home</a></li>
        <li style="float:right"><a class="active" href="profile.php">Profile</a></li>
        <li style="float:right"><a class="active" href="posting.php">Post</a></li>
        <li style="float:right"><a class="active" href="#filter">Filter</a></li>
        </ul>

    </body> 
    <!-- username variable -->
    <a class="one" href="userPage.html"><p id="demo"></p></a>
    
    <script>
        let username = "<h2>JohnDoe22</h2>";
        document.getElementById("demo").innerHTML = username;
    </script>  
    
    <!-- store name -->
    <a class="one" href="storePage.html"><h3>Goodwill Store & Donation Center</h3></a>
   
    <!-- display image -->
    <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\azzuro.jpg" alt="Azzuro" width="500" height="500">
    <h3>Beautiful skies out today</h3>
    
    
</html> 
