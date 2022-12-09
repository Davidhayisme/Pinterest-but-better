<?php
session_start();
$uphotos = $_SESSION["uphotos"];
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

        /* format for links */
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

        /* header format */
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
        h3:hover {
            color: #4D5F0F;
            text-decoration: underline;
        }
        h4 {
            color: black;
            font-size: 15px;
            font-family: Georgia, serif;
        }
        
        /* image format */
        img {
            width: 200px;
            height: auto;
        }   
        img.one {
            width: 200px;
            height: auto;
            border-radius: 50%;
        }   
        
        
        div1{
            padding-top: 30px;
            padding-left: 30px;
        }
        div2{
            padding-top: 50px;
            padding-left: 30px;
        }
        
        
        /* Gallery format */
        div.gallery {
            margin: 20px 10px 10px 10px;
            float: left;
            width: 180px;
            padding: 10px;
        }

        div.gallery:hover {
            opacity: 0.6;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }
        /* Create the columns for the grid */
        .column {
            -ms-flex: 25%;
            flex: 25%;
            padding: 0 6px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
        }
        .button{
            border: none;
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
        <li><a href="homePage.php">Home</a></li>
        <li style="float:right"><a class="active" href="profile.php">Profile</a></li>
        <li style="float:right"><a class="active" href="posting.php">Post</a></li>
        </ul>
        <div1 class="parent">
            <!-- get profile photo using php -->
            <img class="one" src="ProfPhotos/<?=$_SESSION["profile_photo"]?>" alt="profilePic" width="500" height="500">
            <div1>
                <p><?php echo $_SESSION["username"];?></p>  <!-- get username -->
                <a class="one" href="editProfile.php"><h3>Edit Profile</h3></a> <!-- link to edit profile -->
                <p><?php echo $_SESSION["bio"];?></p>   <!-- link to bio -->
            </div1>
        </div1>
        <!-- header -->
        <div2 class="parent">
            <h2>Posts</h2>
        </div2>

        <!-- gallery to display user posts -->
        <div class="gallery">
        <form action="proftopost.php" method="post">
            <button type = submit>
              <input type = "image" name="ahh" src="Photos/<?=$uphotos[0]?>" alt="No post" style="width:100%">
              <input type="hidden" name="photo" value="0">
        </button>
    </form>
            
          </div>
        <div class="gallery">
        <form action="proftopost.php" method="post">
            <button type = submit>
              <input type = "image" name="ahh" src="Photos/<?=$uphotos[1]?>" alt="No post" style="width:100%">
              <input type="hidden" name="photo" value="1">
        </button>
    </form>
            
          </div>
          
          <div class="gallery">
          <form action="proftopost.php" method="post">
            <button type = submit>
              <input type = "image" name="ahh" src="Photos/<?=$uphotos[2]?>" alt="No post" style="width:100%">
              <input type="hidden" name="photo" value="2">
        </button>
    </form>
          </div>
          
          <div class="gallery">
          <form action="proftopost.php" method="post">
            <button type = submit>
              <input type = "image" name="ahh" src="Photos/<?=$uphotos[3]?>" alt="No post" style="width:100%">
              <input type="hidden" name="photo" value="3">
        </button>
    </form>
          </div>

    </body> 
    
    
</html> 
