<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <style>
        .Errmsg{
            color: red;
        }
     </style>
<title>required</title>
</head>
<body>
    <?php
    $nameErr = $emailErr = $phoneErr ="";
    $name = $email = $phone = $comment ="";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name'])){
            $nameErr = "This field require name";
        }
        else{
            $name = test_input($_POST["name"]);
        }
        if(empty($_POST['email'])){
            $emailErr = "this field require email";
        }
        else{
            $email = test_input($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email";
            }
        }
        if(empty($_POST["phone"])){
            $phoneErr = "This field require phone";
        }
        else{
            $phone = test_input($_POST["phone"]);
        }
        if(empty($_POST["comment"])){
            $commentErr = "This field require comment";
        }
        else{
            $comment = test_input($_POST["comment"]);
        }
    }
    
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
<div class="container">
    <h2>PHP Form required</h2>
    <p><span class = "Errmsg">*Required</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <div class="mb-3">
            <label for="Name">Name</label>
            <input type="text" name="name" id="Name" placeholder="Enter your name">
            <span class = "Errmsg">*<?php echo $nameErr; ?></span>
        </div>
        <div class="mb-3">
            <label for="Email">Email</label>
            <input type="email" name="email" id="Email" placeholder="your@gmail.com">
            <span class="Errmsg">*<?php echo $emailErr;?></span>
        </div>
        <div class="mb-3">
            <label for="Phone">Phone</label>
            <input type="tel" name="phone" id="Phone" placeholder="+91-number">
            <span class="Errmsg">*<?php echo $phoneErr;?></span>
        </div>
        <div class="mb-3">
            <label for="Comment">Comment</label>
            <textarea name="comment" id="Comment" cols="30" rows="5" placeholder="Type your comment"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="Submit">
        </div>
        </form>
        <?php
        echo "<h3>Your Input : </h3>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $comment;
        ?>
</body>
</html>