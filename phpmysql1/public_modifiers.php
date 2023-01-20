<?php
class Public_Modifiers{

    public $no1 = 100;
    public $no2 = 30;

    function add(){
        echo $a = $this->no1 + $this->no2;
        echo " ";

    }
}
class child extends Public_Modifiers{
    function sub(){
        echo $b = $this->no1 - $this->no2;
   }
}
   

$obj1 = new child;
$obj1->add();
$obj1->sub();

?>