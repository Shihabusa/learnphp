<?php
    include("database.php");
    $user="hasan";
    $pass="la1212";
    $hash=password_hash($pass,PASSWORD_DEFAULT);//hashing the password before storing it in the database

    $sql="INSERT INTO user(user,password) VALUES('$user','$hash')";
    
    try{
        mysqli_query($conn,$sql);//insert data intu database
        echo "user is now registered";
    }catch(mysqli_sql_exception){
        echo "could not regestered";
    }
    
    
    mysqli_close($conn);


?>