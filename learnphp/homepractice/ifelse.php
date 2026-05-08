<?php
// $x = 5;
// if ($x > 0) {
//     echo "x is positive";
// } else {
//     echo "x is not positive";
// }

//switch case
// $day = "Monday";
// switch ($day) {
//     case "Monday":
//         echo "Today is Monday";
//         break;
//     case "Tuesday":
//         echo "Today is Tuesday";
//         break;
//     case "Wednesday":
//         echo "Today is Wednesday";
//         break;
//     case "Thursday":
//         echo "Today is Thursday";
//         break;
//     case "Friday":
//         echo "Today is Friday";
//         break;
//     case "Saturday":
//         echo "Today is Saturday";
//         break;
//     case "Sunday":
//         echo "Today is Sunday";
//         break;
//     default:
//         echo "Invalid day";
// }

$grade = "A+";
$marks=80;
switch($marks){
    case $marks>=90:
        $grade="A+";
        break;
    case $marks>=80:
        $grade="A";
        break;
    case $marks>=70:
        $grade="B+";
        break;
    case $marks>=60:
        $grade="B";
        break;  
    case $marks>=50:
        $grade="C+";
        break;
    case $marks>=40:
        $grade="C";
        break;
    case $marks>=30:
        $grade="D+";
        break;  
}






?>