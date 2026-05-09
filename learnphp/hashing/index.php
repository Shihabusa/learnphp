<?php
    //hashing=> it is a one way encryption technique which is used to convert a plain text into a fixed length string of characters which is not reversible. it is used to store the password in the database in a secure way. it is also used to verify the integrity of the data. it is also used to generate unique identifiers for the data. it is also used to generate unique keys for the data. it is also used to generate unique tokens for the data. 
    //password_hash() function is used to create a password hash. it takes two parameters,
    $password = "123456";
    $hash=password_hash($password, PASSWORD_DEFAULT);
    //echo "Password: ".$password."<br>";
    //echo "Hash: ".$hash."<br>";
    if(password_verify($password, $hash)){
        echo "Password is valid";
    }else{
        echo "Password is invalid"; 
    }


    ?>