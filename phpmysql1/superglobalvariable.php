<?php

echo "<h1>"."GLOBALS variable"."<h1>";


$num1 = 45;
$num2 = 34;

function Addition(){
    $GLOBALS['sum'] = $GLOBALS['num1'] + $GLOBALS['num2'];
}

Addition();
echo $sum;

echo "<h1>"."server variable"."<h1>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


echo "<h1>"."REQUEST variable"."<h1>";
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">  
Enter name: <input type="text" name="name"/><br><br>   
<input type="submit"/>  
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}


echo "<h1>"."post variable"."<h1>";
?>

<form action="registeration.php" method="post">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit">
</form>
<?php
echo "<h1>"."Get variable"."<h1>";
?>
<form action="login.php" method="get">
Name: <input type="text" name="name">
salary: <input type="text" name="salary">
<input type="submit">
</form>


<?php
echo "<h1>"."FILES variable"."<h1>";
?>
<form action="files.php" method="POST" anctype="multipart/form-data">
<label for="file">FileName:</label>
<input type="file" name="file" id = "file">
<input type="submit" name="submit" value = "submit">

</form>


<?php
echo "<h1>"."ENV variable"."<h1>";

echo "<h1>"."GET ENV"."<h1>";


$arr=getenv();
foreach ($arr as $key=>$val)
echo "$key=>$val";

echo "<h1>"."PUT ENV"."<h1>";

putenv("PHP_TEMPUSER=GUEST");
echo "Temp user: " . getenv("PHP_TEMPUSER");



?>








