<?php


require('database.php');

// $conn = mysqli_connect($servername, $username, $password, $database);
$id=$_REQUEST['id'];
echo $id;
$query = "DELETE FROM Blog WHERE bid=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: index.php"); 
?>