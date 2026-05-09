<?php
    //cookie=> it is a small piece of data that is stored on the client's computer by the web browser while browsing a website. It is used to remember the user's preferences, login information, and other details about the user's interaction with the website. Cookies are sent back to the server with each request, allowing the server to identify the user and provide a personalized experience. Cookies can be set to expire after a certain period of time or can be deleted by the user at any time.
    //setcookie(name, value, expire, path, domain, secure, httponly);
    setcookie("fav_food","pizza",time()+(60*60*24*7),"/"); //this will set a cookie named fav_food with the value pizza that will expire after 7 days and will be available for the entire website
    setcookie("fav_Drink","cokacola",time()+(60*60*24*2),"/");
    setcookie("fav_Dessert","ice cream",time()+(60*60*24*3),"/");

    // foreach($_COOKIE as $key=>$value){
    //     echo $key." value is ".$value ."<br>";

    // }
    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]}!!!";
    }
    else{
        echo "i dont know whats your favorite food";
    }


?>