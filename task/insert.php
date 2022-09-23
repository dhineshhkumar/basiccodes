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
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">FORM</div>
                    <div class="card-body">
                        <form action="insert.php" method="post">
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
                                <button type="submit" class="btn btn-success" id="submit" name="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

$conn = mysqli_connect("localhost","root","","details" );
if(!$conn){
 die("connection error".mysqli_connect_error());
}

if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$table = 'INSERT INTO form (fname,email,phone) VALUES("'.$fname.'","'.$email.'","'.$phone.'")';

$result = mysqli_query($conn, $table);
if($result){
echo "successfully inserted";
}
else{
echo "not inserted";
}
}
?>
</body>
</html>

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
    <div class="container mt-5">
       <div class="row">
        <div class="col-8">
        <div class="card">
            <div class="card-header">TABLE</div>
            <div class="card-body">
                <?php
                $conn = mysqli_connect("localhost","root","","details");
                if(!$conn){
                    die("connection error" .mysqli_connect_error());
                }

                $table = "SELECT * from form";
                $result = mysqli_query($conn, $table);
                $numrow = mysqli_num_rows($result);
                if($numrow>0){
                    echo '<table class="table">';
                    echo '<tr>';
                    echo '<th>id</th>';
                    echo '<th>fname</th>';
                    echo '<th>email</th>';
                    echo '<th>phone</th>';
                    echo '<th>Action</th>';
                    echo '</tr>';
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        echo '<tr>';
                        echo '<td>' .$row['id']. '</td>';
                        echo '<td>' .$row['fname']. '</td>';
                        echo '<td>' .$row['email']. '</td>';
                        echo '<td>' .$row['phone']. '</td>';
                        echo '<td><button type="submit" class="btn btn-success" id="update" name="update" value="update"><a href ="edit.php? id='.$id.'">EDIT</a></button>'; 
                        echo '</tr>';
                    }
                    echo '</table>';
                }
                ?>
            </div>
        </div>
        </div>
       </div>
    </div>
</body>
</html>