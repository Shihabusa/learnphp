<?php

//session=> it is a way to store information (in variables) to be used across multiple pages. Unlike cookies, the information is not stored on the user's computer but on the server. A session is started with the session_start() function and session variables are set with the $_SESSION superglobal array. Session variables are available to all pages in one application and can be used to store user preferences, login information, and other details about the user's interaction with the website. Sessions can be destroyed with the session_destroy() function.

session_start(); //this will start a session and create a unique session ID for the user

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">username</label><br>
        <input type="text" name="username" id=""><br>
        <label for="">password</label><br>
        <input type="password" name="password" id=""><br>
        <button type="submit" name="submit">Log in</button>

    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["username"])&& !empty($_POST["password"])){
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["password"]=$_POST["password"];
            header("Location: home.php");//this will redirect the user to the home page after successful login
            
        }
        else{
            echo "Username /Password missing <br>";
        }
    }

?>