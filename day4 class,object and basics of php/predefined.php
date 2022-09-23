<?php

/* ---- array_change_key_case -------*/

$a = array(
    'name' => 'dhinesh',
    'id' => 309,
    'phone' => 9898983980
);
echo "<pre>";
print_r(array_change_key_case($a,CASE_UPPER)); // CASE_UPPER, CASE_LOWER.
echo "</pre>";

/*---- array_chunk ---------*/

$a = array("dhinesh","ganesh","ramesh","suresh","dhanush");
echo "<pre>";
print_r(array_chunk($a,2));
echo "</pre>";

/*----- array_column ----*/

$a = array(
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

    $last_col = array_column($a,'phone');
    echo "<pre>";
    print_r($last_col);
    echo "</pre>";

/*--------- array_combine -------*/

$student = array("dhinesh","ramesh","ganesh");
$subject = array("php","java","python");

$a = array_combine($student,$subject);
echo "<pre>";
print_r($a);
echo "</pre>";

/* -------- array_count_values ------- */

$a = array(10,20,30,40,20,50,10,10);

$count = array_count_values($a);
echo "<pre>";
print_r($count);
echo "</pre>";

/*--------- array_diff ----*/

$a = array(1 => 'apple', 2 => 'grapes', 3 => 'orange', 4 => 'mango');
$a2 = array(5 => 'apple', 6 => 'orange', 7 => 'grapes');

$dif = array_diff($a,$a2);
print_r($dif);

/*------ <array_diff_assoc-----*/

$a = array(1 => 'apple', 2 => 'grapes', 3 => 'orange', 4 => 'mango');
$a2 = array(1 => 'apple', 2 => 'grapes', 3 => 'orange');

$dif = array_diff_assoc($a,$a2);
print_r($dif);

/*--------- array_diff_key -------*/

$a = array("a" => "apple", "b"=> "mango", "c" => "orange");
$a2 = array("a" => "apple","c" => "orange","d" => "grapes");

$dif = array_diff_key($a,$a2);
print_r($dif);

/*------ array_fill()-----*/

echo "<pre>";
print_r(array_fill(4,5,'dhinesh'));
echo "</pre>";

/* ---- array_fill_keys ----- */

$a = array(1,2,3,4,5);
$key = array_fill_keys($a,'dhinesh');
echo "<pre>";
print_r($key);
echo "</pre>";

/* ------- array_flip ------ */

$a = array(1 => "orange",2 => "mango",3 => "pineapple",4 => "apple");

$res = array_flip($a);
echo "<pre>";
print_r($res);
echo "</pre>";

/*------- sizeof() --------*/

$a = array("mango","orange","lemon","apple");

echo sizeof($a);

/*------- sort -------*/

$s = array(30,60,70,90,40,10,20,80,50);

sort($s);
echo "<pre>";
print_r($s);
echo "</pre>";

/*----- in_array -----*/

$i = array("dhinesh","ramesh","ganesh","suresh");

$res = in_array("suresh",$i);
$fun = in_array("dhinesh",$i);
echo "<pre>";
print $res."<br>";
print $fun;
echo "</pre>";

$r = array("dhinesh","ramesh","ganesh","suresh");

if(in_array("dhinesh",$r)){
    echo "match found";
}
else{
    echo "not found";
}

/* ------ list()-----*/

$animals = array("dog","cat","cow","horse");

list($a,$b,$c,$d) = $animals;
print "Aunty not only $a, All animals liking me.<br>";
print "I like $b, $c and $d";

/* ------ compact()------*/

$fname = "dhinesh";
$lname = "kumar";
$age = "22";

$res = compact("fname","lname","age");
echo "<pre>";
print_r ($res);
echo "</pre>";

/* -------- arsort ------- */

$a = array(
    3 => 60,
    5 => 30,
    6 => 10,
    9 => 70,
    7 => 20,
    4 => 50,
    2 => 80,
    8 => 40,
    1 => 90,
);

arsort($a);
echo "<pre>";
print_r ($a);
echo "</pre>";

/*---------- array_unquie --------- */

$a = array(1 => "dhinesh",2 => "ganesh",3 => "suresh",4 => "vignesh",5 => "ganesh",6 => "dinesh");

$res = array_unique($a);
echo "<pre>";
print_r($res);
echo "</pre>";

/*---------- explode() ------*/

$s = "Hii im your friend. Have a nice day!!!.";

$res = explode(" ",$s);
echo "<pre>";
print_r($res);
echo "</pre>";

/*------- implode()------*/

$s = array('preetha','is','a','good','girl');

$res = implode(" ",$s);
echo "<pre>";
print_r($res);
echo "</pre>";

/*------- extract()------*/

$fun = array("a" => "dhinesh","b" => "ganesh","c" => "suresh");

extract($fun);
echo "\$a = $a; \$b = $b; \$c = $c";

/*-------- array_sum()---------*/

$sum = array(10,5,20);

$res = array_sum($sum);
echo "<pre>";
print_r($res);
echo "</pre>"; 

/*-------- array_shift()-----*/

$shift = array("a" => "php","b" => "python", "c" => "java");

$res = array_shift($shift);
echo "<pre>";
print $res."<br><br >";
print_r($shift);
echo "</pre>";

/*----------- array_pop()------*/

$pop = array("a" => "php","b" => "python", "c" => "java");

array_pop($pop);
echo "<pre>";
print_r($pop);
echo "</pre>";

/*-------- array_merge()------*/

$a = array(1,2,3);
$a1 = array(4,5,6);

$res = array_merge($a,$a1);
echo "<pre>";
print_r($res);
echo "</pre>";

/*------- array_search()------*/

$s = array("preetha","abitha","suhitha","amutha");

echo array_search("amutha",$s);

/*-------- array_reverse()------*/

$s = array("dhinesh","suresh","ganesh","vignesh");

print_r(array_reverse($s));

/*---------- array_keys()------*/

$s = array("a"=>200,"b"=>1000,"c"=>800);
echo "<pre>";
print_r(array_keys($s));
echo "</pre>";

?>
