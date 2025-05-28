<?php
$conn= mysqli_connect('localhost','root','','todo-list');
$delete_id=$_GET['delete_id'];

$query=mysqli_query($conn,"DELETE FROM tasks WHERE task_id=$delete_id");

if($query){
    header("location:./index.php");
}
else{
    echo("Fail To delete task, try again...");
}




?>
