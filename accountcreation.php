<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
<style>
        /* Header: Hidden Treasures */
        h1 {
            color: #eeeeee;
            font-size: 30px;
            font-family: "Sofia", sans-serif;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #eeeeee;
            font-size: 30px;
            font-family: Georgia, serif;
            text-align: center;
            padding: 60px;
        }

        /* label format */
        label,p {
            font-family: Georgia, serif;
            font-size: 20px;
        }

        /* input Format */
        input[type=text], input[type=password], input[type=email],select {
            font-family: Georgia, serif;
            font-size: 20px;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        #bio{
            font-family: Georgia, serif;
            font-size: 20px;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            height: 200%;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4D5F0F;
            font-family: Georgia, serif;
            font-size: 20px;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #52554a;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px 20px 20px 20px;
        }
        body {
            background-color: #57427e
        }
</style>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    
    var x = document.getElementById("please");  
        
    
const options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  const crd = pos.coords;
  document.getElementById("please").innerHTML = 'Your current position is:';
  console.log(`Latitude : ${crd.latitude}`);
  console.log(`Longitude: ${crd.longitude}`);
  console.log(`More or less ${crd.accuracy} meters.`);
  var d = crd.latitude;
  var c = crd.longitude;

 
}

//find any errors with account creation
function error(err) {
    document.getElementById("please").innerHTML = `ERROR(${err.code}): ${err.message}`;
  
}

function getLocation() {
  if (navigator.geolocation) {
    window.navigator.geolocation.getCurrentPosition(success, error, options);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
</script>
<!-- header -->
    <h1>Hidden Treasures</h1>
    <div>
        <!-- form for account creation -->
        <form action="usolog.php" method="post" enctype = "multipart/form-data" novalidate>
            <label for="email">Email:</label>   <!-- input email -->
            <input type="email" id="email" name="email" placeholder="Unused Email..."><br>
            <label for="username">Username:</label> <!-- input username -->
            <input type="text" id="username" name="username" placeholder="Unused Username..."><br>
            <label for="password">Password:</label> <!-- input password -->
            <input type="password" id="password" name="password" placeholder="Password..." ><br>
            <label for="cpassword">Confirm Password:</label>    <!-- confirm password -->
            <input type="password" id="cpassword" name="cpassword" placeholder="CONFIRM" ><br>
            <label type="text">Bio</label>  <!-- input bio -->
            <input type="text" id="bio" name="bio" placeholder="Write something about yourself!"><br>
            <label for="file">Please upload a profile picture</label>   <!-- upload profile picture -->
            <input type="file" name= "file">
            <input type="submit" value="Submit" name="location" onclick="getLocation()">
            <p>Already have an account? <a href="index.php"> Log in!</a></p>    <!-- goes to login -->
        </form>
    </div>
    <!-- header -->
    <h2> Account Creation </h2>
    
</body>
</html>
