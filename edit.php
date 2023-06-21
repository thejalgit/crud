<?php
include 'connection.php';  

$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM students_data WHERE id='$id'");
$data =mysqli_fetch_assoc($sql);

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $class = $_POST['class'];
    $mark = $_POST['mark'];
    $sql = mysqli_query($conn,"UPDATE students_data SET name='$name',class='$class',mark='$mark' WHERE id='$id'");
    if($sql)
    {
        echo'<script>alert("updated sucessfully");window.location.href="read.php";</script>';
    }
    else
    {
        echo'<script>alert("something went wrong");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 mt-5" style="background-color: bisque;">
                <h5>Edit your details here</h5>
                <form method="POST">
                    <div class ="form-group mt-5">
                        <input type="text" class="form-control mt-2"name="name" value="<?php echo $data['name'];?>"><br>
                        <input type="number" class="form-control mt-2"name="class" value="<?php echo $data['class'];?>"><br>
                        <input type="number" class="form-control mt-2"name="mark" value="<?php echo $data['mark'];?>"><br>
                        <center> <input type="submit" class="btn btn-success mt-2"name="submit"value="update"></center>

                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>