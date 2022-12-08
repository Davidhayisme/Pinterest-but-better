<?php
session_start();
print_r($_SESSION);
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
        h1 {
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
        .active {
            background-color: #4D5F0F;
        }

        li.filter {
            display: inline-block;
        }

        /* Create filter button */
        .filter-content {
            display: none;
            position: absolute;
            background-color: #52554a;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .filter-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .filter-content a:hover {
            background-color: #4D5F0F;
          }

        .filter:hover .filter-content {
            display: block;
        }

        * {
            box-sizing: border-box;
        }
        
        /* Create the rows for the grid */
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0 2px;
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
    
    </style>
    </head>
    <body>
        <!-- create header and navigation tab -->
        <div class="header">
            <h1>Hidden Treasures</h1>
        </div>
        <ul>
        <li><a href="homePage.php">Home</a></li>
        <li style="float:right"><a class="active" href="profile.php">Profile</a></li>
        <li style="float:right"><a class="active" href="posting.php">Post</a></li>
        <li style="float:right" class="filter">
            <a href="javascript:void(0)" class="dropbtn">Aesthetic</a>
            <div class="filter-content">
              <a href="#">Cottagecore</a>
              <a href="#">Y2K</a>
              <a href="#">Academia</a>
              <a href="#">Goth</a>
            </div>
        </li>
        </ul>
    
    <!-- Create grid for image gallery-->
    <div class="row"> 
      
      <div class="column">
        <a target="_blank" href="postPage.html">
          <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\Milano.jpg" alt="Milano" style="width:100%">
        </a>
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg" alt="Mountains" style="width:100%">
        </a>
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg" alt="Ostello" style="width:100%">
        </a>
        <a target="_blank" href="postPage.html">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Italian\new york.jpg" alt="NY" style="width:100%">
        </a>
        
      </div>
      <div class="column">
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg" alt="Ostello" style="width:100%">
        </a>
        <a target="_blank" href="postPage.html">
          <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\Milano.jpg" alt="Milano" style="width:100%">
        </a>
        <a target="_blank" href="postPage.html">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Italian\new york.jpg" alt="NY" style="width:100%">
        </a>
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg" alt="Mountains" style="width:100%">
        </a>
        
      </div>
      <div class="column">
        <a target="_blank" href="postPage.html">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Italian\new york.jpg" alt="NY" style="width:100%">
        </a>
        <a target="_blank" href="postPage.html">
          <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\Milano.jpg" alt="Milano" style="width:100%">
        </a>
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg" alt="Ostello" style="width:100%">
        </a>
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg" alt="Mountains" style="width:100%">
        </a>
        
        
      </div>
      <div class="column">
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg" alt="Ostello" style="width:100%">
        </a>
        <a target="_blank" href="postPage.html">
          <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\Milano.jpg" alt="Milano" style="width:100%">
        </a>
        <a target="_blank" href="postPage.html">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Italian\new york.jpg" alt="NY" style="width:100%">
        </a>
        <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg">
            <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg" alt="Mountains" style="width:100%">
        </a>
        
        
      </div>
    </div>
    
    </body>
    </html>
    