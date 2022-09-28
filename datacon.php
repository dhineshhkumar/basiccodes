
    <?php
// database connectivity
$conn = mysqli_connect("localhost","root","","details" );
if(!$conn){
 die("connection error".mysqli_connect_error());
}
else{
    echo("database connected successfully");
}
?>