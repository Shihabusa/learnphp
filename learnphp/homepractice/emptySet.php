
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="emptySet.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id=""><br>
        <label for="">password</label>
        <input type="password" name="password" id=""><br>

        <input type="submit" name="login" value="login">
    </form>

</body>
</html>
<?php
//empty()=> it is used to check whether a variable is empty or not. It returns true if the variable is empty and false if it is not empty.
//isset()=> it is used to check whether a variable is set or not. It returns true if the variable is set and false if it is not set.

// $username=null;
// echo isset($username)."<br>";//true

// if(empty($username)){
//     echo "username is empty";
// }else{
//     echo "username is not empty";   
// }
//-----------------------------------
// foreach($_POST as $key=>$value){
//     if(empty($value)){
//         echo $key ."is empty<br>";
//     }else{
//         echo $key."=".$value."<br>";
//     }
// }

if(isset($_POST["login"])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
        echo "username is empty<br>";
    }
    elseif(empty($password)){
        echo "password is empty<br>";
    }   else{
        echo "HEllow ".$username." you have successfully logged in";
    }
}





?>