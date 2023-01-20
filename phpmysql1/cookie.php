<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    setcookie("MyName","Dharmik",time() + 1*2*2);
?>
<body>
<?php
    if(isset($_COOKIE["MyName"]))
    {
        echo "MyName Is a  ".$_COOKIE["MyName"];
    }
    else
    {
        echo "No Name For MyName";
    }
?>


</body>
</html>