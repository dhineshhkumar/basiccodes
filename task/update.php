<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
<title>Document</title>
</head>
<body>
<?php 
                        if(isset($_GET['id'])){
                        $conn = mysqli_connect("localhost","root","","details");
                        if(!$conn){
                            die("connection error" .mysqli_connect_error());
                        }
                        
                            $id = $row['id'];
                            $table = "SELECT * FROM form where id = $id";
                            $result = mysqli_query($conn,$table);
                            $numrow = mysqli_num_rows($result);
                            if($numrow>0){
                                $row = mysqli_fetch_assoc($result);
                        ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">FORM</div>
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <div class="mb-3">
                            <label for="Fullname">Fullname</label>
                            <input type="text" name="fname" class="form-control" id="Fullname" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="Email">Email</label>
                                <input type="email" name="email" id="Email" class="form-control" placeholder="Your@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="Phonenumber">Phonenumber</label>
                                <input type="tel" name="phone" id="Phonenumber" class="form-control" placeholder="+91-number" maxlength="10" minlength="10" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success" id="update" name="update" value="update">UPDATE</button>
                            </div>
                        </form>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['update'])){

$conn = mysqli_connect("localhost", "root", "", "details");
if(!$conn){
die ("connection error" .mysqli_connect_error());
}
else{
echo "connected successfully";
}

$id = $_POST('id');
$fname = $_POST('fname');
$email = $_POST('email');
$phone = $_POST('phone');

 $table = "UPDATE form SET fname = '$fname', email = '$email', phone = '$phone' where id=$id";
 $result = mysqli_query($conn,$table);
 if($result){
 echo "successfully updated";
 }
 else{
 echo "not updated";
 }
}
?>		   
</body>
</html>
