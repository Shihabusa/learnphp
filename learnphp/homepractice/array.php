
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <form action="array.php" method="post">
        <label for="Country">Enter a country name:</label>
        <input type="text" name="Country" id="Country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 

// $food =["apple","pizza","banana"];
// echo $food[0]."<br>";
// echo $food[1]."<br>";
// echo $food[2]."<br>";
// array_push($food,"grapes","orange","mango");
 
// array_pop($food);
// array_shift($food);
// array_reverse(($food));
// foreach($food as $foods){
//     echo $foods ."<br>";
// }
//associative array
    $capital=array("india"=>"delhi",
    "usa"=>"Washington dc","russia"=>"moscow","china"=>"beijing",
    "turkey"=>"ankara");

    $capitals=$capital[$_POST['Country']];
    echo "the capital of ".$_POST['Country']." is ".$capitals."<br>";
    // echo $capital["india"]."<br>";
    // // echo $capital["usa"]."<br>";
    // $capital["france"]="paris";
    // array_pop($capital);
    // array_shift($capital);//first element will be removed
    // $keys=array_keys($capital);
    // $values=array_values($capital);
    
    // foreach($capital as $key =>$value){
    //     echo "the capital of ".$key." is ".$value."<br>";
    // }

?>