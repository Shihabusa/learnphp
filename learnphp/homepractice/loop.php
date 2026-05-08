<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> For loop</title>
</head>
<body>
    <h1>lets try loop</h1>
    <?php
    for($i=1;$i<4;$i++){
        for($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo '<br>';
    }
    ?>
     <h1>lets try 2nd loop</h1>
    <?php
    $char="A";
    for($i=3;$i>0;$i--){
        for($j=1;$j<=$i;$j++){
            echo " $char ";
            $char++;
        }
        echo '<br>';
    }
    ?>
    <h1>lets try 3rd loop</h1>
    <?php
    $char="A";
    for($i=1;$i<4;$i++){
        for($j=1;$j<=$i;$j++){
            echo " $char ";
                $char++;
        }
        echo '<br>';
    }
    ?>
     <h1>lets try 2nd loop</h1>
    <?php
    
    for($i=3;$i>0;$i--){
        for($j=1;$j<=$i;$j++){
            echo " $j";
          
        }
        echo '<br>';
    }
    ?>
</body>
</html>