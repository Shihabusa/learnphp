<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label for="">username</label><br>
    <input type="text" name="username" id=""><br>
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
    //$_SERVER is a superglobal variable in PHP that contains information about headers, paths, and script locations.
    //$_SERVER["PHP_SELF"] returns the filename of the currently executing script. It is often used in forms to specify that the form should be submitted to the same page.
    //$_SERVER["SERVER_NAME"] returns the name of the server host under which the current script is executing. It is often used to create absolute URLs for links and form actions.
    // foreach($_SERVER as $key => $value){
    //     echo "{$key} ={$value} <br>";
    // }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST["username"])){
            echo "Welcome, " . $_POST["username"] . "!";
        }
        else{
            echo "Username is missing <br>";
        }
    }
?>