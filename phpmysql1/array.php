<?php

$arr1 = array('Dog','Cat','Lion','Monkey');
echo count($arr1);

echo "<h1>"."Indexed Array"."<h1>";
echo $arr1[0]."<br>";
echo $arr1[1]."<br>";
echo $arr1[2]."<br>";
echo $arr1[3]."<br>";


echo "<h1>"."Using Loop"."<h1>";
$arr1length = count($arr1);

for($x = 0; $x < $arr1length; $x++) {
  echo $arr1[$x];
  echo "<br>";
}


echo "<h1>"."Associative Arrays"."<h1>";

$arr2 = array("Dharmik"=>"21","Sarman"=>"22","Shivang"=>"24");
foreach($arr2 as $name => $age){
    echo "Key :".$name ."|". "Value =".$age;
    echo "<br>";
}


echo "<h1>"."Multidimentional Arrays"."<h1>";

$marks = array(
    "Dharmik"=>array(
        "java"=>88,
        "PHP"=>90,
    ),
    "Shivang"=>array(
        "Laravel"=>81,
        "CSS"=>78,
    ),
    "Sarman"=>array(
        "Python"=>85,
        "SEO"=>89,
    ),
);

echo "Marks For Dharmik in PHP :";
echo $marks['Dharmik']['PHP'];
echo "<br>";

echo "Marks For Shivang in PHP :";
echo $marks['Shivang']['CSS'];
echo "<br>";

echo "Marks For SaRman in PHP :";
echo $marks['Sarman']['SEO'];
echo "<br>";

echo "<h1>"."Sorting Arrays"."<h1>";

$colors = array("Red", "Green", "Blue", "Yellow");
echo "<br>"."Ascending Order"."<br>";
sort($colors);
print_r($colors);
echo "<br>"."Descending Order"."<br>";
rsort($colors);
print_r($colors);


$age = array("Dharmik"=>20, "Shivang"=>14, "Sarman"=>45, "Hitesh"=>35);
echo "<br>"."Associative Array in ascending order by value"."<br>";
asort($age);
print_r($age);
echo "<br>"."Associative Array in descending order by value"."<br>";
arsort($age);
print_r($age);


$age = array("Dharmik"=>20, "Shivang"=>14, "Sarman"=>45, "Hitesh"=>35);
echo "<br>"."Associative Array in ascending order by Key"."<br>";
ksort($age);
print_r($age);
echo "<br>"."Associative Array in descending order by Key"."<br>";
krsort($age);
print_r($age);




?>