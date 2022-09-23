<?php 
/*--- index array ----*/
/*
$x = array(40,50,60,20,70);
echo '<pre>';
print_r($x);
echo '</pre>';

$y = array(20,10,50,70);
$arrlength = count($y);

for($x=0; $x<$arrlength; $x++){
	echo $y[$x];
	echo "<br>";
}
*/
/* ----- associative array ------*/

$x = array(
    'name' => 'dhinesh',
    'age' => 22,
    'phone' => 9648494890
);
echo '<pre>';
print_r($x);
echo '</pre>';

$x = array(
    'name' => 'dhinesh',
    'age' => 22,
    'phone' => 9648494890
);
foreach($x as $var){
    print_r($var);
    echo "<br>";
}
// foreach($x as $var => $r){
//     echo "key =  " .$var. "   value =".$r;
//     echo "<br>";
// }

/*---- multi dimensional array -----*/
/*
$x = array(
    array(
        'id' => 304,
        'name' => 'dhinesh',
        'phone' => 9866557679
    ),
    array(
        'id' => 305,
        'name' => 'ganesh',
        'phone' => 9866557564
    ),
    array(
        'id' => 306,
        'name' => 'ramesh',
        'phone' => 9866557329
    )
    );
    echo "<pre>";
    print_r($x);
    echo "</pre>";

    $x = array(
        array(
            'id' => 304,
            'name' => 'dhinesh',
            'phone' => 9866557679
        ),
        array(
            'id' => 305,
            'name' => 'ganesh',
            'phone' => 9866557564
        ),
        array(
            'id' => 306,
            'name' => 'ramesh',
            'phone' => 9866557329
        )
        );
        echo $x[1]['id']."<br>";
        echo $x[0]['name']."<br>";
        echo $x[2]['name']."<br>";

        echo "<br>";

        $x = array(
            array(
                'id' => 304,
                'name' => 'dhinesh',
                'phone' => 9866557679
            ),
            array(
                'id' => 305,
                'name' => 'ganesh',
                'phone' => 9866557564
            ),
            array(
                'id' => 306,
                'name' => 'ramesh',
                'phone' => 9866557329
            )
            );

            foreach($x[0] as $key => $value){
                echo $value.'<br>';
            }
*/
            /*--------- array sort --------*/

/*--- <sort---->*/

// $number = array(80,40,50,20,60,10,30,90,70);
// sort($number);
// echo '<pre>';
// print_r($number);
// echo '</pre>';

// echo "<br>";
// /*---- rsort ------*/
// $number = array(80,40,50,20,60,10,30,90,70);
// rsort($number);
// echo '<pre>';
// print_r($number);
// echo '</pre>';

// echo "<br>";
// /*------ ksort -----*/
// $number = array(

//     2 => 80,
//     4 => 40,
//     1 => 50,
//     3 => 20,
//     6 => 60, 
//     9 => 10,
//     5 => 30,
//     7 => 90,
//     8 => 70);

// ksort($number);
// echo '<pre>';
// print_r($number);
// echo '</pre>';

// echo "<br>";
// /*----------- krsort --------- */
// $number = array(

//     2 => 80,
//     4 => 40,
//     1 => 50,
//     3 => 20,
//     6 => 60, 
//     9 => 10,
//     5 => 30,
//     7 => 90,
//     8 => 70);

// krsort($number);
// echo '<pre>';
// print_r($number);
// echo '</pre>';

// echo "<br>";
// /*----------------- asort ---------- */
// $number = array(

//     2 => 80,
//     4 => 40,
//     1 => 50,
//     3 => 20,
//     6 => 60, 
//     9 => 10,
//     5 => 30,
//     7 => 90,
//     8 => 70);

// asort($number);
// echo '<pre>';
// print_r($number);
// echo '</pre>';

// echo "<br>";
// /*------------------- arsort ----------------*/
// $number = array(

//     2 => 80,
//     4 => 40,
//     1 => 50,
//     3 => 20,
//     6 => 60, 
//     9 => 10,
//     5 => 30,
//     7 => 90,
//     8 => 70);

// arsort($number);
// echo '<pre>';
// print_r($number);
// echo '</pre>';
 ?>