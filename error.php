<?php

/*----- die function() -------*/

// $myfile = fopen("sample.txt", "r") or die("unable to open the txt file");

// echo fread($myfile,filesize("sample.txt"))."<br><br>";
// fclose($myfile);


// if(!file_exists("file.txt")){
	
// 	die("unable to open the file"); 
// }
// else{
// 	$myfile = fopen("file.txt","r" );
// 	echo fread($myfile,filesize("file.txt"))."<br><br>";
// 	print "file opened successfully";
// 	fclose($myfile);
// }

/*-------- error handler function ---------*/

error_reporting(E_ERROR);
function errorhandler($errno,$errstr){
	echo "ERROR NO : [$errno], $errstr "; 
	echo "\n";
	echo "Terminating php script"; 
	die();
}

set_error_handler("errorhandler");
$f = fopen("file.txt","r");
echo fread($f,filesize("file.txt"));
fclose($f);




?>