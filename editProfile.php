<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
        /* Formating for links */
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
        .parent {
            display: flex;
        }
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
        }
       
        /* Image format */
        img {
            width: 200px;
            height: auto;
        }   
          
        
        div{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        /* How to display image */
        #display_image{
        width: 300px;
        height: 195px;
        background-position: center;
        background-size: cover;
        padding-bottom: 10px;
        }
        label {
            color: black;
            font-size: 15px;
            font-family: Georgia, serif;
            padding-top: 10px;
        }  
</style>
</head>

<body>
    <!-- create header and navigation tab -->
    <div class="header">
        <h1>Hidden Treasures</h1>
    </div>
    <ul>
    <!-- links for the tab -->
    <li><a href="preHomePage.php">Home</a></li>
    <li style="float:right"><a class="active" href="profile.php">Profile</a></li>
    <li style="float:right"><a class="active" href="profile_posts.php">Post</a></li>
    </ul>

    <!-- header -->
    <div class="parent">
        <h2>Edit Profile</h2>
    </div>

    <!-- Form to update profile -->
    <form action="editing.php" method="post" enctype = "multipart/form-data">
        <label for="image">Profile Picture:</label> <!-- upload profile picture -->
        <input type="file" id="image_input" name="file">
        <div id="display_image"></div>  <!-- display profile picture -->
        <label for="bio">Bio:</label>   <!-- upload bio -->
        <input type="text" id="bio" name="bio"><br>
        <input type="submit" value="Submit">    <!-- submit -->
    </form>
    
</body>
