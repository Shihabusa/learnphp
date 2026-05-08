<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getpost using</title>
</head>
<body>
    <!-- <h1>hi bro</h1>
    <form action="getpost.php" method="post">
        <label for="">UserName</label>
        <input type="text" name="Username" id=""><br>
        <label for="">password</label>
        <input type="password" name="password" id=""><br>
        <button type="submit" >Login</button>
    </form> -->
    <h1>hi bro</h1>
    <!-- <form action="getpost.php" method="post">
        <label for="">Quantity</label>
        <input type="text" name="quantity" id=""><br>
        <input type="submit" value="TOTAL">

    </form> -->
    <form action="getpost.php" method="post">
        <label for="">X</label>
        <input type="text" name="X" id=""><br>
        <label for="">Y</label>
        <input type="text" name="Y" id=""><br>
        <label for="">Z</label>
        <input type="text" name="Z" id=""><br>
        <button type="submit" value="total">Calculate</button>
    </form>



</body>
</html>
 <?php
    // $item = "pizza";
    // $price = 100;
    // $total= null;
    // $total=$price * abs($_POST["quantity"]);//abs is used to get the absolute value of the quantity, so that if the user enters a negative number, it will still calculate the total price correctly.
    // echo "the total price of {$_POST["quantity"]} {$item} is {$total}";
    // echo "<br";

    // echo "{$_GET["Username"]} <br>";//no security 
    // echo $_GET["password"];
    // echo "{$_POST["Username"]} <br>";
    // echo "{$_POST["password"]}";

    $x=$_POST["X"];
    $y=$_POST["Y"];
    $z=$_POST["Z"];
    $total=null;
   // $total = $x + $y;
    //$total=abs($x);
    //$total=abs($y);
    //$total=round($x);
    //$total+=round($y);
    ///$total=max($x,$y,$z);
    


    echo $total;

    //$_post is more secure than $_get because it does not show the data in the URL and has a larger data limit.
    //$_get is less secure because it shows the data in the URL and has a smaller data limit.
    //$_post is used for sensitive data such as passwords, while $_get is used for non-sensitive data such as search queries.
    //$_post is also used for forms that require a lot of data, while $_get is used for forms that require a small amount of data.
    ?>