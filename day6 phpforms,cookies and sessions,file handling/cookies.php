<?php 

$name = "key";
$value = 1576;
setcookie($name,$value,time() +8600, "/");

//  if(!isset($_COOKIE[$name])){
//     echo "cookie is not set";
//  }
//  else{
//     echo "cookie is set : ".$_COOKIE[$name];
//  }

if(count($_COOKIE)>0){
    echo "cookie is enabled";
}
else{
    echo "cookie is not enabled";
}

?>