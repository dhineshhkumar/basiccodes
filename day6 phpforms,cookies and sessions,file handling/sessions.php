<?php

session_start();

 $_SESSION['name'] = "programmer";
 $_SESSION['age'] = "46";
 echo $_SESSION['name']." => ".$_SESSION['age'];
 unset($_SESSION['age']);
 echo $_SESSION['name']." => ".$_SESSION['age'];

 session_destroy();
 echo $_SESSION['name']." => ".$_SESSION['age'];
 
 $_SESSION = [];
 echo $_SESSION['name'];

?>