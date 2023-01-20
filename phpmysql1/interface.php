<?php
interface Base{
    public function methodA();
    public function methodB();
}

class Child implements Base{
    public function methodA(){
        echo "Method A Called\n";
    }

    public function methodB(){
        echo "Method B Called";
    }
}
$obj1 = new Child();
$obj1->methodA();
$obj1->methodB();
?>