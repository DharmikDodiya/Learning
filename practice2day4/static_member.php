<?php

class Myclass{
    static $name = "Dharmik";

    public function Dispaly(){
        echo self :: $name;
    }
}
$obj1 = new Myclass();
$obj1->Dispaly();


?>