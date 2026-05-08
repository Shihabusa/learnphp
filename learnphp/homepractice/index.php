<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getpost using</title>
</head>
<body>
    <h1>form make</h1>
    <form action="index.php" method="get">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username"><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="log in">
    <!-- <button type="submit" value="log in">Submit</button> -->
</form>
</body>
</html>
<?php
    echo $_GET["username"]."<br>";
    echo $_GET["password"];
?>