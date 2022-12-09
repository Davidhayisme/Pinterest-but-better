
<?php
session_start();
$pho = $_SESSION["photos"];
print_r($_SESSION);
if($_SESSION["yea"] == 1){
    $_SESSION["lmao"] = "worked";
}
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
        <li><a href="preHomePage.php">Home</a></li>
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
    <div class="row"> 
      <div class="column">
        <form action="thepost.php" method="post">
            <button type = submit>
          <input name = "img" type = "image" id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" value = "0">
        </button>
        </form>
        <a target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <a target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%" onclick = <?php $_SESSION["thepost"] = $pho[2];?>>
        </a>
        <p id="test1"></p>
        <script>
        var src = <?php echo json_encode($pho);?>;
          for (i = 0; i < Math.round(src.length/4); i++){
            //console.log("Photos/" + src[i]);
            //var src = 'C:/Users/audre/OneDrive/College/Year 3/Software Engineering/images/photo' + i + '.jpg';

            console.log(src[i]);
            document.getElementById("test").src = "Photos/" + src[i];
            //var newID = "\"" + i + "\"";
            var newID = "jeff"+i;
            document.getElementById("test").id = newID;
          }
          console.log("WEEE");
        </script>
      </div>
      <div class="column">
        <a onclick = (<?php $_SESSION["thepost"]?> = 3) target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <a <?php $_SESSION["thepost"] = $pho[4];?>target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <a <?php $_SESSION["thepost"] = $pho[5];?>target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <p></p>
        <script>
            //console.log("why");
            var src = <?php echo json_encode($pho);?>;
            console.log(src[1]);
            console.log(Math.round(src.length/4));
            for (i = Math.round(src.length/4); i < Math.round(src.length/2); i++) {
                console.log(src[i]);
                //var src = 'C:/Users/audre/OneDrive/College/Year 3/Software Engineering/images/photo' + i + '.jpg';
                document.getElementById("test").src = "Photos/" + src[i];
                var newID = "\"" + i + "\"";
                document.getElementById("test").id = newID;
            }
        </script>
      </div>
      <div class="column">
        <a <?php $_SESSION["thepost"] = $pho[6];?>target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <a <?php $_SESSION["thepost"] = $pho[7];?>target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <a <?php $_SESSION["thepost"] = $pho[8];?>target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <p id="test1"></p>
        <script>
            var src = <?php echo json_encode($pho);?>;
            for (i = Math.round(src.length/2); i < Math.round(src.length/2+src.length/4); i++) {
                document.getElementById("test").src = "Photos/" + src[i];
                var newID = "\"" + i + "\"";
                document.getElementById("test").id = newID;
          }
        </script>
      </div>
      <div class="column">
        <a <?php $_SESSION["thepost"] = $pho[9];?>target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <a onclick = <?php $_SESSION["thepost"] = $pho[10];?>target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <a target="_blank" href="thepost.php">
          <img id="test" src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\images\photo4.jpg" alt="alternatetext" style="width:100%">
        </a>
        <p id="test1"></p>
        <script>
            console.log("WAT");
            //console.log("WDOJANoipf");
            var src = <?php echo json_encode($pho);?>;
            console.log(src.length);
            for (i = Math.round(src.length/2+src.length/4); i < Math.round(src.length); i++) {
            document.getElementById("test").src = "Photos/" + src[i];
            var newID = "\"" + i + "\"";
            document.getElementById("test").id = newID;
          }
        </script>
      </div>
    </div>
        
    
    </body>
    </html>
    