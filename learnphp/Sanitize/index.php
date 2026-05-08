<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize the input</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" ><br>
    <label for="email">email:</label><br>
    <input type="text" name="email"><br>
    <button type="submit" name="submit" value="submit">Submit</button><br>

    </form>
</body>
</html>

<?php 
//sanitization
    // if(isset($_POST["submit"])){
    //     $user=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    //     $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        
    //     $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        
    //     echo "hello ". $user ."<br>";
    //     echo "your age :". $age ."<br>"; 
    // }   echo "YOUR email".$email ."<br>";

    //validation
    if(isset($_POST["submit"])){
        $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        
        if(empty($age)){
            echo "YOUr number is not valid";
        }else{
            echo "your age is ".$age;
        }
        $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
        if(empty($email)){
            echo "YOUr email is not valid";
        }else{
            echo "your email is ".$email;
        }
    }
?>