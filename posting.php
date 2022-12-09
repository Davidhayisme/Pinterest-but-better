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
        
        /* image format */
        img {
            width: 200px;
            height: auto;
        }   
          
        
        div{
            padding-top: 10px;
            /*padding-bottom: 10px;*/
        }
        
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
        
        /* Format for the form */
        .column {
            float: left;
            width: 50%;
            padding: 15px;
        }
        
        .row:after {
            content: "";
            display: table;
            cl
            ear: both;
        }
        .center h1 {
            
            text-align: center;
            padding: 20px;
            
        }
        .center{
          text-align: center;
          width: 200px; 
          border: 4px;
          border-color: black;
          padding: 10px 10px;
        }
        textarea{
          text-align: center;
          height: 50px;
          width: 99%;
          border-color: rgb(10, 94, 10);

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
    </ul>
    
    <!-- header -->
    <div class="parent">
        <h2>Create New Post</h2>
    </div>
    
    <!-- form for posting-->
    <form action="Posts.php" method = "post" enctype = "multipart/form-data">
        <div class="column">
            <label for="file">Image:</label>    <!-- upload image-->
            <input type="file" id="file" name="file">
            <div id="display_image"></div>  <!-- display image -->
            <label for="caption">Caption:</label>   <!-- upload caption -->
            <input type="text" id="caption" name="caption"><br><br>
            <label for="store_name">Store Name:</label> <!-- upload store name -->
            <input type="text" id="store_name" name="store_name"><br><br>
            <label for="location">Store Address:</label>    <!-- upload store address -->
            <input type="text" id="location" name="location"><br><br>
        </div>
        <!-- rating of store -->
        <p>Store Rating out of 5:</p>
        <div class="parent">
            <input type="radio" id="one" name="rating" value="one">
            <label for="one">1</label><br>
            <input type="radio" id="two" name="rating" value="two">
            <label for="two">2</label><br>
            <input type="radio" id="three" name="rating" value="three">
            <label for="three">3</label><br>
            <input type="radio" id="four" name="rating" value="four">
            <label for="four">4</label><br>
            <input type="radio" id="five" name="rating" value="five">
            <label for="five">5</label><br>
        </div>
        <p></p>
        <!-- dropdown for the aesthetic -->
        <label for="aesthetic">Aesthetic</label>
        <select id="aesthetic" name = "aesthetic">
            <option value = "1" selected>ALL</option>
            <option value = "2">Indie</option>
            <option value = "3">Grunge</option>
            <option value = "4">Soft</option>
            <option value = "5">Dark & light academia</option>
            <option value = "6">Baddie</option>
            <option value = "7">VISCO</option>
            <option value = "8">EMO</option>
            <option value = "9">Fairycore</option>
            <option value = "10">Goth</option>
            <option value = "11">Cottagecore</option>
            <option value = "12">Y2K</option>
            <option value = "13">90's</option>
            <option value = "14">80's</option>
            <option value = "15">70's</option>
            <option value = "16">60's</option>
            <option value = "17">50's</option>
            <option value = "18">40's</option>        
            <option value = "19">30's</option>
            <option value = "20">20's</option></select>
            <p></p>
            <form method = "post">
                
                <br>
                
                <br>
                <textarea placeholder="comments"></textarea>
                <div class = "btn">
                  <input type="submit" value='Comment' id = "submit">
                  <h3 id ="submit" onclick="myFunction()"></h3>
                </div>
                
        </form>
        
        <button type="submit" name="submit">Submit</button> <!-- submit button -->
        
       </form>
       
</body>
</html>
