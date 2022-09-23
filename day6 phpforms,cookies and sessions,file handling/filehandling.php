<html>
    <head><title>doc</title></head>
    <body>
    <?php
// read.....
/*
$myfile = fopen("file.txt","r");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
*/
/*
$myfile = fopen("file.txt","r");
while(!(feof($myfile))){
    echo fgets($myfile)."<br>";
fclose($myfile);
*/
/*
$myfile = fopen("file.txt","r") or die("unable to read the file");
while(!(feof($myfile))){
    echo fgetc($myfile)."<br>";
}
fclose($myfile);
*/
// write......
$myfile = fopen("new2.txt","w") or die("unbale to write a file");
$text1 = "dhinesh\n";
echo fwrite($myfile,$text1);
$text2 = "QRST\n";
echo fwrite($myfile,$text2);
fclose($myfile);
?>
    </body>
</html>
