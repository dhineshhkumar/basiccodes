<?php

// local variable

// function local(){
//     $x = 5;
//     $y = 6;
//     $c = $x + $y;
//     echo "The value of the c is $c";
// }

// // static variable 

// function sat(){
//     static $x = 0;
//     echo $x;
//     $x++;
// }
// sat();
// echo "<br>";
// sat();
// echo "<br>";
// sat();

// global variable

$x = 5;
 $y = 6;
function code(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
code();
echo $z."<br>";

$x = 5;
function sample(){
    echo "Print the number  ". $GLOBALS['x'];
}
sample();

?>