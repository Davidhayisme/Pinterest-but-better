<?php
session_start();
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
    <li><a href="preHomePage.php">Home</a></li>
    <li style="float:right"><a class="active" href="profile.php">Profile</a></li>
    <li style="float:right"><a class="active" href="posting.php">Post</a></li>
    </ul>
    
    <div class="parent">
        <h2>Create New Post</h2>
    </div>
    
    <form action="Posts.php" method = "post" enctype = "multipart/form-data">
        <div class="column">
            <label for="file">Image:</label>
            <input type="file" id="file" name="file">
            <div id="display_image"></div>
            <label for="caption">Caption:</label>
            <input type="text" id="caption" name="caption"><br><br>
            <label for="store_name">Store Name:</label>
            <input type="text" id="store_name" name="store_name"><br><br>
            <label for="location">Store Address:</label>
            <input type="text" id="location" name="location"><br><br>
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
        <button type="submit" name="submit">Submit</button>
    </form>
    <script>
        /*
        const image_input = document.querySelector("#image_input");

        image_input.addEventListener("change", function() {
        const file_reader = new FileReader();
        file_reader.addEventListener("load", () => {
            const uploaded_image = file_reader.result;
            document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
        });
        file_reader.readAsDataURL(this.files[0]);
        });
        */
    </script>
</body>
</html>