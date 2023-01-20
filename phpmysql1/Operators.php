<?php

$num1 = 80;
$num2 = 40;

echo "<h1>"."Arithmetic operators"."<h1>";

echo $num1 + $num2;
DropLine();
echo $num1 - $num2;
DropLine();
echo $num1 * $num2;
DropLine();
echo $num1 / $num2;
DropLine();
echo $num1 % $num2;


echo "<h1>"."assignment operators"."<h1>";
echo $c = $num1 + $num2;
DropLine();
echo $c += $num1;
DropLine();
echo $c -= $num1;
DropLine();
echo $c *= $num1;
DropLine();
echo $c /= $num1;
DropLine();
echo $c %= $num1;
DropLine();

echo "<h1>"."Comparison operators"."</h1>";


function DropLine(){
    echo "<br>";
}

$a = 42;
$b = 20;


if($a == $b){
    echo "a Is equal To b";
    DropLine();
}else{
    echo "A is not equal to B";
    DropLine();
}


if($a != $b){
    echo "A Is Not Equal To B";
    DropLine();
}else{
    echo "A Is Equal To B";
    DropLine();
}

if($a === $b){
    echo "A Is equal And Same Type To the B";
    DropLine();
}else{
    echo "A IS Not equal and Not Same Type Of B";
    DropLine();
}

if($a <> $b){
    echo "A Is Not Equal To B";
    DropLine();
}else{
    echo "A Is Equal To B";
    DropLine();
}

if($a !== $b){
    echo "A IS Not equal and Not Same Type To B";
    DropLine();
}else{
    echo "A IS equal and Same Type Of B";
    DropLine();
}


if($a > $b){
    echo "A Is Greater Than B";
    DropLine();
}
elseif($a < $b){
    echo "A IS Less Than B";
    DropLine();
}
elseif($a >= $b){
    echo "A Is Greater Than Or Equal To B";
    DropLine();
}
elseif($a <= $b){
    echo "A Is Less Than Or equal To B";
    DropLine();
}


echo "<h1>"."Increment/Decrement Operator"."</h1>";

echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h1>"."Logical Operators"."</h1>";

$x = 50;
$y = 30;
  if ($x == 50 and $y == 30)
      echo "and Success ";
      DropLine();
 
  if ($x == 50 or $y == 20)
      echo "or Success ";
      DropLine();
    
  if ($x == 50 xor $y == 20)
      echo "xor Success ";
      DropLine();
 
  if ($x == 50 && $y == 30)
      echo "&& Success ";
      DropLine();
 
  if ($x == 50 || $y == 20)
      echo "|| Success ";
      DropLine();
 
  if (!$z)
      echo "! Success ";


echo "<h1>"."String Operators"."</h1>";
$hello = "Hello";
$World = "World";

echo $hello.$World;


echo "<h1>"."Array Operators"."</h1>";


$arr1 = array("a" => "apple", "b" => "banana");
$arr2= array("a" => "pear", "b" => "strawberry", "c" => "cherry");
$sum = $arr1 + $arr2; 
echo "Union of \$arr1 and \$arr2 : <br />";
var_dump($sum);
$sum = $arr2 + $arr1; 
echo "<br />Union of \$arr2 and \$arr1 : <br />";
var_dump($sum);

?>