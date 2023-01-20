<?php

abstract class Base {
    function __construct(){
        echo "This Is Base Class Conctructor";
    }
    abstract function printData();
}

class Child extends Base{
    function __construct(){
        echo "This Is Child Class Constructor\n";
    }
    function printData(){
        echo "This Is Base Class PrintData";
    }
}

$obj1 = new Child;
$obj1->printData();

?>