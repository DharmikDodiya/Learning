<?php

echo "<h1>"."============User Defined Function=============="."<h1>";

function Myfun(){
    echo "Hello Everyone Good Morning...";
    Dropline();
}
Myfun();

function Dropline(){
    echo "<br>";
}


function Student($name,$age){  
    echo "Hello $name, you are $age years old<br/>";  
}  
Student("Dharmik",21);  
Dropline();
Student("Sarman",22);  
Dropline();
Student("Hitesh",25);  

Dropline();
Dropline();


echo "<h1>"."================Call By Reference==============="."<h1>";

function AddString(&$str2){
    $str2 .= 'World';
}
$str = 'Hello';
AddString($str);
echo $str;


echo "<h1>"."================Default Argument===================="."<h1>";

function Myfun2($name = "Dharmik"){
    echo "My Name $name";
}
Myfun2("sarman");
echo "<br>";
Myfun2("Hitesh");
echo "<br>";
Myfun2();

echo "<h1>"."===============Returning Value======================="."<h1>";

function Cube($no){
    return $no * $no * $no;
}
echo (Cube(6));
echo "<br>";
echo (Cube(5));

echo "<h1>"."===============Parameterized Function================="."<h1>";

function Multiply($x,$y)    
{  
    $mul=$x*$y;  
    echo "Multiplication = $mul <br><br>";  
}  
function Addition($x,$y)    
{  
    $add=$x+$y;  
    echo "Addition = $add <br><br>";  
}  
if(isset($_POST['Multiply']))  
{  

 Multiply($_POST['first'],$_POST['second']);  
}     
if(isset($_POST['Addition']))  
{  

Addition($_POST['first'],$_POST['second']);  
}  
?>
<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="Addition" value="ADDITION"/>  
<input type="submit" name="Multiply" value="MULTIPLICATION"/>  
</form>    


<?php
echo "<h1>"."===============Call By Value ========================="."<h1>";
function swap($num1, $num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
    echo "The value of num1 is:".$num1."<br>";
    echo "The value of num2 is:".$num2."<br><br>";
}
if(isset($_POST['swap']))  
{  

 swap($_POST['first'],$_POST['second']);  
}   
?>
<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="swap" value="SWAP"/>  

</form>   


<?php
echo "<h1>"."===============variable length Arguments ========================="."<h1>";

function add(...$numbers){
    $sum = 0;

    foreach($numbers as $no){
        $sum += $no;
    }
    return $sum;
}
echo add(1,2,3,4,5);


echo "<h1>"."===============Recursive Function ========================="."<h1>";

function fact($no)
{
if ($no === 0)
{ 
    return 1;
}
else 
{
    return $no * fact($no-1); 
}
}
    echo fact(4);

?>




