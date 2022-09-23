<?php 
 
 // single inheritance

// class a{
//     function parent(){
//         echo "This is america <br>";
//     }
// }
// class b extends a{
//     function child(){
//         echo "This is africa <br>";
        
//     }
// }

// $obj = new b();
// $obj -> parent();
// $obj -> child();

// multilvl inheritance 

class f{
    function preetha(){
        echo "This is pudukottai <br>";
    }
}
class g extends f{
    function amutha(){
        echo "This is kovilpatti <br>";
    }
}
class e extends g{
    function amucas(){
        echo "This is singanallur <br>"; 
    }
}

$val = new e();
 $val -> preetha();
 $val -> amutha();
 $val -> amucas();
 
?>