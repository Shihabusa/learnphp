<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobtn.php" method="post">
        <input type="radio" name="card" value ="ViSA"id="">Visa<br>
        <input type="radio" name="card" value="Mastercard" id="">Master<br>
        <input type="radio" name="card" value="American ex" >American ex<br>
        <button type="submit" name="confirm" >Confirm</button>

    </form>
</body>
</html>
<?php 
if(isset($_POST["confirm"])){
    $card=$_POST["card"];//name value must dite hbe
    echo $card ."card";//value print hoy
}

?>