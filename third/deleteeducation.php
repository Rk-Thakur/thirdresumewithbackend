<?php
include('config.php');
$id=$_REQUEST['id'];
$query="DELETE FROM education WHERE id=$id";
$result=mysqli_query($conn,$query);
header("Location: third.php");
?>