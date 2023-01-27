<?php



$servername = "localhost";
$database = "test";
$username = "root";
$password = "ztlab117";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";



?>