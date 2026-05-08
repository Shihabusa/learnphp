<?php
    //$username = "My roll is admin";
    //$password="283-322-423";

    //$username=strtolower($username);
    //$username=strtoupper($username);
    //$username=trim($username);//this function is used to remove the white space from the beginning and end of the string
   //$username=substr($username, 3, 5);//this function is used to extract a part of the string
    //$username=str_replace("rr", "admin", $username);//this function is used to replace a part of the string with another string
    //$username=str_pad($username, 30, "*");//this function is used to pad a string to a certain length with another string
    //$username=strrev($username);//this function is used to reverse a string
    //$username = str_shuffle($username);//this function is used to shuffle the characters of a string
    //$compare=strcmp($username,2222);//this function is used to compare two strings
    //$username=str_repeat($username, 3);//this function is used to repeat a string a certain number of times
    //$username=strlen($username);//this function is used to get the length of a string
    //$username=md5($username);//this function is used to encrypt a string using the MD5 algorithm
    //$username=strpos($username, "i");//this function is used to find the position of the first occurrence of a substring in a string
    //echo "Username: $username <br>";
   // echo "Password: $password <br>";
    //echo "Comparison: $compare <br>";

    //$full=explode(" ",$username);//this function is used to split a string into an array based on a delimiter

    //foreach($full as $value){
     //   echo "$value <br>";
    //}//echo $full[0]." ".$full[1]." ".$full[2]." ".$full[3]." ".$full[4]."<br>";
    $user=array("admin", "user", "guest");
    $user=implode("--", $user);//this function is used to join an array into a string with a delimiter)
    echo "Users: $user <br>";

?>