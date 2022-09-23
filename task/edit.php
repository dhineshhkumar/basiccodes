<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
    $conn=mysqli_connect("localhost","root","","details");
    if(!$conn){
        die('Not connected' .mysqli_connect_error());
    }
    $id=$_GET['id'];
    $sql = "SELECT * FROM `form` where id=$id";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if($numrow==1){
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container mt-5">
        <div class="row">
        <div class="col-6">
        <div class="card">
            <div class="card-header">UPDATE</div>
            <div class="card-body">
            <form action="edit.php" method="post">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <div class="mb-3">
                                <label for="Fullname">Fullname</label>
                                <input type="text" class="form-control" id="Fullname" name="fname" value="<?=$row['fname']?>" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" name="email" value="<?=$row['email']?>" id="Email" mailto:placeholder="your@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="Phonenumber">Phonenumber</label>
                                <input type="number" name="phone" id="Phonenumber" value="<?=$row['phone']?>" class="form-control" placeholder="+91-number" required>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" name="UPDATE">UPDATE</button>
                            </div><br>
                        </form>
            </div>
        </div>
        </div>
        </div>
    </div>            
    <?php } ?>
    <?php } ?>
    <?php
if(isset($_POST['UPDATE'])){
    $conn=mysqli_connect("localhost","root","","details");
 if(!$conn){
    die('Not connected' .mysqli_connect_error());
 }
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql = "UPDATE form set fname='$fname',email='$email',phone='$phone' where id=$id";
    $result = mysqli_query($conn, $sql);


}
?>
</body>
</html>