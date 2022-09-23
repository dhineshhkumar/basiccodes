<?php

// while

// $x = 10;

// while ($x <= 20) {
//     echo "the value of x : $x <br>";
//     $x++;
// }

// do-while 

// $y = 10;

// do{
//     echo "the value of y : $y <br>";
//     $y++;
// }
// while($y <= 30);

//for
// $c = 1;
// for ($c=1; $c <=10 ; $c++) { 
//     echo "the value of c : $c <br>";
// }

// foreach

// $s = array("amutha"=>"6","pryanka"=>"11","preetha"=>"5");
// foreach($s as $arr){
//     echo "<pre>";
//     print_r ($arr);
//     echo "</pre>";
// }

// $s = array("amutha"=>"6","pryanka"=>"11","preetha"=>"5");
// foreach($s as $arr => $c){
//     echo "<pre>";
//     echo $arr ." => " .$c;
//     echo "</pre>";
// }

// break

// for ($i=0; $i <= 10 ; $i++) { 
//     if($i == 6){
//         break;
//     }
//     echo $i;
// }

// $x = 10;
// while($x <= 20){
//     if($x == 15){
//         break;
//     }
//     echo $x;
//     $x++;
// }
// continue

// for ($i=0; $i <= 10 ; $i++) { 
//         if($i == 6){
//             continue;
//         }
//         echo $i;
//     }

    $x = 10;
    while($x <= 20){
        if($x == 15){
            $x++;
            continue;
        }
        echo $x;
        $x++;
    }
?>