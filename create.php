<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $class=$_POST['class'];
    $mark=$_POST['mark'];
    $sql =  mysqli_query($conn,"INSERT INTO `students_data`( `name`, `class`, `mark`) VALUES ('$name','$class','$mark')");


 if($sql)

{
    echo '<script>alert("registered sucessfully");header("location:hello.php");</script>';
}

else
{
    echo"error";

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 mt-5">
            <form method="POST">
    
    <label>Enter name</label>
    <input type="text" class="form-control" name="name"><br>
    <label>Enter mark</label>
    <input type="number" class="form-control" name="mark"><br>
    <label>Enter class</label>
    <input type="number" class="form-control" name="class">

    <input type="submit" class="btn btn-primary mt-2 mx-5 " name="submit">
</form>

            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>