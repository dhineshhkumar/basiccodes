<?php 
class MyClass{
    public $fruit = "Apple";
    public $price = 16000;
    public function vscode(){
        $laptop = "asus";
        $x = 10;
        $y = 20;
        $c = $x + $y;
        echo "The value of c ".$c;
        echo '<br>';
        echo $laptop;
        echo '<br>';
       echo $laptop .' '. $this -> price;
    }
}

$obj = new MyClass();

$obj -> vscode();
echo '<br>';
echo $obj -> fruit;

?>