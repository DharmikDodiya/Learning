<?php

echo "<h1>"."While Loop"."</h1>";

$i = 10;
while($i<=50){
    echo "<h1>".$i."</h1>";
    $i+=10;
}


echo "<h1>"."Do While Loop"."</h1>";

$name = "Hello World";
$j = 1;
do{
    echo "<br>".$name."</br>";
    $j++;
}while($j<=5);




echo "<h1>"."For Loop"."</h1>";

function Prime($no)
{
 for($x=2; $x<$no; $x++)
   {
      if($no %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = Prime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";



echo "<h1>"."Foreach Loop"."</h1>";

$employee = array( 
    "name" => "Dharmik", 
    "email" => "Dharmik@gmail.com", 
    "age" => 21, 
    "gender" => "male"
  
); 
  
// Loop through employee array 
foreach($employee as $key => $element) { 
    echo $key . ": " . $element . "<br>"; 
} 

?>
