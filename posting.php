<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">   
<style>
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
        h2 {
            color: black;
            font-size: 25px;
            font-family: Georgia, serif;
        }
        a1:link {
            color: black;
            font-size: 20px;
            font-family: Georgia, serif;
        }
        img {
            width: 200px;
            height: auto;
        }   
        img.one {
            width: 200px;
            height: auto;
            border-radius: 50%;
        }   
        h3 {
            color: black;
            font-size: 15px;
            font-family: Georgia, serif;
        }
        div{
            padding-top: 10px;
            /*padding-bottom: 10px;*/
        }
       
        :root {
            --username: JohnDoe22;
        }

        div.gallery {
            margin: 20px 10px 10px 10px;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            opacity: 0.6;
        }

        div.gallery img {
            width: 100%;
            height: auto;
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
        .column {
            float: left;
            width: 50%;
            padding: 15px;
        }

        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
</style>
</head>

<body>
    <div class="header">
        <h1>Hidden Treasures</h1>
    </div>
    <ul>
    <li><a href="homePage.php">Home</a></li>
    <li style="float:right"><a class="active" href="userProfile.html">Profile</a></li>
    <li style="float:right"><a class="active" href="posting.html">Post</a></li>
    <li style="float:right"><a class="active" href="#filter">Filter</a></li>
    </ul>
    
    <div class="parent">
        <h2>Create New Post</h2>
    </div>
    
    <form action="posts.php" method = "post">
        <div class="column">
            <label for="image">Image:</label>
            <input type="file" id="image_input" accept="image/jpeg, image/png, image/jpg">
            <div id="display_image"></div>
            <label for="caption">Caption:</label>
            <input type="text" id="caption" name="caption"><br><br>
            <label for="sname">Store Name:</label>
            <input type="text" id="sname" name="sname"><br><br>
            <label for="address">Store Address:</label>
            <input type="text" id="address" name="address"><br><br>
        </div>
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

        <p>Tell us about your item (select all categories that apply)</p>
        <input type="checkbox" id="cottagecore" name="category" value="cottagecore">
        <label for="cottagecore">Cottagecore</label><br>
        <input type="checkbox" id="y2k" name="category" value="y2k">
        <label for="cottagecore">Y2K</label><br>
        <input type="checkbox" id="academia" name="category" value="academia">
        <label for="cottagecore">Academia</label><br>
        <input type="checkbox" id="goth" name="category" value="goth">
        <label for="cottagecore">Goth</label><br>

        <p></p>
        <input type="submit" value="Submit">
    </form>

    <script>
        const image_input = document.querySelector("#image_input");

        image_input.addEventListener("change", function() {
        const file_reader = new FileReader();
        file_reader.addEventListener("load", () => {
            const uploaded_image = file_reader.result;
            document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
        });
        file_reader.readAsDataURL(this.files[0]);
        });
    </script>
</body>
</html>