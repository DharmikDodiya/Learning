<?php

include_once('database.php');
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
echo "Connected successfully";
$sql = "INSERT INTO Blog (bname, bdesc,image,3) VALUES ('sport blog', 'sdfjshkdsfjhkj', 'dfgjdgkdjgh')";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>