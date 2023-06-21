<?php
include 'connection.php';
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM students_data WHERE id='$id'");
if($sql)
{
    echo'<script>alert("Record deleted sucessfully");window.location.href="read.php";</script>';

}
else
{
    echo "something went wrong";
}
?>