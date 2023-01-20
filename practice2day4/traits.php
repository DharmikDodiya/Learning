<?php
trait Say{
    public function method1(){
        echo "Hello";
    }
}

trait Hello{
    public function method2(){
        echo "PHP";
    }
}

class MyHelloPhp{
    use say,hello;
    public function sign(){
        echo "!...";
    }
}

$obj1 = new MyHelloPhp();
$obj1->method1();
$obj1->method2();
$obj1->sign();
?>