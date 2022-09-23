<?php
// if
/*
$x = 10;
 if ($x == 10) {
    echo "number is correct";
 }
*
// if..else 
 $c = 20;
 
 if($c < 10){
    echo "number is correct";
 }
 else{
    echo "number is not correct";
 }

 // else..if

 $f = 30;

 if($f > 50){
    echo "number is correct";
 }
 elseif($f > 40){
    echo "required number is correct";
 }
 else {
    echo "number is not correct";
 }
*/
 // nested if

 $age = 20;
 $nationality = "american";

 if($age > 18){
    if ($nationality == "indian") {
        echo "your eligible for vote";
    }
   
 else{
    echo "your not eligible for vote";
}
 }
 else{
   echo "your not eligible";
 }

// switch statement
/*
$color = "red";

switch ($color) {
    case 'green':
        echo "the color is green";
        break;
        case 'blue':
            echo "the color is blue";
            break;
            case 'red':
                echo "the color is red";
                break;
    
    default:
        echo "there is no such color";
        break;
}
*/
?>