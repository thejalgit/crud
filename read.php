<?php
include 'connection.php';
$sql = mysqli_query($conn,"SELECT * FROM students_data");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-4 mt-5">
                

            <table class=" table table-bordered table-info ">

<tr>
    <th>name</th>
    <th>class</th>
    <th>mark</th>
    <th colspan="2">Action</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($sql))
{
    ?>
    <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['class'];?></td>
        <td><?php echo $row['mark'];?></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>"class="btn btn-primary">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"class="btn btn-danger">Delete</a></td>
     
        
    </tr>
    <?php
}?>
</table>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>