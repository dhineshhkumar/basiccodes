<?php

$email = "sdhinesh140@gmail.com";
$subject = "sending email test";
$body = "Hi, Im dhinesh kumar";

$header = "from:sdhinesh140@gmail.com \r\n";
$header = "MIME-version: 1.0\r\n";
$header = "content type: text/plain\r\n";

if(mail($email,$subject,$body,$header)){
    echo "email successfully sent";
}
else{
    echo "email sending fail";
}

?>
