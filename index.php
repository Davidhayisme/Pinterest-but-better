<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
<style>
        /* Header format */
        h1 {
            color: #eeeeee;
            font-size: 30px;
            font-family: "Sofia", sans-serif;
            text-align: center;
            padding: 30px;
        }

        h2 {
            color: #eeeeee;
            font-size: 30px;
            font-family: Georgia, serif;
            text-align: center;
            padding: 60px;
        }

        /* Label format */
        label {
            font-family: Georgia, serif;
            font-size: 20px;
        }
        
        /* Input format */
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
        #bio select{
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

        input[type=submit],button {
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
        
<!-- Header -->
<h1>Hidden Treasures</h1>
    <div>
        <!-- Form for login -->
        <form method="POST" action="login.php">
            <label for="username">Username:</label>     <!-- Upload username -->
            <input type="text" id="username" name="username" placeholder="Username :D"><br>
            <label for="password">Password:</label>     <!-- Upload password -->
            <input type="password" id="password" name="password" placeholder="Password please!" ><br>
            <button> Log in </button>   <!-- login submit button -->
            <p> Don't have an account? <a href="accountcreation.php"> Create Account! </a>      <!-- button to create new account -->
        </form>
    </div>
    
</body>
</html>
