<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    THIS is the home page <br>
    <!-- <a href="index.php">this is login page link</a> -->
     <form action="home.php" method="post">
        <button type="submit" name="logout">Log out</button>
     </form>
</body>
</html>
<?php
    echo "Welcome, " . $_SESSION["username"] . "!";
    echo "<br>Your password is: " . $_SESSION["password"];
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location:index.php");
    }
?>