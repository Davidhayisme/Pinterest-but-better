<?php
session_start();
$pho = $_SESSION["photos"];
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
        
        /* button format */
        .button{
            border: none;
            background-color: #52554a;
            color: white;
            padding: 10px 14px;
            text-decoration: none;
            display: block;
            text-align: center;
            font-family: Georgia, serif;
            font-size: 16px;
            width: 100%;
        }
        .button:hover{
            background-color: #4D5F0F;
        }
        .button1{
            border: none;
            background-color: white;
            
        }

    
    </style>
    </head>
    <body>
        <script>
            console.log("WOWYWOWO");
            function saveStuff(num){
                console.log("fankosghpibas");
                var arr = <?php echo json_encode($pho);?>;
                <?php $_SESSION["yea"]?> = "AHH";
                window.location.href = "thepost.php";
            }
            </script>
        <!-- create header and navigation tab -->
        <div class="header">
            <h1>Hidden Treasures</h1>
        </div>
        <ul>
        <!-- links for the tabs -->
        <li><a href="preHomePage.php">Home</a></li>
        <li style="float:right"><a class="active" href="contactUs.php">Conntact US</a></li>
        <li style="float:right"><a class="active" href="profile_posts.php">Profile</a></li>
        <li style="float:right"><a class="active" href="posting.php">Post</a></li>
        <li style="float:right" class="filter">
        
            <!-- form for each button in the dropdown, links to the homepage with only the selected aesthetic -->
        <form action = "filterposts.php" method="post">
            <a href="javascript:void(0)" class="dropbtn">Aesthetic</a>
            <div class="filter-content">
            <button class = "button" type = submit>
              <input class = "button" type=button value="Indie">
              <input type="hidden" name="filter" value="2">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Grunge">
              <input type="hidden" name="filter" value="3">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Soft">
              <input type="hidden" name="filter" value="4">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Dark & light academia">
              <input type="hidden" name="filter" value="5">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Baddie">
              <input type="hidden" name="filter" value="6">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="VISCO">
              <input type="hidden" name="filter" value="7">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="EMO">
              <input type="hidden" name="filter" value="8">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Fairycore">
              <input type="hidden" name="filter" value="9">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Goth">
              <input type="hidden" name="filter" value="10">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Cottagecore">
              <input type="hidden" name="filter" value="11">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="Y2K">
              <input type="hidden" name="filter" value="12">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="90's">
              <input type="hidden" name="filter" value="13">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="80's">
              <input type="hidden" name="filter" value="14">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="70's">
              <input type="hidden" name="filter" value="15">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="60's">
              <input type="hidden" name="filter" value="16">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="50's">
              <input type="hidden" name="filter" value="17">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="40's">
              <input type="hidden" name="filter" value="18">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="30's">
              <input type="hidden" name="filter" value="19">
              </button>
        </form>
        <form action = "filterposts.php" method="post">
              <button class = "button" type = submit>
              <input class = "button" type=button value="20's">
              <input type="hidden" name="filter2" value="20">
              </button>
            </div>
        </form>
        </li>
        </ul>

        <!-- grid of images -->    
    <div class="row"> <!-- rows across -->
      <div class="column"> <!-- columns down -->
        <form action="thepost.php" method="post">
            <button class = "button1">  <!-- image as a button to link to postpage -->
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="0">
        </button>
        </form>
        <form action="thepost.php" method="post">
            <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="1">
        </button>
        </form>
        <form action="thepost.php" method="post">
            <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="2">
        </button>
        </form>
        <p id="test1"></p>
        <!-- script to loop through images and display in html-->
        <script>
        //get the src from php
        var src = <?php echo json_encode($pho);?>;  
          for (i = 0; i < 3; i++){
            
            if(src[i] != null){
                    document.getElementById("test").src = "Photos/" + src[i];   //change the src of the default image
                }
                else{
                    document.getElementById("test").src = "Default/white.PNG";  //change the id to access later
                }
            var newID = "jeff"+i;
            document.getElementById("test").id = newID;
          }
          console.log("WEEE");
        </script>
      </div>
      <div class="column">
      <form action="thepost.php" method="post">
        <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="3">
        </button>
        </form>
        <form action="thepost.php" method="post">
        <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="4">
        </button>
        </form>
        <form action="thepost.php" method="post">
        <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="5">
        </button>
        </form>
        <p></p>
        <script>
            var src = <?php echo json_encode($pho);?>;
            console.log(src[1]);
            console.log(Math.round(src.length/4));
            for (i = 3; i < 6; i++) {
                console.log(src[i]);
                
                if(src[i] != null){
                    document.getElementById("test").src = "Photos/" + src[i];
                }
                else{
                    document.getElementById("test").src = "Default/white.PNG";
                }
                var newID = "\"" + i + "\"";
                document.getElementById("test").id = newID;
            }
        </script>
      </div>
      <div class="column">
      <form action="thepost.php" method="post">
      <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="6">
        </button>
        </form>
        <form action="thepost.php" method="post">
        <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="7">
        </button>
        </form>
        <form action="thepost.php" method="post">
        <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="8">
        </button>
        </form>
        <p id="test1"></p>
        <script>
            var src = <?php echo json_encode($pho);?>;
            for (i = 6; i < 9; i++) {
                if(src[i] != null){
                    document.getElementById("test").src = "Photos/" + src[i];
                }
                else{
                    document.getElementById("test").src = "Default/white.PNG";
                }
                var newID = "\"" + i + "\"";
                document.getElementById("test").id = newID;
          }
        </script>
      </div>
      <div class="column">
      <form action="thepost.php" method="post">
      <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="9">
        </button>
        </form>
        <form action="thepost.php" method="post">
        <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="10">
        </button>
        </form>
        <form action="thepost.php" method="post">
        <button class = "button1">
          <input name = "ahhh" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "imagine">
          <input type="hidden" name="photo" value="11">
        </button>
        </form>
        <p id="test1"></p>
        <script>
            console.log("WAT");
            var src = <?php echo json_encode($pho);?>;
            console.log(src.length);
            for (i = 9; i < 12; i++) {
                if(src[i] != null){
                    document.getElementById("test").src = "Photos/" + src[i];
                }
                else{
                    document.getElementById("test").src = "Default/white.PNG";
                }
            var newID = "\"" + i + "\"";
            document.getElementById("test").id = newID;
          }
        </script>
      </div>
    </div>
        
    
    </body>
    </html>
    
