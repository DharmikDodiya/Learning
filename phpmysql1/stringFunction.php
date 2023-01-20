<?php

$string = "Hello PHP";


$string1 = "    Dharmik Dodiya     ";

echo "<br>".strlen($string)."</br>";

echo "<br>".str_word_count($string)."</br>";

echo "<br>".strrev($string)."</br>";

echo "<br>".str_repeat($string,5)."</br>";

echo "<br>".str_replace("Hello","Hiii",$string)."</br>";

echo "<br>".trim($string1)."</br>";

echo "<br>".ltrim($string1)."</br>";


echo "<br>".rtrim($string1)."</br>";


echo "<br>".strtolower($string1)."</br>";

echo "<br>".strtoupper($string1)."</br>";

echo strpos("This Is PHP Program","PHP");

echo "<br>";
$var1 = 'Hello John';
$var2 = 'Hello Doe';
if (strncmp($var1, $var2, 5) === 0) {
    echo 'First 5 characters of $var1 and $var2 is equals in a case-sensitive string comparison';
}


?>